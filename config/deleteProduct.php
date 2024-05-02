<?php

$toRemoveID=(int)$_GET["toRm"];

require_once "dbConnection.php";
$db=new DB();
$pdo=$db->connect();

$statement=$pdo->prepare('DELETE FROM products WHERE product_id=?;');
$statement->execute([$toRemoveID]);
$statement=null;
header("location:../adminAllProducts.php");





