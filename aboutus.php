<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
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
    <!-- HEADER -->
    <div class="headerSection">
       <h1>Despre Noi</h1>
       
    </div>
    
       <div class="pageContainer">
        <div class="titleSection titleAboutUs">
            <h2> MISIUNEA</h2>
            <p>NOASTRA</p>
            
          </div>
        <div class="twoFlexBoxes">
            <div class="col1">
                <p>Ne-am asumat misiunea de a da viață producătorilor locali, considerând că aceștia sunt cei mai potriviți pentru a satisface nevoile comunității cu produse proaspete și bio. Credem în calitatea și angajamentul lor față de sustenabilitate, oferind astfel o experiență autentică consumatorilor noștri, în timp ce sprijinim și încurajăm economia locală.</p>
           </div>
            <div class="col2">
                <p>Angajamentul nostru în a da viață producătorilor locali nu aduce beneficii doar comunității noastre, ci și acestor fermieri și cultivatori. Prin intermediul parteneriatelor noastre, oferim producătorilor locali o platformă consolidată, ajutându-i să-și promoveze și să-și vândă produsele. În acest mod, contribuim la creșterea sustenabilă a afacerilor lor și la întărirea infrastructurii economice locale.




                </p>
            </div>
        </div>
       </div>

<div class="divider"></div>

<div class="teamSectionCont">
  <h1>Echipa Noastra</h1>
<div class="teamSection">
 
  <div class="col">
    <img src="./img/member1.jpg" alt="">
    <p>Ionel Marin</p>
  </div>
  <div class="col">
    <img src="./img/old2.jpg" alt="">
    <p>Ionel Marin</p>
  </div>
  <div class="col">
    <img src="./img/od3.jpeg" alt="">
    <p>Limbasan David</p>
  </div>
  <div class="col">
    <img src="./img/member1.jpg" alt="">
    <p>Ioan Pasods</p>
  </div>

</div>
</div>



 
<!-- FOOTER -->
<?php
      include("./components/footer.php")
?>
</body>
</html>