<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <title>VNTG</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link ml-2" href="index_user.php">HOME</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link ml-2" href="buy_user.php">BUY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-2" href="#">SELL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-2" href="boutiques_user.php">BOUTIQUES</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link ml-2" href="contact_user.php">CONTACT</a>
            </li>
          </ul>
          <a class="navbar-brand" href="index_user.php">
            <img src="logo3.png" width="120" height="50" alt="">
          </a>
          <ul class="navbar-nav ">
          <li class="nav-item ml-3"> 
          <form class="form-inline d-flex justify-content-center md-form form-sm active-2 mt-2" action="search.php" method="get">
            <input class="form-control form-control-sm mr-2" type="text" placeholder="Search" name="search"
              aria-label="Search">
            <button><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </li>
        <li class="nav-item dropdown">
	        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user" style="font-size:27px;"></i></a>
	        <ul class="dropdown-menu">
		       <li id="dropdown_menu"><a class="dropdown-item" href="login.php">LOGOUT</a></li>
               <li id="dropdown_menu"><a class="dropdown-item" href="">ACCOUNT</a></li>
	    </ul>
	   </li>
            <li class="nav-item ml-2">
              <a class="nav-link" href="basket_user.php"><i class="fa fa-shopping-bag" style="font-size:25px;"></i></a>
            </li>
        </ul>
        </div>
</nav>
    
<nav aria-label="breadcrumb" class="breadcrumb navbar-expand-lg bg-light" >
       <ol class="breadcrumb bg-light">
         <li class="breadcrumb-item"><a href="index_user.php">Home</a></li>
         <li class="breadcrumb-item"><a href="buy_user.php">Buy</a></li>
         <li class="breadcrumb-item active" aria-current="page">Shopping Bag</li>
      </ol>
</nav><br>
    <!-- <div class="shipping-nav">
        FREE INTERNATIONAL SHIPPING FOR ORDERS 50+
    </div><br> --> 
    <div class="container">
    <div id="home_heading">
        MY SHOPPING BAG
    </div></div>  <br><br>
    <div class="container">
      <div class="row" id="basket_top">
          <div class="col-10 home_boutiques">Product</div>
          <div class="col-2 home_boutiques">Price</div>

      </div> <br>
<form action="place_order_user.php" method="post">
       <div class="row">
           <?php 
       

       if ($_SERVER["REQUEST_METHOD"] == "POST") {  

          $product_id = $_POST["product_id"]; 
          // echo $product_id;

          //  $_SESSION['cart']= array();
           
           $subtotal = 0 ;  

           $in = "False";
           
           foreach ($_SESSION['cart'] as $p) {
                  if($p == $product_id){
                     $in = "True";
                  }
           } 

           if ($in == "False"){
           
           
           array_push($_SESSION['cart'],$product_id); 
          }
           foreach($_SESSION['cart'] as $key=>$value)
            {
               
              //  echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />'; 
               require 'vendor/autoload.php';  

               $m = new MongoDB\Client("mongodb://127.0.0.1/");  
               $db = $m->VNTG;
               $collection = $db->products;

               $query = array('id' => $value);

               $cursor = $collection->find($query);
                      foreach ($cursor as $doc) {  

                        

                        echo '<div class="col-10">';
                         
                           echo '<a href="#"><img class="pic-1" src="images/'.$doc["photo"].'" width="100" height="120"></a>'; 
                           
                           echo $doc["description"];
                           
                        echo '</div>';
                        echo '<div class="col-2">';
                        echo $doc["price"];
                        echo '</div>';
                           $subtotal += $doc["price"];
                           echo '<br>';
                       }         
                       
                    
            }
       
         

        }
        //  session_destroy();
        // session_unset();
        ?>  
       </div>
        </div>
        <div class="container">
        <div class="cart content-wrapper">
    
   
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <span class="price">&dollar;<?=$subtotal?></span>
        </div>
        <section class="order-form my-4 mx-4">
        <div class="container pt-4">

         <div class="row">
          <div class="col-12">
           <h1>Peronal Details</h1>

          <hr class="mt-1">
          </div>
          <div class="col-12">

           <div class="row mx-4">
            <div class="col-12 mb-2">
              <label class="order-form-label">Name</label>
            </div>
            <div class="col-12 col-sm-6">
              <input class="order-form-input" placeholder="First" name="firstname" required> 
            </div>
            <div class="col-12 col-sm-6 mt-2 mt-sm-0">
              <input class="order-form-input" placeholder="Last" name= "lastname" required>
            </div>
          </div>


          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label">Adress</label>
            </div>
            <div class="col-12">
              <input class="order-form-input" placeholder="Street Address" name ="address"required>
            </div>
            <div class="col-12 mt-2">
              <input class="order-form-input" placeholder="Street Address Line 2" name="number" required>
            </div>
            <div class="col-12 col-sm-6 mt-2 pr-sm-2">
              <input class="order-form-input" placeholder="City" name="city" required> 
            </div>
            <div class="col-12 col-sm-6 mt-2 pl-sm-0">
              <input class="order-form-input" placeholder="Region" name="region" required>
            </div>
            <div class="col-12 col-sm-6 mt-2 pr-sm-2">
              <input class="order-form-input" placeholder="Postal / Zip Code" name="zip" required>
            </div>
            <div class="col-12 col-sm-6 mt-2 pl-sm-0">
              <input class="order-form-input" placeholder="Country" name="country" required>
            </div>
          </div>


         </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                       
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                        </ul>
                    </div> 
                    <div class="tab-content">
                       
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form">
                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fa fa-cc-visa mx-1"></i> <i class="fa fa-cc-mastercard mx-1"></i> <i class="fa fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV</h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                        </div>
                    </div> 
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                        <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                        <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> 
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>Bank 1</option>
                                <option>Bank 2</option>

                            </select> </div>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Pyment</button> </p>
                        </div>
                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> 
                </div>
            </div>
        </div>
    </div><br>
    </div>
    <div>    
        <input id="button_order" type="submit" value="Place Order" name="placeorder"> 
        
    </div><br>
</form>
</div>

   <section id="footer">
     <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>QUICK LINKS</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Buy</a></li>
                    <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Sell</a></li>
                    <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Boutiques</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>HELP</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="contact.php"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                    <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                    <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Returns</a></li>
                    <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Delivery</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>THE COMPANY</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About Us</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <hr>
        </div>	
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-black">
                <p class="h6">© All right Reversed.</p>
            </div>
            <hr>
        </div>	
        
</body>
</html>