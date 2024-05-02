<?php 


if($_SERVER['REQUEST_METHOD']=='POST'){

    //grabbing data
    $mail=htmlspecialchars($_POST['login-mail']);
    $psw=htmlspecialchars($_POST['login-psw']);

    include "dbConnection.php" ;
    include "../classes/login.classes.php" ;
    $login=new Login($mail, $psw);
    $login->checkGrabbedData();
    $login->getUserfromDB();

    

      

    
}   