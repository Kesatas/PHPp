<?php
$gryzai_velai = rand(1, 0);
$gryzai_isgeres = rand(1, 0);

$h1 = 'Buitine Skaiciuokle';

if ($gryzai_velai && $gryzai_isgeres) {
    $h2 = 'Gryzai velai ir isgeres';
    $h3 = 'Miegosi ant sofos';
    $img = 'https://confidentman.net/wp-content/uploads/angry-woman-1024x683.jpg';
} else if ($gryzai_velai || $gryzai_isgeres) {
    $h2 = 'Gryzai velai arba isgeres bet anksti';
    $h3 = 'Miegosi lovoj';
    $img = 'http://ebs-consulting.com/wp-content/uploads/2016/03/Dollarphotoclub_69793015-130104-edited.jpg';
} else {
    $h2 = 'Nieko nepadarei';
    $h3 = 'Miegosi lovoj';
    $img = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJBfoXUUS8Gqd3oR7AfHigP9d68E4GrhrEwuKhNWKcEL9vnvYC&s';
}
?>
<html>
    <head>
        <title>if</title> 
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <img src="<?php print $img ?>" width="400" height="400">
    </body>
</html>
