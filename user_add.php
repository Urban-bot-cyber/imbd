<?php
include_once "header.php";
?>

<h3> Registracija </h3>

<form action="user_insert.php" method="post">
    <input type="text" name="first_name" placeholder="Vnesi ime" required="requiered"/><br />
    <input type="text" name="last_name" placeholder="Vnesi priime" required="requiered"/><br />
    <input type="email" name="email" placeholder="Vnesi e-pošto" required="requiered"/><br />
    <input type="password" name="pass1" placeholder="Vnesi geslo" required="requiered"/><br />
    <input type="password" name="pass2" placeholder="Vnesi ponovno geslo" required="requiered"/><br />
    <input type="submit" name="submit" value="Shrani"/>
</form>

<?php
include_once "footer.php"
?>