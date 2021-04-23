<?php
include_once "header.php";
include_once "db.php";

$id =(int)$_GET['id'];

$query = "SELECT * FROM movies WHERE id = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id]);
//iz baze prebere vse podatke o igralcu, ki ga urejam
$movie= $stmt->fetch();

?>
<h2>Uredi film</h2>

<form action = "movie_update.php" method = "post">
    <input type="hidden" name ="id" value ="<?php echo $id ?>"/>
    <input type="text" name="title" value ="<?php echo $movie['title']?>" placeholder="Vnesi naslov filma" class="form-control" required="required" /><br/>
    <input type="number" name="duration" value ="<?php echo $movie['duration']?>" placeholder="Vnesi dolžino filma v minutah" class="form-control" /><br/>
    <input type="number" name="year_release" value ="<?php echo $movie['year_release']?>"placeholder="Vnesi datum izdaje" class="form-control" /><br/>
    <textarea name="description" cols="15" rows="5"placeholder="Vnesi opis filma" class="form-control"><?php echo $movie['description']?></textarea><br/>
    <div class="form-control">
    <?php
        include_once "db.php";
        $query = "SELECT genre_id FROM genres_movies WHERE movie_id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $genres = array();
        while($row = $stmt->fetch()){
            $genres[] = $row['genre_id'];
        }

        $query = "SELECT * FROM genres";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch()){
            //pogledam ali je žanr, ki ga izpisujem v sezanmu že izbranih žanrov
            if(in_array($row['id'],$genres)){
                echo '<input type="checkbox" checked="checked" name="genres[]" value="'.$row['id'].'" />'.$row['title'].'<br/>'; 
            }
            else{
               echo '<input type="checkbox" name="genres[]" value="'.$row['id'].'" />'.$row['title'].'<br/>'; 
            }  
        }
    ?>
    </div>
    <input type="submit" value="Shrani" class ="btn btn-primary"/>
</form>
<?php
include_once "footer.php";
?>