<?php 
      require 'vendor/autoload.php';  

      $m = new MongoDB\Client("mongodb://127.0.0.1/");  
      
      
      $db = $m->VNTG;
      $usercount = $db->users->count(); 
      $boutiquecount = $db->boutiques->count();

       $productcount = $db->products->count();

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
           <br><br>
            <div class="container"> 
                <div class="row align-items-center">  
                    <div class="col">
                    <h2> Users Registered </h2> 
                    <div class="counter"><?php echo $usercount ; ?></div> 
                    </div>
                    <div class="col">
                    <h2>Boutiques Registered </h2> 
                    <div class="counter"><?php echo $boutiquecount ; ?></div> 
                    </div>
                    <div class="col">
                    <h2>Products Added </h2> 
                    <div class="counter"><?php echo $productcount ; ?></div> 
                    </div>
                </div> 
            </div>
            
        </div> 
        
    </div>
    
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });  
        
    </script>  

    
</body>

</html>