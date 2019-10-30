<?php
?>
<html>
    <head>
        <title>
            PHP lydės ir <?php print date('Y', strtotime('+'.rand(1,10).'Years'));?>
        </title> 
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="class<?php print rand(1,6);?>">
        </div>
    </body>

</html>
