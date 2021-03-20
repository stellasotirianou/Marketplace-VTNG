<?php 

// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//   header("location: index.php");
//   exit;
// }


// require_once "config.php";
 
// $username = $password = "";
// $username_err = $password_err = "";

 
    // if(!isset($_POST['username'])){
    //     $username_err = "Please enter username.";
    // } 
    // else{
    //     $username = $_POST["username"];
    // }
    
    
    // if(!isset($_POST['password'])){
    //     $password_err = "Please enter your password.";
    // } 
    // else{
    //     $password = $_POST["password"];
    // }

    // if(empty($username_err) && empty($password_err)){  
      require 'vendor/autoload.php';  

      $m = new MongoDB\Client("mongodb://127.0.0.1/");  
                
                
                $db = $m->VNTG;
                $collection = $db->users; 

      if($_SERVER["REQUEST_METHOD"] == "POST"){
    
          $username = $_POST["username"];
          $password = $_POST['password'];  

          $userDatabaseFind = $collectiom->findOne(array('username' => $username));
          $db->users->find(array("username" =>array($username)));
          
          foreach($userDatabaseFind as $userFind) {
            $username = $userFind['username'];
            $password = $userFind['password'];
        }
    
        if($username == $username && $password == $password){ 
          header("location: register.php");
        }else{
          
          echo "error";
        }
      } 

          // $query = array('username'=>$username);
          // $count = $collection->findOne($query);

          //       //var_dump($query);
          //   if(empty($count)){
          //     // $username_err = "No account found with that username.";
          //      echo "Error";
          //   }

          //   else{
          //     $query=array('password'=>$password);
          //     $count=$collection->findOne($query);
          //       //  $pass = $query["password"];
          //        if(password_verify($password,$count )){
          //         //  session_start();
                         
          //         //        // Store data in session variables
          //         //        $_SESSION["loggedin"] = true;
          //         //        $_SESSION["id"] = $id;
          //         //        $_SESSION["username"] = $username;                            
                         
          //                // Redirect user to welcome page
          //                header("location: register.php");  
          //         }
          //        else{
          //          $password_err = "The password you entered was not valid.";
          //        }   
                
          //   }
            

    // }


?>