<?php
$img_1 = 'https://i.ytimg.com/vi/CM_9FwfMBrM/hqdefault.jpg';
$img_2 = 'https://i.pinimg.com/originals/85/03/0d/85030dacda1b1f91b92ff77056b17648.jpg';
$img_3 = 'https://www.rd.com/wp-content/uploads/2018/12/50-Funny-Animal-Pictures-That-You-Need-In-Your-Life-45.jpg';
$img_4 = 'https://image.shutterstock.com/image-photo/funny-portrait-hero-260nw-410898763.jpg';
?>
<html>
    <head>
        <title> Variables</title> 
    </head>
    <body>
        <main>
            <img src="<?php print $img_1; ?> width="300" height="300">
            <img src="<?php print $img_2; ?> width="300" height="300">
            <img src="<?php print $img_3; ?> width="300" height="300">
            <img src="<?php print $img_4; ?> width="300" height="300">
        </main>
    </body>
</html>
