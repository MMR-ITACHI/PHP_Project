<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: *");
   // echo "Testing";
?>

<?php
include("hakiconfig.php");

$user = json_decode(file_get_contents('php://input'));
//print_r($user)
$name = $user->name;
$email = $user->email;
$phone = $user->phone;
// $sub= $user->subject;
$msz= $user->message;

if($name!="" && $email!="" && $phone!="" && $msz!="" ){
            $Haki->query("INSERT INTO contact(name,email,subject,massage)VALUES('$name','$email','$phone''$msz') ");
}

            if($Haki->affected_rows)
            echo "Inserted";

?>