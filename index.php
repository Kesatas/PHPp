<?php
$bin_vol = 40;
$bin_heap_vol = rand(100,250);
$trash_per_day = 15;
$days = ($bin_heap_vol +$bin_vol)/$trash_per_day;
?>
<html>
    <head>
        <title> Variables</title> 
    </head>
    <body>
            <h1>siuksliu prognoze</h1>
            <p>Turima siuksline - <?php print $bin_vol; ?> Litru</p>
            <p>zmone nieko nesako, kol kaupas nevirsija <?php print $bin_heap_vol + $bin_vol; ?> litru</p>
            <h3>isvada : nieko nedarysiu <?php  print $days; ?> dienu</h3>
    </body>
</html>
