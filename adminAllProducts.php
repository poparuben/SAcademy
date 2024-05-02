<?php
session_start();
if(!isset($_SESSION['userMail'])){
  header('location:index.php');
};
require_once "config/dbConnection.php";
$db=new DB();
$pdo=$db->connect();
$statement=$pdo->query('SELECT * FROM products, product_category WHERE products.catgory= product_category.category_id;');
$rows=$statement->fetchAll(PDO::FETCH_ASSOC);
// print_r($rows);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="dashboard.css">
  <style>
    /* Stilizare pentru cardurile produselor */
    .product-card {
      margin-bottom: 20px;
      height: auto;
    }

    .product-img {
      max-width: 100px; /* Lățimea imaginii mici */
      height: auto;
    }
    .card{
      background-color: #444444;
    }
    
  </style>
</head>
<body>

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

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
          <a href="./addProduct.php" class="list-group-item list-group-item-action">Adauga produse</a>
          <a href="#" class="list-group-item list-group-item-action">Toate produsele</a>
          <a href="#" class="list-group-item list-group-item-action">Settings</a>
        </div>
      </div>
      <div class="col-md-9">
        <h1 class="mt-5 mb-4">Lista Produselor</h1>
        <!-- one product -->
        <?php
            foreach( $rows as $element){
                echo '<div class="">
                <div class="card product-card d-flex flex-row align-items-center">
                  <img src="https://via.placeholder.com/150" class="card-img-top product-img mr-3" alt="Imagine produs">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <h5 class="card-title">'.$element["name"].'</h5>
                        <p class="card-text">Categorie:' .$element["name_category"].'</p>
                      </div>
                      <div class="col-md-6">
                        <p class="card-text">Preț: ' .$element["price"].' RON</p>
                        <p class="card-text">Cantitate: ' .$element["kg"].' kg</p>
                        <a href="./config/deleteProduct.php?toRm='.$element["product_id"].'" class="btn btn-danger">Șterge</a>
                      </div>
                    </div>
                  </div>
                </div>';
            }
        ?>
       
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
