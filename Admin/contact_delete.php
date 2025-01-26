<?php 
include_once("hakiconfig.php");

$F = $_GET['nid'];

$t = $Haki->query("DELETE  FROM contact WHERE id = '$F'");

if($Haki->affected_rows){
    header("location:contact_info.php");
}

?>