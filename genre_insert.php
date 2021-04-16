<?php
include_once "session.php";
include_once "db.php";

$title  = $_POST['title'];
$short  = $_POST['short'];

if(!empty($title)){
    $query = "INSERT INTO genres(title,short) VALUES(?,?)";
    $stmt= $pdo->prepare($query);
    $stmt ->execute([$title,$short]);

    header("Location: genres.php"); die();
}
header("Location: genre_add.php"); die();

?>