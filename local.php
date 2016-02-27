<?php
$x= 10;
function test()
{
$y =5;
global $x;
echo "<p>inside the function:</p>";
echo "the variable x is:";
echo "<br>";
echo "the varible y is:";
}
test();

echo "<p>outside the function:</p>";
echo "the variable x is:";
echo "<br>";
echo "the varible y is:";
echo "<p>outside the function:</p>";
echo "the variable x is:";
echo "<br>";
echo "the varible y is:";
?>
