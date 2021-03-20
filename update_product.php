<?php
    require 'vendor/autoload.php';  

    $m = new MongoDB\Client("mongodb://127.0.0.1/");  
    
    
    $db = $m->VNTG;
    $collection = $db->products;
             
    if(isset($_POST["update_id"])){
         
        $id = $_POST['id'] ;
        $upid = $_POST['upid'];

        $query = array("id" => $id);

        $cursor = $collection->findOne($query); 

        if($cursor==null) {
           echo "Product ID doesn't exist";
        }
        else {
            $collection->updateOne(array("id"=>$id),array('$set'=>array("id"=>$upid)));
            echo "Id updated";
        }
 
    }

    if(isset($_POST["update_desc"])){
         
        $id = $_POST['id'] ;
        $updesc = $_POST['updesc'];

        $query = array("id" => $id);

        $cursor = $collection->findOne($query); 

        if($cursor==null) {
           echo "Product ID doesn't exist";
        }
        else {
            $collection->updateOne(array("id"=>$id),array('$set'=>array("description"=>$updesc)));
            echo "description updated";
        }
 
    }

    if(isset($_POST["update_price"])){
         
        $id = $_POST['id'] ;
        $upprice = $_POST['upprice'];

        $query = array("id" => $id);

        $cursor = $collection->findOne($query); 

        if($cursor==null) {
           echo "Product ID doesn't exist";
        }
        else {
            $collection->updateOne(array("id"=>$id),array('$set'=>array("price"=>$upprice)));
            echo "description updated";
        }
 
    }

    if(isset($_POST["update_bout"])){
         
        $id = $_POST['id'] ;
        $upbout = $_POST['upbout'];

        $query = array("id" => $id);

        $cursor = $collection->findOne($query); 

        if($cursor==null) {
           echo "Product ID doesn't exist";
        }
        else {
            $collection->updateOne(array("id"=>$id),array('$set'=>array("boutique"=>$upbout)));
            echo "description updated";
        }
 
    }

    if(isset($_POST["update_gender"])){
         
        $id = $_POST['id'] ;
        $upgender = $_POST['upgender'];

        $query = array("id" => $id);

        $cursor = $collection->findOne($query); 

        if($cursor==null) {
           echo "Product ID doesn't exist";
        }
        else {
            $collection->updateOne(array("id"=>$id),array('$set'=>array("gender"=>$upgender)));
            echo "description updated";
        }
 
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>VTNG admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style_admin.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>

    <div class="wrapper">
        
    <nav id="sidebar">
            <div class="sidebar-header">
                <h3>VNTG Admin Panel</h3>
                <strong>AP</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="admin_new.php"  aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-plus"></i>
                        Add
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="add_product.php">Product</a>
                        </li>
                        <li>
                            <a href="add_boutique.php">Boutique</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="update_product.php"  aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-edit"></i>
                       Update        
                    </a>
                </li>
                <li>
                    <a href="#deleteSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-trash-alt"></i>
                        Delete
                    </a>
                    <ul class="collapse list-unstyled" id="deleteSubmenu">
                        <li>
                            <a href="delete_product.php">Product</a>
                        </li>
                        <li>
                            <a href="delete_boutique.php">Boutique</a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </nav> 
        <div id="content"> 
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    
                    <a id="sidebarCollapse"><i class="fa fa-bars"></i></a>
                    
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php"><i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">  
            <section class="fields">
              <h1 class="title">SELECT PRODUCT'S ID</h1>
              <form action="update_product.php" name="add_bout" method="post" class="product-form row">
                <div class="form-field col-lg-12">
                   <input type="text"  name="id" class="input-text" required /> 
                </div>
                <div class="container">
                <h1 class="title">What do you want to update?</h1>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="id" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      ID
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="description">
                    <label class="form-check-label" for="exampleRadios3">
                    Description
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="price">
                    <label class="form-check-label" for="exampleRadios3">
                    Price
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="boutique">
                    <label class="form-check-label" for="exampleRadios3">
                    Boutique
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="gender">
                    <label class="form-check-label" for="exampleRadios3">
                    Gender
                    </label>
                </div> <br><br>
                    <div class="id" style="display:none">
                        <div class="form-field col-lg-12">
                            <input type="text"  name="upid" class="input-text" required /> 
                            <label class="label" for="name">Change ID</label>
                        </div>
                        <button type="submit" name="update_id" class="submit-btn">Update</button>
                    </div>  
                    <div class="description" style="display:none">
                        <div class="form-field col-lg-12">
                            <input type="text"  name="updesc" class="input-text" required /> 
                            <label class="label" for="name">Change Description</label>
                        </div>
                        <button type="submit" name="update_desc" class="submit-btn">Update</button>
                    </div>   
                    <div class="price" style="display:none">
                        <div class="form-field col-lg-12">
                            <input type="text"  name="upprice" class="input-text" required /> 
                            <label class="label" for="name">Change Price</label>
                        </div>
                        <button type="submit" name="update_price" class="submit-btn">Update</button>
                    </div>   
                    <div class="boutique" style="display:none">
                        <div class="form-field col-lg-12">
                            <input type="text"  name="upbout" class="input-text" required /> 
                            <label class="label" for="name">Change Boutique</label>
                        </div>
                        <button type="submit" name="update_bout" class="submit-btn">Update</button>
                    </div> 
                    <div class="gender" style="display:none">
                        <div class="form-field col-lg-12">
                            <input type="text"  name="upgender" class="input-text" required /> 
                            <label class="label" for="name">Change Gender</label>
                        </div>
                        <button type="submit" name="update_gender" class="submit-btn">Update</button>
                    </div> 
             </form>
            </section>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> 

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            }); 

            $('input[type="radio"]').click(function(){
                if($(this).attr("value")=="id"){
                    $(".id").show('slow');
                    $(".description").hide('slow');
                    $(".price").hide('slow');
                    $(".boutique").hide('slow');
                    $(".gender").hide('slow');
                }
                if($(this).attr("value")=="description"){
                    $(".id").hide('slow');
                    $(".description").show('slow');
                    $(".price").hide('slow');
                    $(".boutique").hide('slow');
                    $(".gender").hide('slow');
                } 
                if($(this).attr("value")=="price"){
                    $(".id").hide('slow');
                    $(".description").hide('slow');
                    $(".price").show('slow');
                    $(".boutique").hide('slow');
                    $(".gender").hide('slow');
                }  
                if($(this).attr("value")=="boutique"){
                    $(".id").hide('slow');
                    $(".description").hide('slow');
                    $(".price").hide('slow');
                    $(".boutique").show('slow');
                    $(".gender").hide('slow');
                }  
                if($(this).attr("value")=="gender"){
                    $(".id").hide('slow');
                    $(".description").hide('slow');
                    $(".price").hide('slow');
                    $(".boutique").hide('slow');
                    $(".gender").show('slow');
                }   
                     
            });
            
            $('input[type="radio"]').trigger('click');
        }); 
    </script>
</body>

</html>