<?php
    include_once 'header.php';
?>
    <h1>Dobrodošli na strani MOVIES </h1>
    <?php

    $b = 110;
    
    if(isset($_GET['vrednost'])){
        $a=$_GET['vrednost'];
    }
        else {
        $a=0;
    }

    $a = $_GET['vrednost'];
    
    echo $a;

    $a++;
    
    echo '<a href="index.php?id='.$a.'">INDEX</a>'

    ?>


<?php
    include_once 'footer.php';
?>