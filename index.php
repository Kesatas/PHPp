<?php

$gryzai_velai = rand(1,0);
$gryzai_isgeres = rand(1,0);

$h1 = 'Buitine Skaiciuokle';

if($gryzai_velai && $gryzai_isgeres )
{
    $h2 ='Gryzai velai ir isgeres';
}
else if($gryzai_velai)
{
     $h2 = 'Gryzai velai';
}
else if($gryzai_isgeres)
{
    $h2 ='Gryzai isgeres';
}
else {
    $h2 ='Nieko nepadarei';
}

?>
<html>
    <head>
        <title> if </title> 
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2;  ?></h2>
    </body>
</html>
