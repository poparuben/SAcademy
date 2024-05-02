<?php
    //intereactionez cu baza de date 
class SignIn extends DB{

    public $name;
    public $mail;
    public $psw;
    
    function __construct($n,$m,$psw){
        $this->name=$n;
        $this->mail=$m;
        $this->psw=$psw;
    }
 


 function checkUserInDB(){
    // Grab connection from DB class and prepare statement for security
    $stm = $this->connect()->prepare('SELECT name FROM client WHERE client_mail = ? OR name = ?;');
    if(!$stm) {
        header("location: ../index.php?error=stmfailed");
        exit();
    }
    
    $stm->execute([$this->mail, $this->name]);
    
    if($stm->rowCount() > 0){
        header("location: ../index.php?error=userExists");
        exit();
    } 
}

    

    function addUser(){
        
        $stm=$this->connect()->prepare('INSERT INTO client(client_mail, name,psw)VALUES(?,?,?);');
        $hashedpsw=password_hash($this->psw,PASSWORD_DEFAULT);
        //check answer+ execute
        if(!$stm->execute([$this->mail,$this->name,$hashedpsw])){
            $stm=null;
            header("location:../index.php?error=stmfailed");
        }else{
            header("location:../index.php?error=succes");
        }

        $stm=null;
       

    }

}