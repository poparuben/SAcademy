
<div class="navbarr navbarstyle">
<div class="container navContainer">
<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" style="max-width: 100px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item active">
          <a class="nav-link"style="color: white;" href="magazin.php">Magazin <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color: white;" href="aboutus.php">Despre Noi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"style="color: white;" href="./contact.php">Contact</a>
          </li>
          
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Nume Produs" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cauta</button>
      </form>
      
      <?php
          if(isset($_SESSION["userMail"])){

            echo ' <a href="./adminDashboard.php" type="button" class="btn btn-primary" >
            DASHBOARD
            </a>';
          }
          else{
            echo ' <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            LOG IN
            </button>';
          }
      ?>
       

    </div>
  </nav>
</div>
</div>