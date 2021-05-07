<?php
include_once 'header.php';
include_once 'db.php';

$id = (int)$_GET['id'];

?>

<div class="film">
    <div class="film-slike">
        <img src="https://images-na.ssl-images-amazon.com/images/I/7124A8OOL6L._AC_SL1001_.jpg" alt="slika">
    </div>
    <div class="film-podatki">
        <div class="naslov">Terminator</div>
        <div class="zanri">Akcija | Triler</div>
        <div class="leto">1984</div>
        <div class="dolzina">1h 47min</div>
        <div class="ocena">* * * *</div>
        <div class="opis">The Terminator is a 1984 American science fiction film directed by James Cameron. 
            It stars Arnold Schwarzenegger as the Terminator, a cyborg assassin sent back in time from 2029 to 1984 to kill Sarah Connor 
            (Linda Hamilton), whose son will one day save mankind from extinction by a hostile artificial intelligence in a post-apocalyptic future. Michael 
            Biehn plays Kyle Reese, a soldier sent back in time to protect Sarah. 
            The screenplay is credited to Cameron and producer Gale Anne Hurd, while co-writer William Wisher Jr. received a credit for additional dialogue.</div>
    </div>
</div>

<div class="igralci">
    <div class ="igralec">
        <img src="https://res.cloudinary.com/du1efakdk/image/upload/c_fill,f_auto,h_414,q_auto,w_280/v1617012871/kftv/nig1dtun8ug4gsx1td4n.jpg" alt="igralec">
        <div class="igralec-podatki">
            <div>Vin Diesel (Jože Novak)</div>
        </div>
    </div>
    <div class ="igralec">
        <img src="https://res.cloudinary.com/du1efakdk/image/upload/c_fill,f_auto,h_414,q_auto,w_280/v1617012871/kftv/nig1dtun8ug4gsx1td4n.jpg" alt="igralec">
        <div class="igralec-podatki">
            <div>Vin Diesel (Jože Novak)</div>
        </div>
    </div>      
</div>

<div class="komentarji">
    <form action="comment_insert.php" method="post";>
        <textarea name="content" class="form-control" placeholder ="Vnesi komentar"></textarea><br />
        <input type="submit" value="Pošlji" class="btn btn-primary" >
    </form>
    <div class="komentarji-prikaz">
        <div class="komentar">
            <div class="komentar-podatki">
                Goraz Žižek (25. 4. 2021 @ 13:24)
            </div>
            <div>To je najjači film ever. Priporočam ogled. </div>
        </div>
        <div class="komentar">
            <div class="komentar-podatki">
                Goraz Žižek (25. 4. 2021 @ 13:24)
            </div>
            <div>To je najjači film ever. Priporočam ogled. </div>
        </div>
        <div class="komentar">
            <div class="komentar-podatki">
                Goraz Žižek (25. 4. 2021 @ 13:24)
            </div>
            <div>To je najjači film ever. Priporočam ogled. </div>
        </div>
        <div class="komentar">
            <div class="komentar-podatki">
                Goraz Žižek (25. 4. 2021 @ 13:24)
            </div>
            <div>To je najjači film ever. Priporočam ogled. </div>
        </div>
        <div class="komentar">
            <div class="komentar-podatki">
                Goraz Žižek (25. 4. 2021 @ 13:24)
            </div>
            <div>To je najjači film ever. Priporočam ogled. </div>
        </div>
    </div>
</div>


<?php 
include_once 'footer.php';
?>