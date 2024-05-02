<?php
include "config/dbConnection.php";
$name=$_POST["product-name"];
print_r($_POST);
$price=filter_input(INPUT_POST,"product-price",FILTER_VALIDATE_INT);
 $category=1;
//   urmeaza sa implement asta+ img upload
$description=$_POST["product-description"];
//implemet categorie
try {
    $query="INSERT INTO products(name,price,catgory)
                    VALUES(?,?,?)";

        $db=new DB();
        $pdo=$db->connect();
         
    $statement=$pdo->prepare($query);
    $statement->execute([$name, $price,$category]);

    $pdo = null;
    $statement = null;
    
   
    header("location: .//adminDashboard.php");
    die();     
}catch(PDOException $e) {
    echo $e->getMessage();
}

 