<?php
$sudas1 = rand(1,100);
$sudas2 = rand(101,200);
$sudas3 = rand(201,300);
$sudas4 = rand(301,400);

$h1 = 'Skolos skaiciuokle';
$h2 = 'Jei paemei';
$h3 = 'Su dviem kabanciais grazinsi';
$h4 = 'Su vienu kabanciu grazinsi';
?>
<html>
    <head>
        <title> Variables</title> 
    </head>
    <body>
        <div>
            <h1><?php print $h1.$sudas1 ?></h1>
            <h2><?php print $h2.$sudas2 ?></h2>
            <h3><?php print $h3.$sudas3 ?></h3>
            <h4><?php print $h4.$sudas4 ?></h4>
        </div>
    </body>
</html>
