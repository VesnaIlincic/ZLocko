<?php



?>

<html>
    <head>
    </head>
    <body>
        <p>
        Rezultat je: <?php 
                        $a=$_GET["broj1"];
                        $b=$_GET["broj2"];
                        $op=$_GET["operacija"];
                        switch($op)
                        {
                            case "+":
                            echo $rez=$a+$b;
                            break;
                            case "-":
                            echo $rez=$a-$b;
                            break;
                            case "*":
                            echo $rez=$a*$b;
                            break;
                            case "/":
                            echo $rez=$a/$b;
                            break;
                        }
                        
                        ?>
        </p><br>
    </body>
</html>
