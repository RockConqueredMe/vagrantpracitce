<?php
// error_reporting(E_ALL);
// ini_set('display_errors', true);
// ini_set('html_errors', false);

$user = $_GET["user"];
$pass = $_GET["pass"];

$user1 = "cam";
$pass1 = "ritchie";

if($user == $user1 && $pass == $pass1){
   echo "Access Granted. Hello $user1"; 
}
elseif($user == "" || $pass == ""){
    echo "Username and Password Required";
}
else {
   echo "Access Denied";
}
?>