<?php
    try{
        require 'vendor/autoload.php';  

                $m = new MongoDB\Client("mongodb://127.0.0.1/");  
                
                
                $db = $m->VNTG;
                $collection = $db->users;
                

                // $collection = $db->products;
                

                // $document = array (
                //      "id" => "0001" ,
                //      "description" => "Vintage Sherpa Line Coat" ,
                //      "price" => "87.00" ,
                //      "boutique" => "VINTAHOLIC" ,
                //      "gender" => "woman" ,
                //      "category" => "clothes",
                //      "subcategory" => "jacket" ,
                //      "color" => "beige" ,
                //      "size" => "S", 
                //      "photo" => "pr1.png",
                // );  

            //     $document = array (
            //         "id" => "0002" ,
            //         "description" => "Vintage Burberry Sweater" ,
            //         "price" => "145.50" ,
            //         "boutique" => "VINTAHOLIC" ,
            //         "gender" => "woman" ,
            //         "category" => "clothes",
            //         "subcategory" => "sweater" ,
            //         "color" => "beige" ,
            //         "size" => "M", 
            //         "photo" => "pr2.png",
            //    ); 

        //     $document = array (
        //         "id" => "0003" ,
        //         "description" => "Versace Zodiac Scarf" ,
        //         "price" => "92.30" ,
        //         "boutique" => "VINTAHOLIC" ,
        //         "gender" => "woman" ,
        //         "category" => "accessories",
        //         "subcategory" => "scarves" ,
        //         "color" => "black" ,
        //         "size" => "nosize", 
        //         "photo" => "pr3.png",
        //    );  
    //     $document = array (
    //         "id" => "0004" ,
    //         "description" => "80s Polka Dot Shirt Cream" ,
    //         "price" => "23.98" ,
    //         "boutique" => "RETROGAL" ,
    //         "gender" => "woman" ,
    //         "category" => "clothes",
    //         "subcategory" => "shirt" ,
    //         "color" => "beige" ,
    //         "size" => "S", 
    //         "photo" => "pr4.png",
    //    );  
              
//     $document = array (
//         "id" => "0005" ,
//         "description" => "90s Sleeveless T-Shirt" ,
//         "price" => "16.30" ,
//         "boutique" => "E-VINTAGE" ,
//         "gender" => "woman" ,
//         "category" => "clothes",
//         "subcategory" => "tshirt" ,
//         "color" => "white" ,
//         "size" => "M", 
//         "photo" => "pr5.png",
//    );  

// $document = array (
//     "id" => "0006" ,
//     "description" => "80s Plaid Skirt" ,
//     "price" => "27.70" ,
//     "boutique" => "E-VINTAGE" ,
//     "gender" => "woman" ,
//     "category" => "clothes",
//     "subcategory" => "skirt" ,
//     "color" => "blue" ,
//     "size" => "XS", 
//     "photo" => "pr6.png",
// ); 


                // $collection->insertOne ($document);
                // echo "Document inserted";
    }
    catch (Exception $e){
        die("Error. Couldn't connect to the server. Please Check");
    }
      
?>