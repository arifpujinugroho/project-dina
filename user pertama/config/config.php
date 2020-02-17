<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "user_management";

try{
    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);
} catch (Exception $e){
    echo $e->getMessage();
    die();
}
?>