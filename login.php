<?php 

session_start(); 

include 'config.php';

if(isset($_POST["login"])){
  $finduser = $collection -> findOne(array('$and' => array(array('username' => $_POST['username'], 'password' => $_POST['password']))));

  // $query = array('username' => $username , 'password'=> $password);

  // $cursor = $collection->findOne($query); 

  if($finduser==null) {
    echo "Invalid username or password";

  }
  else{
     if($finduser['type']== "admin"){
        header('Location: admin_new.php');
     }
     else{
      $_SESSION['username'] = $_POST['username'];
      header('Location: index_user.php');
     
     
     }
  }
}

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
    <link rel="stylesheet" type="text/css" href="style-registration.css">
    <script src="script.js"></script>
    <title>VNTG</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link ml-2" href="#">BUY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-2" href="#">SELL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-2" href="boutiques.php">BOUTIQUES</a>
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
        <li class="nav-item dropdown">
	        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user" style="font-size:27px;"></i></a>
	        <ul class="dropdown-menu">
		       <li id="dropdown_menu"><a class="dropdown-item" href="login.php">LOGIN</a></li>
		       <li id="dropdown_menu"><a class="dropdown-item" href="register .php">SIGNUP</a></li>
	    </ul>
	   </li>
            <li class="nav-item ml-2">
              <a class="nav-link" href="#"><i class="fa fa-shopping-bag" style="font-size:25px;"></i></a>
            </li>
        </ul>
        </div>
    </nav>
<div class="reg_form">
<form id="login" name="login" action="login.php" method="post">
 
   <h2>SIGN IN</h2><br>
   <div class="">
   <label>
    <p class="label-txt">ENTER YOUR USERNAME</p>
    <input type="text" class="input" name="username" value="" required> 
    <div class="line-box">
    <span class="help-block"></span>
      <div class="line"></div>
    </div>
  </label>
 </div>
 <div class="">
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" name="password" class="input" value="" required>
    <div class="line-box">
    <span class="help-block"></span>
      <div class="line"></div>
    </div>
  </label>
 </div>
  <button name="login" value="Login" type="submit">LOGIN</button>
</form>
<form id="signup" action="register.php">
   <div class="signup_form">
      <h3>DON'T HAVE AN ACCOUNT?</h3><br>
      <button type="submit">JOIN US</button>
   </div>
</form>
</div>
   <section id="footer">
     <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>QUICK LINKS</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Buy</a></li>
                    <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Sell</a></li>
                    <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Boutiques</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>HELP</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
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