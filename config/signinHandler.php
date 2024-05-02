<?php 


if($_SERVER['REQUEST_METHOD']=='POST'){

    //grabbing data
    $name=htmlspecialchars($_POST['sign-name']);
    $mail=htmlspecialchars($_POST['sign-mail']);
    $psw=htmlspecialchars($_POST['sign-psw']);

    include "dbConnection.php" ;
    include "../classes/signin.classes.php" ;
    $signIn=new SignIn($name,$mail, $psw);
    $signIn->checkUserInDB();
    $signIn->addUser();

    

      

    
}   