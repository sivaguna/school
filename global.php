<?php
$x=10;
$y=10;
function mytest()
{
global $x,$y;
$z=$x+$y;
echo "$z";
echo "$z";
echo "$z";
}
mytest();
?>