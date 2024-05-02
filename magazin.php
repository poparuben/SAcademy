<!DOCTYPE html>

<?php
session_start();

include "config/dbConnection.php";
$dbClass=new DB();
$pdo=$dbClass->connect();
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
      <?php
      include("./components/frontNavBar.php")
    ?>
    <div class="divider"></div>

<div class="shopContainer">

  <div class="shopSortSection">
    <div class="left">
      <h3>50 Produse</h3>
    </div>
    <div class="right">
      <div class="dropdown">
        <button class="dropbtn">Sort by: <b>Populare</b> ICON</button>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
    </div>
  </div>

    <div class="gridParentForShop">
        <div class="child1">
            <div class="sidebarContent">
                <div class="categorySection">
                    <h3>Categorii</h3>
                    
                    <ul class="categoryList">
                        <?php foreach($rows as $element){?>
                          <li  onclick="location.href='#';" style="cursor: pointer;"><?php echo $element['name_category']?></li>
                        
                        <?php } ?>
                    </ul>
                </div>
                <div class="priceSection">
                    <h3>Pret</h3>
                  <div class="slidecontainer">
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                </div>
                </div>
                
             </div>

        </div>
        <div class="child2">

            <div class="secondSection">
                
                <div class="productsGrid shopPageGrid">
                  
                <?php
                  foreach($rows as $element){
                ?>
                    <div class="productElement" onclick="location.href='./singleProductPage.php?product_id=<?php echo $element['product_id']?>';" style="cursor: pointer;">
                      <div class="productElementContainer">
                        <p class="moreinfo"><?php echo $element['kg']."kg" ?></p>
                        <img class="productElementImg" src="./img/oranges.png" alt="oranges" srcset="">
                        <div class="productElementInfo">
                          <p class="productElementCat"><?php echo $element['name_category'] ?></p>
                          <p class="productElementName"><?php echo $element['name'] ?></p>
                          <p class="price"><?php echo $element['price']." Lei" ?></p>
                        </div>
                      </div>
                    </div>
                <?php
                  }
                ?>
                
                
                 
               
               
              </div>

              

              </div>
        </div>
    </div>

</div>



<!-- FOOTER -->
<?php
      include("./components/footer.php")
?>


</body>
</html>