<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: *");
    //echo "Testing";
?>

<?php 
 include("dbconfig.php");

 
$pirate = [];

  $Luffy = $Haki->query("SELECT * FROM users");

  while($Hancok = $Luffy->fetch_assoc()){
    $pirate[] = $Hancok;
  }
  echo json_encode($pirate);
  
 
  

?>