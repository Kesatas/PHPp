<?php
$days = 365;
$pack_price = 3.50;
$count_ttl = 0;

for ($i = date('N'); $i < $days; $i++) {
    if ($i > 0 && $i <= 5) {
        $count_ttl += rand(3, 4);
    } else if ($i === 6) {
        $count_ttl += rand(10, 20);
    } else {
        $count_ttl += rand(1, 3);
    }
}
$price_ttl = round($count_ttl / 20) * $pack_price;
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