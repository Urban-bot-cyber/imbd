<?php
include_once "session.php";
include_once "db.php";

$title  = $_POST['title'];
$duration  = (int)$_POST['duration'];
$year_release  = (int)$_POST['year_release'];
$genres = $_POST['genres'];
$user_id = $_SESSION['user_id'];
$description = $_POST['description'];

//preverim, če je vnešen naslov
if((!empty($title))){
    $query = "INSERT INTO movies(title,duration,year_release,description,user_id) VALUES(?,?,?,?,?)";
    $stmt= $pdo->prepare($query);
    $stmt ->execute([$title,$duration,$year_release,$description,$user_id]);

    //id novo vnešenega filma
    $movie_id = $pdo->lastInsertId();
    //vnesi žanre
    foreach($genres as $genre_id){
        $query = "INSERT INTO genres_movies(genre_id,movie_id)VALUES(?,?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$genre_id,$movie_id]);
    }



    //preusmeritev na seznam vshe igralcev
    header("Location: movies.php"); die();
}
//preusmeritev nazaj na vnos - nekaj je narobe
header("Location: movie_add.php"); die();

?>