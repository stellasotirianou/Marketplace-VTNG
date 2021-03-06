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
    <link rel="stylesheet" type="text/css" href="style.css?newversion">
    <script src="script.js"></script>
    <title>VNTG</title>
</head>
<body>
<!-- <div class="shipping-nav">
        FREE INTERNATIONAL SHIPPING FOR ORDERS 50+
    </div> -->
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
            <!-- <button><i class="fa fa-search" aria-hidden="true"></i></button> -->
          </form>
        </li>
        <li class="nav-item dropdown">
	        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user" style="font-size:27px;"></i></a>
	        <ul class="dropdown-menu">
		       <li id="dropdown_menu"><a class="dropdown-item" href="login.php">LOGOUT</a></li>
               <li id="dropdown_menu"><a class="dropdown-item" href="account.php">ACCOUNT</a></li>
	    </ul>
	   </li>
            <li class="nav-item ml-2">
              <a class="nav-link" href="basket_user.php"><i class="fa fa-shopping-bag" style="font-size:25px;"></i></a>
            </li>
        </ul>
        </div>
    </nav>
    
    <div class="fullscreen-bg">
        <video autoplay muted loop class="fullscreen-bg__video">
            <source src="intro.mp4" type="video/mp4">
        </video>
        <div class="overlay">
            <form action="buy.php">
                <p id="overlay-text">HOME TO THE BEST <br> INDEPENDENT BRANDS<br>AND VINTAGE BOUTIQUES</p>
                <button type="submit" id="overlay-button">SHOP</button>
            </form>
        </div>
    </div><br>
    <div class="container">
        <p id="home_description">
          VNTG Marketplace is home to small businesses including independent brands and vintage boutiques from around the world.
           <br><br>
          <span id="span_description">The best of vintage</span> <br><br>
          Whether you're on the hunt for a vintage sweatshirt from your fave brand, the perfect pair of vintage jeans or one-of-a-kind vintage dresses, our vintage boutiques have done the hard work for you, sourcing loads of incredible one-off items. Our 90s grunge and vintage sportswear edits are a great place to start.
        </p>
    </div><br>
    <div class="container">
       <p id="home_heading" onclick="window.location = 'boutiques.php';" onmouseover="" style="cursor: pointer;">
           DISCOVER MARKETPLACE
</p>
    </div>
    <div class="container">
      <div class="row top-buffer">
        <div class="col">
            <figure class="figure">
                <img src="CLOUT.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption text-center home_boutiques">CLOUT</figcaption>
            </figure>
        </div>
        <div class="col">
            <figure class="figure">
                <img src="RETRO_GAL.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption text-center home_boutiques">RETRO GAL</figcaption>
            </figure>      
        </div>
        <div class="col">
            <figure class="figure">
                <img src="VINTAHOLIC.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption text-center home_boutiques">VINTAHOLIC</figcaption>
            </figure>
        </div>
      </div>
      <div class="row top-buffer">
        <div class="col">
            <figure class="figure">
                <img src="THE_BASEMENT.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption text-center home_boutiques">THE BASEMENT</figcaption>
            </figure>
        </div>
        <div class="col">
            <figure class="figure">
                <img src="E-VINTAGE.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption text-center home_boutiques">E-VINTAGE</figcaption>
            </figure>      
        </div>
        <div class="col">
            
        </div>
      </div>
   </div><br>
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
                <p class="h6">?? All right Reversed.</p>
            </div>
            <hr>
        </div>	
        
</body>
</html>