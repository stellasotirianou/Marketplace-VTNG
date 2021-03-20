<?php 
session_start();
     require 'vendor/autoload.php';  

     $m = new MongoDB\Client("mongodb://127.0.0.1/");  
     $db = $m->VNTG;
     $collection = $db->products;

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style-products.css">
    <script>
        function button_add() {
              var button = document.getElementsByClassName(".addtocart");
             var done= document.getElementsByClassName(".done");
             var added = false;
             button.addEventListener('click',()=>{
             if(added){
    done.style.transform = "translate(-110%) skew(-40deg)";
    added = false;
  }
  else{
    done.style.transform = "translate(0px)";
    added = true;
  }
    
});
} </script>
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
         <li class="breadcrumb-item active" aria-current="page"> <?php 

$product_id = $_GET["id"]; 
$query = array('id' => $product_id);

$cursor = $collection->find($query);
foreach ($cursor as $doc) { 
       echo $doc["description"].'</a></h3>';
}
?></li>
      </ol>
    </nav><br><br>
   
    <div class="container" id="product-section">
       <div class="row"> 
          <div class="col-md-5">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
             </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                   <img src="images/<?php $query = array('id' => $product_id);

                     $cursor = $collection->find($query);   foreach ($cursor as $doc) { 
                     echo $doc["photo"];
                    }  ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                   <img src="pr2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
             </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
             </a>
     </div>

          </div>
          
          <div class="col-md-6">
              <div class="row">
                <div class="col-md-12">
                   <h1 id="title-pr"> <?php 
                   $query = array('id' => $product_id);

                   $cursor = $collection->find($query);
                          foreach ($cursor as $doc) { 
                               echo $doc["description"].'</a></h3>';
                           }             
                     ?></h1>
                </div>
               </div><br>
               <div class="row">
                <div class="col-md-12">
                   <p class="description">
                       1970's Style - Thick and Warm CONDITION: This item is a vintage/pre-worn piece so some signs of natural wear and age are to be expected.
                   </p>
                </div>
               </div>
               <div class="row">
                <div class="col-md-12">
                   <p class="labels-pr">
                     <span class="bold-pr"> BOUTIQUE</span>: <a href=""><?php 
                   $query = array('id' => $product_id);

                   $cursor = $collection->find($query);
                          foreach ($cursor as $doc) { 
                               echo $doc["boutique"];
                           }             
                     ?></a>
                   </p>
                </div>
               </div>
               <div class="row">
                <div class="col-md-12">
                   <p class="labels-pr">
                     <span class="bold-pr"> PRICE</span>: $<?php 
                   $query = array('id' => $product_id);

                   $cursor = $collection->find($query);
                          foreach ($cursor as $doc) { 
                               echo $doc["price"];
                           }             
                     ?>
                   </p>
                </div>
               </div>
               <div class="row">
                <div class="col-md-12">
                   <p class="labels-pr">
                     <span class="bold-pr"> SIZE</span>: <?php 
                   $query = array('id' => $product_id);

                   $cursor = $collection->find($query);
                          foreach ($cursor as $doc) { 
                               echo $doc["size"];
                           }             
                     ?>
                   </p>
                </div>
               </div><br><br>
               <div class="row"> 
                <div class="col-md-12">
                   <p class="labels-pr">
                     <span class="bold-pr" > DETAILS </span><br><br>
                     PRODUCT ID: <?php 
                        
                        
                         
                         $product_id = $_GET["id"]; 

                         echo $product_id."<br>";
                            ?>

                     COLOR: <?php 
                   $query = array('id' => $product_id);

                   $cursor = $collection->find($query);
                          foreach ($cursor as $doc) { 
                               echo $doc["color"];
                           }             
                     ?>
                   </p>
                </div>
               </div><br><br>
               <div class="row">
                <div class="col-md-12"> 
                <form action="basket_user.php" method="post">
                   <input type="hidden" name="product_id" value="<?=$product_id?>"></input>
                   <button onclick="button_add()" class="addtocart">
                       <div class="pretext">
                         <i class="fa fa-cart-plus"></i> ADD TO CART
                       </div>
                       <?php 
                        //  session_destroy();
                           session_start();
                           if(!isset($_SESSION[cart])){
                           $_SESSION['cart']=array();     
                           }
                       ?>
                    </button>
                 </form>
                </div>
               </div>
           </div>
        </div>
    </div><br><br><br>
    
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