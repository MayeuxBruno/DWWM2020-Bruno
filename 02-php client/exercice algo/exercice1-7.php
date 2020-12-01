<?php
$a=10;
$b=15;
$c=20;
$d=$c;
$c=$b;
$b=$a;
$a=$d;
echo $a."  ".$b."  ".$c;