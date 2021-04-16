<?php
include_once "session.php";
include_once "db.php";

$title  = $_POST['title'];
$short  = $_POST['short'];
$id = (int)$_POST['id'];
//preverimo če je title in id vnešen
if((!empty($title)) && (!empty($id))){
    $query = "UPDATE genres SET title=?, short=? WHERE id=?";
    $stmt= $pdo->prepare($query);
    $stmt ->execute([$title,$short,$id]);

    header("Location: genres.php"); die();
}
header("Location: genre_edit.php?id=$id"); die();

?>