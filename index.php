<?php

$h1 = 'Keliones skaiciuokle';
$distance = rand(100,300);
$consumption = 7.5;
$price_l = 1.3;
$fuel_total = round($distance / $consumption);
$price_trip = round($fuel_total * 1.3);
$my_money = 100;

$li_1 =" Nuvaziuota distancija $distance";
$li_2 =" sunaudota $fuel_total kuro";
$li_3 =" Kaina : $price_trip Pinigu !";
$li_4 ="Turimi pinigai $my_money";

if($price_trip <= $my_money)
{
     $ar = 'nuvaziuos';
}
else{
     $ar ='nenuvaziuos';
}

?>
<html>
    <head>
        <title> Variables</title> 
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
            <ul>
                <li><?php print $li_1; ?></li>
                <li><?php print $li_2; ?></li>
                <li><?php print $li_3; ?></li>
                <li><?php print $li_4; ?></li>
                <li><?php print $ar; ?></li>
            </ul>
    </body>
</html>
