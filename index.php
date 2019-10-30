<html>
    <head>
        <title>
            PHP lydės ir <?php print date('Y', strtotime('+'.rand(1,10).'Years'));?>
        </title>
    </head>
    <body>
        <h1>Galbut turesiu <?php print rand(1,5).' vaikus'?></h1>
        <p>D.Trump'as nebebus prezidentu :
        <?php 
        print date('Y', strtotime('+'. rand(2,10).'Years')).' '. date('l').' '. date('d');
        ?>
        </p>
    </body>
</html>
