<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="jss/contactform.js" defer></script>
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
    <?php
      include("./components/frontNavBar.php")
    ?>

    <!-- HEADER -->
    <div class="headerSection">
       <h1>Contact</h1>
       
    </div>
    <div class="divider"></div>
    <div class="container ">
      <div class="row gy-3">
          <div class="col-sm-4 border-right text-center">
              <span class="material-icons">mail</span>
              <p>popaodfaiok@gmail.com</p>
          </div>
          <div class="col-sm-4 text-center">
              <span class="material-icons">call</span>
              <p>0751651651</p>
          </div>
          <div class="col-sm-4 border-left text-center">
              <span class="material-icons">location_on</span>
              <p>asjndkjnasdnjjakjsnkj</p>
          </div>
      </div>
  </div>
  
    <div class="divider"></div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.6488757327943!2d24.135226676122954!3d45.778226671080844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474c678604b4ad13%3A0xe744074070b2b902!2sGSD%20Software%20%26%20Technology!5e0!3m2!1sen!2sro!4v1706826728508!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    <div class="pageContainer contactSection">
      <form>
        <h2 id="form-counter">0</h2>
        <h1>Cere ajutor!</h1>
        <p>Unul dintre scopurile noastre e sa iti castigam increderea.</p>
        <div class="form-group nameSection">
            <input id="name-input-field" class="form-control" type="text" placeholder="Nume">
            <input id="name2-input-field" class="form-control" type="text" placeholder="Prenume">
        </div>
        <div class="form-group">
            <input id="email-input-field" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <textarea name="eef" id="m-input-field" class="form-control" cols="30" rows="10" placeholder="Mesaj"></textarea>
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