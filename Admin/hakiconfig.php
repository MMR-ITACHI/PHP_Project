<?php

define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DATABASE","banking1");

$Haki = new mysqli();

@$Haki->connect(HOST,USER,PASS);

@$Haki->select_db(DATABASE);

if($Haki->connect_errno){
    echo $Haki->coonect_error;
    exit();
}

echo $Haki->error;



?>