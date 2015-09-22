<html>
<body>
<h1>Challenge: ISBN Validation</h1>
<?php
/*Examples
Valid: 0321784073
Invalid: 156881111X
*/

$isbn = "156881111X"; //this is the isbn number that is scanned
echo "Checking ISBN $isbn for validity...";

/*I had to individualize each number for the calculation*/
$ISBNstring = $isbn;
$a = substr($ISBNstring,-10,1);
$b = substr($ISBNstring,-9,1);
$c = substr($ISBNstring,-8,1);
$d = substr($ISBNstring,-7,1);
$e = substr($ISBNstring,-6,1);
$f = substr($ISBNstring,-5,1);
$g = substr($ISBNstring,-4,1);
$h = substr($ISBNstring,-3,1);
$i = substr($ISBNstring,-2,1);
$j = substr($ISBNstring,-1,1);

/*If the last digit is an x...*/
if ($j == "x") {
	$j = 10;
}
echo "<br>\n";
echo "<br>\n";

/*This is the math but I think there might be an easier way to calculate 
using loop but I didn't know how to use addition with the loops. The numbers I wanted to add
just kept showing together instead of giving me the sum...*/
$sumtotal = ((10*$a)+(9*$b)+(8*$c)+(7*$d)+(6*$e)+(5*$f)+(4*$g)+(3*$h)+(2*$i)+(1*$j));
  if ($sumtotal % 11 == 0)
  {
    echo "This is a <b>valid</b> ISBN!";
  } else {
    echo "This is an <b>invalid</b> ISBN";
  }
  
 
?>

<h1>Challenge: Coin Toss</h1>
<?php

/*I think I could have made this shorter...*/
function cointoss($a, $b) {
	$coinflip = mt_rand($a, $b);
	if ($coinflip==$a) {
	echo "<b>head</b> ";
} else {
	echo "<i>tail </i>";
}
}
echo "Flipping a coin 1 time..." . "<br>";
$one1 = cointoss(1, 2);
echo "$one1 <br>";
echo "<br>";
echo "Flipping a coin 3 times...". "<br>";
$three1 = cointoss(1,2);
$three2 = cointoss(1,2);
$three3 = cointoss(1,2);
echo $three1;
echo $three2;
echo "$three3 <br>";
echo "<br>";
echo "Flipping a coin 5 times..."."<br>";
$five1= cointoss(1,2);
$five2= cointoss(1,2);
$five3= cointoss(1,2);
$five4= cointoss(1,2);
$five5= cointoss(1,2);
echo "$five1";
echo "$five2";
echo "$five3";
echo "$five4";
echo "$five5<br>";
echo "<br>";
echo "Flipping a coin 7 times..."."<br>";
$seven1= cointoss(1,2);
$seven2= cointoss(1,2);
$seven3= cointoss(1,2);
$seven4= cointoss(1,2);
$seven5= cointoss(1,2);
$seven6= cointoss(1,2);
$seven7= cointoss(1,2);
echo "$seven1";
echo "$seven2";
echo "$seven3";
echo "$seven4";
echo "$seven5";
echo "$seven6";
echo "$seven7<br>";
echo "<br>";
echo "Flipping a coin 9 times..."."<br>";
$nine1= cointoss(1,2);
$nine2= cointoss(1,2);
$nine3= cointoss(1,2);
$nine4= cointoss(1,2);
$nine5= cointoss(1,2);
$nine6= cointoss(1,2);
$nine7= cointoss(1,2);
$nine8= cointoss(1,2);
$nine9= cointoss(1,2);
echo "$nine1";
echo "$nine2";
echo "$nine3";
echo "$nine4";
echo "$nine5";
echo "$nine6";
echo "$nine7";
echo "$nine8";
echo "$nine9<br>";
echo "<br>";


/*AHHH! I thought str_repeat would make it repeat 
more than once but it doesn't even give me 10...do I really
need to assign a new string name each time???*/
for($count=1; $count<=600; ++$count) {
  $twoheads = cointoss($a, $b);
  if ($count=5) break;

echo str_repeat($twoheads, 10);
}


?>


</body>
</html>