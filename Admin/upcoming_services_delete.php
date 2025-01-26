



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

include_once("hakiconfig.php");

$Find = $_GET['nid'];

$Usoop = $Haki->query("DELETE FROM upcoming_services WHERE id = $Find");

if($Haki->affected_rows){
    header("location:upcoming_services_info.php");
    

}

?>

</body>
</html>