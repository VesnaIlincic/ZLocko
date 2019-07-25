<html>
    <head>
        <style>
            
        </style>
    </head>
    <body>
        <form action="prikaz.php" method="get">
        <label>Name:</label>
        <input type="text" name="ime">
        <br><br>
        <label>E-mail:</label>
        <input type="text" name="email">
        <input type="submit" value="potvrdite">
        </form>
        <br><br>
        <form action="prikaz1.php" method="post">
        <label>Lozinka:</label>
        <input type="password" name="lozinka"><br><br>
        </form>

        <form action="racunanje.php" method="get">
        <label>Broj 1: </label>
        <input type="text" name="broj1">
        <br><br>
        <label>Broj 2: </label>
        <input type="text" name="broj2">
        <br><br>
        <label>Operacija: </label>
        <input type="text" name="operacija">
        <br><br>
        <input type="submit" name="Izracunaj">
        </form>
        <form action="Forme.php" method="get">
            <label>Ime: </label>
            <input type="text" name="ime1"><br><br>
            <label>Prezime: </label>
            <input type="text" name="prezime1"><br><br>
            <label>E-mail: </label>
            <input type="email" name="eposta"><br><br>
            <label>URL: </label>
            <input type="url" name="adresasajta"><br><br>
            <label>Komentar: </label>
            <textarea name="komentari" rows="10" cols="10"></textarea><br>
            <label>Pol: </label>
            <input type="radio" value="Zenski" name="pol">
            <input type="radio" value="Muski" name="pol">
            <input type="radio" value="Ostalo" name="pol"><br><br>
            <input type="submit" name="potvrdi" value="Potvrdi"><br><br>


        </form>

    </body>

</html>

<?php

echo "<h2>Vas unos: </h2>";
echo "Vase ime je: ".$_GET["ime1"]."<br>";
echo "Prezime je: ".$_GET["prezime1"]."<br>";
echo "Vas e-mail je: ".$_GET["eposta"]."<br>";
echo "Adresa websajta je: ".$_GET["adresasajta"]."<br>";
echo "Komentari: ".$_GET["komentari"]."<br>";
echo "Vas pol je: ".$_GET["pol"]."<br>";







?>