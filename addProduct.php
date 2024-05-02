<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['userMail'])){
  header('location:index.php');
};
  include "config/dbConnection.php";
  $db=new DB();
  $pdo=$db->connect();
  $statement=$pdo->query('SELECT * FROM products, product_category WHERE products.catgory= product_category.category_id;');
  $rows=$statement->fetchAll(PDO::FETCH_ASSOC);
  // print_r($rows);
  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- <script src="jss/contactform.js" defer></script> -->
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="bootstrapStyle.css">




     


  </head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="./adminDashboard.php">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link " href="./index.php">To Site <span class="sr-only">(current)</span></a>
        </li>
       
       
        <li class="nav-item">
          <a class="nav-link btn btn-danger" href="./config/logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
    <!-- HEADER -->
    <div class="headerSection">
       <h1>Adauga produs</h1>
       
    </div>
    
    
  


    <div class="pageContainer contactSection">
      <form  action="formHandler.inc.php" method="POST">
       
        <h1>Adauga Produsul tau!</h1>
        <div class="form-group nameSection">
            <input name="product-name" id="name-input-field" class="form-control" type="text" placeholder="Nume Produs">
            <input name="product-price"  id="name2-input-field" class="form-control" type="number" placeholder="Pret">
        </div>
        <div class="form-group">
            <input name="product-categ" class="form-control" placeholder="Categorie">
        </div>
        <div class="form-group">
            <textarea name="product-description" name="eef" id="m-input-field" class="form-control" cols="30" rows="10" placeholder="Descriere"></textarea>
        </div>
        <button id="send-contact-form-btn" class="btn btn-primary defaultBtn" type="submit">Trimite</button>
    </form>
    
    </div>

    <div class="divider"></div>



   <!-- FOOTER -->
<?php
      include("./components/footer.php")
?>
</body>
</html>