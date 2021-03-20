<?php 

require_once "config.php";

$fname = $lname = $email = $username = $password = $confirm_password = "";
$fname_err = $lname_err = $email_err =$username_err = $password_err = $confirm_password_err = ""; 

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
   
  if(empty($_POST["username"])){
    $username_err = "Please enter a username.";
  }
  else {
    $query=array('username'=>$username);
        // //checking for existing user
        $count=$collection->findOne($query);

        if($count > 0 ){         
          
          $username_err = "Username is already existed.Please register with another username.";
        }
        else{
          $username = ($_POST["username"]); 
        } 
  } 

  if(empty($_POST["password"])){
    $password_err = "Please enter a password.";     
  } 
  elseif(strlen($_POST["password"]) < 8){
    $password_err = "Password must have atleast 8 characters.";
  } 
  else{
    $password = $_POST["password"];
  } 


  if(empty($_POST["confirm_password"])){
    $confirm_password_err = "Please confirm password.";     
  } 
  else{
    $confirm_password = $_POST["confirm_password"];
    if(empty($password_err) && ($password != $confirm_password)){
        $confirm_password_err = "Password did not match.";
    }
  }   

  if(empty($_POST["fname"])){
    $fname_err = "Please enter first name.";     
  } 
  else {
    $fname = $_POST["fname"];
  }
 
  if(empty($_POST["lname"])){
    $lname_err = "Please enter last name.";     
  } else {
    $lname = $_POST["lname"];
  }

  if(empty($_POST["email"])  ){
    $email_err = "Email empty or invalid";     
  } 
  else {
    $email = $_POST["email"];
  }

  if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($fname_err) && empty($lname_err) && empty($email_err) ){
     
    $document =array('fname'=>$fname,'lname'=>$lname,'username'=>$username,'email'=>$email,'password'=>md5($password),'password'=>$confirm_password , 'type'=>'user');             
    $collection->insertOne($document);
     

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
    <link rel="stylesheet" type="text/css" href="style-signup.css">
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
              <a class="nav-link ml-2" href="#">BOUTIQUES</a>
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
		       <li id="dropdown_menu"><a class="dropdown-item" href="register.php">SIGNUP</a></li>
	    </ul>
	   </li>
            <li class="nav-item ml-2">
              <a class="nav-link" href="#"><i class="fa fa-shopping-bag" style="font-size:25px;"></i></a>
            </li>
        </ul>
        </div>
    </nav>
<div class="reg_form">
   
<form id="register" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <h3>SIGN UP</h3><br> 
      <div class="row"> 
       <div class="col <?php echo (!empty($fname_err)) ? 'has-error' : ''; ?>">
      <label >
         <p class="label-txt">FIRST NAME</p>
         <input type="text" id="fname" name="fname" class="input" value="<?php echo $fname; ?>">
        
         <div class="line-box">
         <span class="help-block"><?php echo $fname_err; ?></span>
            <div class="line"></div>
         </div>
      </label>
      </div> 
      <div class="col <?php echo (!empty($lname_err)) ? 'has-error' : ''; ?>">
      <label>
        <p class="label-txt">LAST NAME</p>
        <input type="text" id="lname" name="lname" class="input" value="<?php echo $lname; ?>">
        <div class="line-box">
        <span class="help-block"><?php echo $fname_err; ?></span>
           <div class="line"></div>
        </div>
      </label>
</div>
</div>
<div class="row"> 
       <div class="col <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
      <label>
        <p class="label-txt">USERNAME</p>
        <input type="text" id="username" name="username" class="input" value="<?php echo $username; ?>">
        <div class="line-box">
        <span class="help-block"><?php echo $username_err; ?></span>
           <div class="line"></div>
        </div>
      </label>
</div>
<div class="col <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
      <label>
        <p class="label-txt">EMAIL</p>
        <input type="text" id="email" name="email" class="input" value="<?php echo $email; ?>">
        <div class="line-box">
        <span class="help-block"><?php echo $email_err; ?></span>
           <div class="line"></div>
        </div>
      </label>
</div></div>
<div class="row">
    <div class="col  <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
      <label>
        <p class="label-txt">PASSWORD</p>
        <input type="password" id="password" name="password" class="input" value="<?php echo $password; ?>">
        <div class="line-box">
        <span class="help-block"><?php echo $password_err; ?></span>
           <div class="line"></div>
        </div>
        
        <small id="passwordHelpBlock" class="form-text text-muted">
  Your password must be at least 8 characters long.
</small>
      </label> 
</div>
<div class="col <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
      <label>
        <p class="label-txt">CONFIRM PASSWORD</p>
        <input type="password" id="password2" name="confirm_password"  class="input" value="<?php echo $confirm_password; ?>">
       
        <div class="line-box">
        <span class="help-block"><?php echo $confirm_password_err; ?></span>
           <div class="line"></div>
        </div>
      </label>
</div></div>
      <button name="reg" id="submit" type="submit" value="register">JOIN US</button>
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