<?php
$godRodj=1971;
$tezina=70;
$visinaCM=165;
$visinaM=$visinaCM/100;
$BMI=$tezina/($visinaM * $visinaM);
$godRac=date("Y");
$brGod=$godRac-$godRodj;
$pol="z";
echo "<p>Pol: $pol</p>";
echo "<p>Godine: $brGod</p>";
echo "<p>BMI: $BMI</p>";

if($pol=="z")
    {if($BMI<=18.5)
        {echo "<p><img src='pothZ.jpg' <br> Pothranjenost</p>";}
    elseif($BMI<=24.9)
        {echo "<p><img src='normZ.jpg'<br> Normalna</p>";}
    elseif($BMI<=29.9)
        {echo "<p><img src='povisZ.jpg' <br> Povisena</p>";}
    elseif($BMI>=30)
        {echo "<p><img src='gojZ.jpg' <br> Gojaznost</p>";}}
if($pol=="m")
    {if($BMI<18.5)
        {echo "<p><img src='pothM.jpg' <br> Pothranjenost</p>";}
    elseif($BMI<24.9)
        {echo "<p><img src='normM.jpg'<br> Normalna</p>";}
    elseif($BMI<29.9)
        {echo "<p><img src='povisM.jpg' <br> Povisena</p>";}
    elseif($BMI>30)
        {echo "<p><img src='gojM.jpg' <br> Gojaznost</p>";}}
echo "<br>";






?>