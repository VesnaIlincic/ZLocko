<?php

$niz1=array(25, -78, 56, -123, -34, 98);
sort($niz1);
foreach($niz1 as $n1)
{
    echo "$n1 <br>";
}
echo "<br><br>";

$niz2=array("Dragan","Ljuba", "Vladan", "Luka", "Vesna", "Slavica");
sort($niz2);
foreach($niz2 as $n2)
{
    echo "$n2 <br>";
}
echo "<br><br>";

$niz1=array(25, -78, 56, -123, -34, 98);
rsort($niz1);
foreach($niz1 as $n1)
{
    echo "$n1 <br>";
}
echo "<br><br>";

$niz2=array("Dragan","Ljuba", "Vladan", "Luka", "Vesna", "Slavica");
rsort($niz2);
foreach($niz2 as $n2)
{
    echo "$n2 <br>";
}
echo "<br><br>";

$niz3=array("Dragan"=>25, "Ljuba"=>-78, "Vladan"=>56, "Luka"=>-123, "Vesna"=>-34, "Slavica"=>98);
asort($niz3);
foreach($niz3 as $n3=>$n3_value)
{
    echo "$n3, $n3_value <br>";
}
echo "<br><br>";

$niz3=array("Dragan"=>25, "Ljuba"=>-78, "Vladan"=>56, "Luka"=>-123, "Vesna"=>-34, "Slavica"=>98);
ksort($niz3);
foreach($niz3 as $n3=>$n3_value)
{
    echo "$n3, $n3_value <br>";
}
echo "<br><br>";

$niz3=array("Dragan"=>25, "Ljuba"=>-78, "Vladan"=>56, "Luka"=>-123, "Vesna"=>-34, "Slavica"=>98);
arsort($niz3);
foreach($niz3 as $n3=>$n3_value)
{
    echo "$n3, $n3_value <br>";
}
echo "<br><br>";

$niz3=array("Dragan"=>25, "Ljuba"=>-78, "Vladan"=>56, "Luka"=>-123, "Vesna"=>-34, "Slavica"=>98);
krsort($niz3);
foreach($niz3 as $n3=>$n3_value)
{
    echo "$n3, $n3_value <br>";
}
echo "<br><br>";

$boja=array("oker"=>"#996600", "pink"=>"#cc0066", "ljubicasta"=>"#660033", "zelena"=>"#009933");
asort($boja);
foreach($boja as $b=>$b_value)
{
    echo "$b, $b_value <br>";
}
echo "<br><br>";

$boja=array("oker"=>"#996600", "pink"=>"#cc0066", "ljubicasta"=>"#660033", "zelena"=>"#009933");
arsort($boja);
foreach($boja as $b=>$b_value)
{
    echo "$b, $b_value <br>";
}
echo "<br><br>";

$boja=array("oker"=>"#996600", "pink"=>"#cc0066", "ljubicasta"=>"#660033", "zelena"=>"#009933");
ksort($boja);
foreach($boja as $b=>$b_value)
{
    echo "$b, $b_value <br>";
}
echo "<br><br>";

$boja=array("oker"=>"#996600", "pink"=>"#cc0066", "ljubicasta"=>"#660033", "zelena"=>"#009933");
krsort($boja);
foreach($boja as $b=>$b_value)
{
    echo "$b, $b_value <br>";
}
echo "<br><br>";







?>