<?php 
include_once("hakiconfig.php");
session_start();

if(isset($_POST['submit'])){
    $Email = $_POST['email'];
    $Pass = $_POST['password'];
    

    $Zoro = $Haki->query("SELECT * FROM users WHERE email ='$Email' AND password='$Pass'");

    $Nami = $Zoro->fetch_assoc();

    if($Zoro->num_rows==0){
        $_SESSION['login_err'] = "User or Password may Wrong.Please Try Again";
            header("location:signin.php");
    }

    else{
        $_SESSION['email'] = $Email ;
             $_SESSION['name'] = $Nami['fullname'] ;
            header("location:Client/client_dashboard.php");
            
    }
}
?>