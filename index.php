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
            <div class="bomba"></div>
            <div class="bomba-<?php print $sekundes;?>"></div>
            <h1><?php print $sekundes; ?></h1>
        </main>
        <style>
            .bomba{
                 background-image: url(/images/bomb.png);
                 background-position: center;
                 height : <?php print $aukstis;?>;
                 width :<?php print $plotis;?>;
                 background-size :cover;
            }
            .bomba-00{
                 background-image: url(/images/boom.jpg);
                 background-position: center;
                 height : 500px ;
                 width : 500px;
                 background-size :cover;
            }
        </style>
    </body>
</html>
