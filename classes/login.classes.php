<?php
    //intereactionez cu baza de date 
class Login extends DB{

   
    public $mail;
    public $psw;

    function __construct($m,$psw){
       
        $this->mail=$m;
        $this->psw=$psw;
    }
    function checkGrabbedData(){
            //check mail
        if(empty($this->mail)){
            $loginError="Mail is Required";
        header('Location:../index.php?MailField='.$loginError);
            exit();
        }
        if (!filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
            $loginError = "Invalid email format";
        header('Location:../index.php?MailFormat='.$loginError);
        exit();
        }

        //check psw
        if(empty($this->psw)){
            $loginError="Psw is Required";
        header('Location:../index.php?PswField='.$loginError);
            exit();
        }

    }
    function getUserfromDB(){
        
        $stm=$this->connect()->prepare('SELECT psw FROM client WHERE client_mail = ?');//get pse from db
       
        if(!$stm->execute([$this->mail])){
            $stm=null;
            header("location:../index.php?error=stmfailed");
            exit();
        }

        if($stm->rowCount()==0)
        {
            $stm=null;
            header("location:../index.php?error=userNotFound");
            exit();  
        }


        //check psw
        $hashedPsw=$stm->fetchAll(PDO::FETCH_ASSOC);
        $checkePsw=password_verify($this->psw, $hashedPsw[0]["psw"]); 
        if($checkePsw==false)
        {
            $stm=null;
            header("location:../index.php?error=WronPSW");
            exit();  
        }
        else if($checkePsw==true){
            session_start();
            $_SESSION["userMail"]=$this->mail;
            header("location:../index.php");
        }
        $stm=null;
       // $checkResult;

    }



    
}