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

    </body>

</html>






<?php


?>