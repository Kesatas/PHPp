<?php
$aukstis = date('s'.'5');
$plotis = date('s'.'5');
$sekundes = date('s');
?>
<html>
    <head>
        <title> Bomba</title> 
    </head>
    <body>
        <main>
            <img src="/images/bomb.png" alt="" height="<?php print $aukstis;?>" width="<?php print $plotis;?>">
            <h1><?php print $sekundes; ?></h1>
        </main>
    </body>
</html>
