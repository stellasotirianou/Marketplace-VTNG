<?php 
    require 'vendor/autoload.php';  

    $m = new MongoDB\Client("mongodb://127.0.0.1/");  
    
    
    $db = $m->VNTG;
    $collection = $db->boutiques;

    // $insertManyResult = $collection->insertMany([
    //             [    "name" => "CLOUT"
    //             ],
    //             [
    //                "name" => "THE BASEMENT"
    //             ],
    //             [
    //                 "name" => "RETROGAL"
    //              ],
    //              [
    //                 "name" => "E-VINTAGE"
    //              ],
    //              [
    //                 "name" => "VINTAHOLIC"
    //              ],

    // ]);

?>
<!DOCTYPE html>
<html lang="en">
<head> 

<head>
        <link rel="icon" href="tech-logo-cr.png" type="image/png" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/6c1c5be1ad.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="tech.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="tech.js?newversion"></script>

       <link rel="stylesheet" type="text/css" href="style.css?newversion">
    <script src="script.js"></script>
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
            <!-- <button><i class="fa fa-search" aria-hidden="true"></i></button> -->
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
         <li class="breadcrumb-item active" aria-current="page">Boutiques</li>
      </ol>
</nav><br>
    <div class="container">
        <p id="boutiques_heading">
           BOUTIQUES CATALOGUE
        </p> 
        <p id="boutiques_description">
        You’ll find all of our independent brands and vintage boutiques right here.
        </p>
        
    </div> 
  <section class="details-card">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="images/CLOUT2.png" alt="">
                        <span><h4>TOP RATED</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>CLOUT</h3>
                        <p>Released in 2017, CLOUT is a subversive ready to wear clothing brand which cerebrates the French’s know how.</p>
                           <a href="#" class="btn-card">BUY</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                <div class="card-img">
                        <img src="images/E-VINTAGE2.png" alt="">
                        <span><h4>NEW</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>E-VINTAGE</h3>
                        <p>E-VINTAGE specialises in branded vintage clothing at affordable prices...think 80s, 90s, 00s.</p>
                          <a href="#" class="btn-card">BUY</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="images/VINTAHOLIC2.png" alt="">
                        <span><h4>PROMOTED</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>VINTAHOLIC</h3>
                        <p>Sustainable and ethically produced slow fashion label...We  welcome you along to the dreamy ride.</p>
                            <a href="#" class="btn-card">BUY</a>   
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="images/THE_BASEMENT2.png" alt="">
                        <span><h4></h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>THE BASEMENT</h3>
                        <p>Unique selected true vintage items from around the world.  Their stock is hand picked and carefully selected.</p>
                          <br>  <a href="#" class="btn-card">BUY</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                <div class="card-img">
                        <img src="images/RETRO_GAL2.png" alt="">
                        
                    </div>
                    <div class="card-desc">
                        <h3>RETRO GAL</h3>
                        <p>Choosing RETRO GAL is choosing to break the standards of your personality day-to-day. Be the only leader of your clothing identity</p>
                            <a href="#" class="btn-card">BUY</a>   
                    </div>
                   
                </div>
            </div>
           
        </div>
    </div>
</section>
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
        
</body>
</html>