<?php
$days = 365;
$pack_price = 3.50;
$count_ttl = 0;

for ($i = 0; $i < $days; $i++) {
    $date = date('N', strtotime("+$i day"));
    if ($date > 0 && $date <= 5) {
        $count_ttl += rand(3, 4);
    } else if ($date === 6) {
        $count_ttl += rand(10, 20);
    } else if ($date === 7) {
        $count_ttl += rand(1, 3);
    }
}
if ($count_ttl % 20) {
    $price_ttl = round($count_ttl / 20) * $pack_price;
}
else{
    $price_ttl = round($count_ttl / 20) * $pack_price;
    $price_ttl += $pack_price;
}
$h1 = 'Mano dumu skaiciuokle';
$h2 = "Per $days dienas , surukysiu $count_ttl cigareciu uz $price_ttl eur.";
?>
<html>
    <head>
        <title>Cycles</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>