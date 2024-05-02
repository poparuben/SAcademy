<?php 
session_start();
if(!isset($_SESSION['userMail'])){
  header('location:index.php');
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="dashboard.css">
  
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
            <a href="./adminAllProducts.php" class="list-group-item list-group-item-action">Toate produsele</a>
            <a href="#" class="list-group-item list-group-item-action">Settings</a>
            </div>
      </div>
      <div class="col-md-9">
        <h2>Welcome to the Admin Dashboard</h2>
        <p></p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
