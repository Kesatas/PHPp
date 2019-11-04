<?php
$bool = true;
$int = 1;
$str = '1';
$flt = 1.23;
$str1 = '1.23';

if($bool == $int)
{
    $atsakymas ='Lygus';
    if($bool === $int)
    {
        $atsakymas ='Identiski';
    }
}
if($str == $bool)
{
    $atsakymas ='Lygus';
    if($str === $bool)
    {
        $atsakymas ='Identiski';
    }
}
if($flt == $str1)
{
    $atsakymas ='Lygus';
    if($flt === $str1)
    {
        $atsakymas ='Identiski';
    }
}

$li1 ="Bool (true) ir Integer (1) : $atsakymas";
$li2 ="String (1) ir Boolean (1) : $atsakymas";
$li3 ="float (1.23) ir string (1.23) : $atsakymas"
?>
<html>
    <head>
        <title>if</title> 
    </head>
    <body>
        <ul>
            <li><?php Print $li1;?></li>
            <li><?php Print $li2;?></li>
            <li><?php Print $li3;?></li>
        </ul>
    </body>
</html>
