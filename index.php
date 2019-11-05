<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($i = 0; $i < $months; $i++) {
    $month_expenses = rand(500, 700);
    $wallet += $month_income;
    $wallet -= $month_expenses;
}

$h1 = 'Wallet Forecast';
$h2 = "Po $months m.,prognozuojamas likutis $wallet";
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