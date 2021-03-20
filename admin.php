<?php 

require 'vendor/autoload.php';  

$m = new MongoDB\Client("mongodb://127.0.0.1/");  


$db = $m->VNTG;
$collection = $db->products;
         
    if(isset($_POST["addproduct"])){
       

        $findprod = $collection -> findOne(array('$and' => array(array('id' => $_POST['id'], 'description' => $_POST['description']))));

        if($findprod==null) {
            
            $document =array('id'=>$_POST['id'],'description'=>$_POST['description'],'price'=>$_POST['price'],'boutique'=>$_POST['boutique'],'gender'=>$_POST['gender'],'category'=>$_POST['category'] , 'subcategory'=>$_POST['subcategory'] , 'colors'=>$_POST['colors'] , 'size'=>$_POST['size'], 'photo'=>$_POST['photo']);             
            $collection->insertOne($document);
             echo "Added!";
          }
          else{
             echo "Product already exists";
          }

    }

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

    if(isset($_POST["delete_pr"])){
         
        $id = $_POST['id'] ;
        

        $query = array("id" => $id);

        $cursor = $collection->findOne($query); 

        if($cursor==null) {
           echo "Product ID doesn't exist";
        }
        else {
            $collection->deleteMany(array("id"=>$id));
            echo "Product deleted";
        }
 
    }

    if(isset($_POST["delete_bout"])){
         
        $boutique = $_POST['boutique'] ;
        

        $query = array("boutique" => $boutique);

        $cursor = $collection->findOne($query); 

        if($cursor==null) {
           echo "Boutique doesn't exist";
        }
        else {
            $collection->deleteMany(array("boutique"=>$boutique));
            echo "Boutique and its products deleted";
        }
 
    }

    if(isset($_POST["change_name"])){

        $collection = $db->boutiques;
         
        $boutique = $_POST['boutique'] ;
        $upname = $_POST['upname'] ;

        $query = array("boutique" => $boutique);

        $cursor = $collection->findOne($query); 

        if($cursor==null) {
           echo "Boutique doesn't exist";
        }
        else {
            $collection->updateOne(array("boutique"=>$boutique),array('$set'=>array("name"=>$upname)));
            echo "Boutique's name updated";
        }
 
    } 

    if(isset($_POST["add_bout"])){

        $collection = $db->boutiques;
         
        $query = array("name" =>$_POST["add_name"]);

        $cursor = $collection->findOne($query); 

        if($cursor==null) {
            $document =array('name'=>$_POST["add_name"]);             
            $collection->insertOne($document);
             echo "Added!";
        }
        else {
            echo "Boutique already exists";
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
    <link rel="stylesheet" type="text/css" href="style.css?newversion">
    <script src="script.js"></script>
    <title>Admin</title>
</head>
<body>
<div class="container">

<div class="row">

<div class="col">
<form action="admin.php" name="addproduct" method="post">
    <p class="label-txt">Add ID </p>
    <input type="text"  name="id" class="input" /> 
    <p class="label-txt">Add description </p>
    <input type="text"  name="description" class="input" /> 
    <p class="label-txt">Add price </p>
    <input type="text"  name="price" class="input" /> 
    <p class="label-txt">Add boutique </p>
    <input type="text"  name="boutique" class="input" /> 
    <p class="label-txt">Add gender </p>
    <input type="text"  name="gender" class="input" /> 
    <p class="label-txt">Add category </p>
    <input type="text"  name="category" class="input" /> 
    <p class="label-txt">Add subcategory </p>
    <input type="text"  name="subcategory" class="input" /> 
    <p class="label-txt">Add colors </p>
    <input type="text"  name="colors" class="input" /> 
    <p class="label-txt">Add size</p>
    <input type="text"  name="size" class="input" /> 
    <p class="label-txt">Add photo </p>
    <input type="text"  name="photo" class="input" /> <br><br>
    <button type="submit" name="addproduct">Add</button>
</form> 
</div>

<div class="col">
<form action="admin.php" name="update" method="post">
   
    <p class="label-txt">Choose ID </p>
    <input type="text"  name="id" class="input" /> 
    <p class="label-txt">Update ID </p>
    <input type="text"  name="upid" class="input" /> <br><br>
    <button type="submit" name="update_id">Update</button><br><br>
    
    <p class="label-txt">Update description</p>
    <input type="text"  name="updesc" class="input" /> <br><br>
    <button type="submit" name="update_desc">Update</button><br><br>

    <p class="label-txt">Update price </p>
    <input type="text"  name="upprice" class="input" /> <br><br>
    <button type="submit" name="update_price">Update</button><br><br>

    <p class="label-txt">Update boutique </p>
    <input type="text"  name="upbout" class="input" /> <br><br>
    <button type="submit" name="update_bout">Update</button><br><br>

    
    <p class="label-txt">Update gender </p>
    <input type="text"  name="upgender" class="input" /> <br><br>
    <button type="submit" name="update_gender">Update</button><br><br>
   
   
</form> <br><br>
</div>

<div class="col">
<form action="admin.php" name="delete" method="post">  
<p class="label-txt">Choose prodct ID to delete </p>
<input type="text"  name="id" class="input" /> 
<button type="submit" name="delete_pr">Delete</button><br><br>  
</form> <br><br>


<form action="admin.php" name="delete" method="post">  
(Note: If you delete a boutique all products will be deleted aswell)
<p class="label-txt">Choose boutique to delete </p>
<input type="text"  name="boutique" class="input" /> 
<button type="submit" name="delete_bout">Delete</button><br><br>  
</form> <br><br>

<form action="admin.php" name="change_name" method="post">  
<p class="label-txt">Choose boutique to change name </p>
<input type="text"  name="boutique" class="input" /> 
<p class="label-txt">Choose name </p>
<input type="text"  name="upname" class="input" /> 
<button type="submit" name="change_name">Change Name</button><br><br>  
</form> <br><br>

<form action="admin.php" name="add_bout" method="post">  
<p class="label-txt">Choose boutique's name </p>
<input type="text"  name="add_name" class="input"/> 
<button type="submit" name="add_bout">Add boutique</button><br><br>  
</form> <br><br>

</div>

</div>  

<div class="row">
    
    <?php 
       

       $usercount = $db->users->count();

       echo 'Details <br>';
       echo 'Users registered: '.$usercount.'<br>';
       
       $boutiquecount = $db->boutiques->count();
       echo 'Boutiques registered: '.$boutiquecount.'<br>';

       $productcount = $db->products->count();
       echo 'Products added: '.$productcount.'<br>';
    ?>

</div>
 <br><br>
<form action="login.php">
<button type="submit"  name="logout">Logout</button>
</form>
</div> 


</body>
</html>