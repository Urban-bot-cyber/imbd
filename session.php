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

//pretvori iz minut v ure in minute
function fromMintoString($min){
    $min = (int) $min;
    
    if(empty($min)){
        return;
    }
    $hour = floor($min / 60);
    $min = $min - ($hour*60);
    return "$hour h $min min";
}



/*vrača imena vshe žanrov,ki jih ima film*/
function getGenres($movie_id){
    require 'db.php';

    $query = "SELECT g.* FROM genres g INNER JOIN genres_movies gm ON gm.genre_id=g.id
        WHERE gm.movie_id=? ORDER BY g.title";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$movie_id]);
    $return='';
    while ($row = $stmt->fetch()) {
        if(!empty($return)){
            $return=$return.' | ';
        }
        $return=$return.$row['title'];
    }
    return $return;
}



?>