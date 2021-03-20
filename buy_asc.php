<?php 
// require_once "config.php";

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
   <link rel="stylesheet" type="text/css" href="style-buy.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
     <script src="menu.js"></script>

    <title>VNTG</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
           <li class="nav-item">
              <a class="nav-link ml-2" href="index.php">HOME</a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link ml-2" href="#">BUY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-2" href="#">SELL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-2" href="boutiques.php">BOUTIQUES</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link ml-2" href="contact.php">CONTACT</a>
            </li>
          </ul>
          <a class="navbar-brand" href="index.php">
            <img src="logo3.png" width="120" height="50" alt="">
          </a>
         <ul class="navbar-nav ">
          <li class="nav-item ml-3"> 
           <form class="form-inline d-flex justify-content-center md-form form-sm active-2 mt-2">
            <input class="form-control form-control-sm mr-2" type="text" placeholder="Search"
              aria-label="Search">
            <i class="fa fa-search" aria-hidden="true"></i>
           </form>
          </li>
          <li class="nav-item dropdown" >
	           <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user" style="font-size:27px;"></i></a>
	          <ul class="dropdown-menu">
		           <li id="dropdown_menu"><a class="dropdown-item" href="login.php">LOGIN</a></li>
		           <li id="dropdown_menu"><a class="dropdown-item" href="register.php">SIGN UP</a></li>
	           </ul>
	        </li>
          <li class="nav-item ml-2">
              <a class="nav-link" href="#"><i class="fa fa-shopping-bag" style="font-size:25px;"></i></a>
          </li>
         </ul>
        </div>
    </nav>
    <nav aria-label="breadcrumb" class="breadcrumb navbar-expand-lg bg-light" >
       <ol class="breadcrumb bg-light">
         <li class="breadcrumb-item"><a href="index.php">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Buy</li>
      </ol>
    </nav> 
    <div id="sidebar">
     <h3>GENDER</h3>
     <div class="checklist gender">
    	<ul>
        	<li><a href=""><span></span>WOMAN</a></li>
            <li><a href=""><span></span>MAN</a></li>
        </ul>
     </div>
     <h3>CATEGORIES</h3>
     <div class="checklist categories">
    	<ul>
        	<li><a href=""><span></span>New Arivals</a></li>
            <li><a href=""><span></span>Accesories</a></li>
            <li><a href=""><span></span>Bags</a></li>
            <li><a href=""><span></span>Dresses</a></li>
            <li><a href=""><span></span>Jackets</a></li>
            <li><a href=""><span></span>jewelry</a></li>
            <li><a href=""><span></span>Shoes</a></li>
            <li><a href=""><span></span>Shirts</a></li>
            <li><a href=""><span></span>T-shirts</a></li>
        </ul>
     </div>
    
     <h3>COLORS</h3>
     <div class="checklist colors">
    	<ul>
        	<li><a href=""><span></span>Beige</a></li>
            <li><a href=""><span style="background:#222"></span>Black</a></li>
            <li><a href=""><span style="background:#6e8cd5"></span>Blue</a></li>
            <li><a href=""><span style="background:#f56060"></span>Brown</a></li>
            <li><a href=""><span style="background:#44c28d"></span>Green</a></li>
        </ul>
        
        <ul>
        	<li><a href=""><span style="background:#999"></span>Grey</a></li>
            <li><a href=""><span style="background:#f79858"></span>Orange</a></li>
            <li><a href=""><span style="background:#b27ef8"></span>Purple</a></li>
            <li><a href=""><span style="background:#f56060"></span>Red</a></li>
            <li><a href=""><span style="background:#fff;border: 1px solid #e8e9eb;width:13px;height:13px;"></span>White</a></li>
        </ul>        
     </div>
    
     <h3>SIZES</h3>
     <div class="checklist sizes">
    	<ul>
        	<li><a href=""><span></span>XS</a></li>
            <li><a href=""><span></span>S</a></li>
            <li><a href=""><span></span>M</a></li>
        </ul>
        
        <ul>
        	<li><a href=""><span></span>L</a></li>
            <li><a href=""><span></span>XL</a></li>
            <li><a href=""><span></span>XXL</a></li>
        </ul>        
     </div>
    
     <h3>PRICE RANGE</h3>
     <input type="range" class="form-range" id="customRange1">
  </div> <br><br>
    <div class="container">
      <p id="home_description">
         Shop the latest directly from our vintage boutiques and independent labels. 
      </p> 
      <div id="grid-selector">
        <div id="showing">Showing 1–9 of 48 results</div> 
       	   <div class="dropdown" id="dropdown1"> 
            SORT: <button class="dropbtn">Recommended</button>
                      <div class="dropdown-content">
                         <a href="products_asceding.">Price- Low to High</a>
                         <a href="#">Price- High to Low</a>
                        </div>
            </div>
         </div>  
       </div> 
</div>
<br>
   
<div class="container">
    <div class="row">
        <?php 
        require 'vendor/autoload.php';  

        $m = new MongoDB\Client("mongodb://127.0.0.1/");  
 
        
        $db = $m->VNTG;
    

        $collection = $db->products; 
        
        $cursor = $collection->find(); 

        foreach ($cursor as $document) {

            echo '<div class="col-md-3 col-sm-6">';
            echo '<div class="product-grid6">';
            echo    '<div class="product-image6"><a href="#"><img class="pic-1" src='.$document["photo"].'></a></div>';
            echo    '<div class="product-content">';
            echo        '<h3 class="title"><a href="#">'.$document["description"].'</a></h3>';
            echo        '<h5 id="soldby">Sold by '.$document["boutique"].'</h5>';
            echo        '<div class="price">$'.$document["price"].'</div>';
            echo    '</div>';
            echo    '<ul class="social"><li><a href="product.php?id='.$document["id"].'">VIEW MORE</a></li></ul>';
            echo '</div>';
            echo '</div>';
        } 
        ?>
       
    </div><br><br>
   
</div>

<br>
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
</section>
        
</body>
</html>