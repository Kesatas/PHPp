<?php
$days = 365;
$pack_price = 3.50;
$count_ttl = 0;
$time_per_cig = 5;


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
} else {
    $price_ttl = round($count_ttl / 20) * $pack_price;
    $price_ttl += $pack_price;
}

$time_total = round(($count_ttl * 5) / 60);
?>
<html>
    <head>
        <title>Cycles</title>
    </head>
    <body>
        <div>
            <?php for($i =0; $i<$count_ttl; $i++):?>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrgmrbE7KRGgb4t5w1aKgXxEwVHK2wXV7JPS3OPBTn-uH56_K-&s" width="15" height="15">
            <?php endfor;?>
        </div>
    </body>
</html>