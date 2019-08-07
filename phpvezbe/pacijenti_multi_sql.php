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
    $sql="INSERT INTO pacijenti VALUES(12, 'Dragi', 'Borić', 199, 96, 1987);";
    $sql.="INSERT INTO pacijenti VALUES(13, 'Dušanka', 'Prelević', 176, 78, 1976);";
    $result=mysqli_multi_query($conn, $sql);
    if($result)
    {
        echo "Uspesno dodavanje reda u tabelu pacijenti";
    }
    else
    {
        echo "Desila se greska: ";
        echo mysqli_error($conn);
    }

    




?>