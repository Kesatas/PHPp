<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;

for ($i = 0; $i < $kates; $i++) {
    for ($j = 0; $j < $sunys; $j++) {
        $pavyko = rand(0, 1);
        if ($pavyko) {
            $katasuniai++;
            break;
        }
    }
}

$h1 = 'Katasuniu Iseiga';
$h2 = "Dalyvavo $kates kates ir $sunys Sunys";
$h3 = "Katasuniu iseiga : $katasuniai";
?>
<html>
    <head>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
    </body>
</html>