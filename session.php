<?php
session_start();

$root_path = '/imdb';
//neprijavljen lako obišče....
$allowed=[
    $root_path.'/index.php',
    $root_path.'/user_add.php',
    $root_path.'/user_insert.php',
    $root_path.'/login.php',
    $root_path.'/login_check.php'
];

if(!isset($_SESSION['user_id']) && (!in_array($_SERVER['REQUEST_URI'],$allowed))){
    header("Location:login.php");die();
}


?>