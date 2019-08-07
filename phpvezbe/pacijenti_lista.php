<?php
    $servername="localhost";
    $username="admin";
    $password="admin123";
    $database="ambulanta";
    $conn=mysqli_connect($servername, $username, $password, $database);
    if(!$conn)
    {   
        die("Neuspela konekcija. Razlog: ".mysqli_connect_eror());
    }
    echo "Uspesna konekcija! :)";
    mysqli_set_charset($conn, "utf8");
    $sql="SELECT ime, prezime, visina, tezina,god_rodjenja FROM pacijenti";
    $result=mysqli_query($conn, $sql);
    //Da li postoje redovi u tabeli??
    if($result!=false)
    {
    if(mysqli_num_rows($result)==0)
    {
        echo "<p>Ne postoje pacijenti u bazi.</p>";
    }
    else
    {
        echo "<ol>";
        while($red=mysqli_fetch_assoc($result))
        {
            //Nesto radimo sa redom - uzima sledeci red, iterator se podesi na sledeci, sve dok se ne istrose svi redovi
            echo "<li>";
            echo "Pacijent: ".$red["ime"]." ".$red["prezime"]." ";
            echo ", visine:"." ".$red["visina"].", tezine: "." ".$red["tezina"]." ".", godine rodjenja: ".$red["god_rodjenja"];
            echo "</li>";
        }

        echo "</ol>";
    }
    }
    else 
    {
        echo "Upit nije uspesno izvrsen!";
    }
    




?>