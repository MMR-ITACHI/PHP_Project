<?php 
include_once("hakiconfig.php");
session_start();

if(isset($_POST['submit'])){
    $Mail = $_POST['mail'];
    $Passwords = $_POST['password'];
    

    $Uta = $Haki->query("SELECT * FROM admin WHERE username ='$Mail' AND password='$Passwords'");

    $Shanks = $Uta->fetch_assoc();

    if($Uta->num_rows==0){
        $_SESSION['login_err'] = "User or Password may Wrong.Fokkinni Try Again";
            header("location:index.php");
    }

    else{
        $_SESSION['Gmail'] = $Mail ;
             $_SESSION['name'] = $Shanks['fullname'] ;
            header("location:admin_dashboard.php");
            
    }
}
?>