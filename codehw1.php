<html>
<body>
<h1>Challenge: Correct Change</h1>
<?php
$change = 159;
$dvalue = 100;
$qvalue = 25;
$divalue = 10;
$nvalue= 5;
$cvalue = 1;


if ($change >= $dvalue) {
	$dollar = (int)($change/$dvalue); 
	$quarter = (int)(($change%$dvalue)/$qvalue);
	$dime = (int)((($change%$dvalue)%$qvalue)/$divalue);
	$nickel = (int)(((($change%$dvalue)%$qvalue)%$divalue)/$nvalue);
	$cent = (int)((((($change%$dvalue)%$qvalue)%$divalue)%$nvalue)/$cvalue);
} elseif ($change < $dvalue) {
	$dollar = 0;
	$quarter = (int)(($change%$dvalue)/$qvalue);
	$dime = (int)((($change%$dvalue)%$qvalue)/$divalue);
	$nickel = (int)(((($change%$dvalue)%$qvalue)%$divalue)/$nvalue);
	$cent = (int)((((($change%$dvalue)%$qvalue)%$divalue)%$nvalue)/$cvalue);
} elseif ($change < $qvalue) {
	$quarter = 0;
	$dime = (int)((($change%$dvalue)%$qvalue)/$divalue);
	$nickel = (int)(((($change%$dvalue)%$qvalue)%$divalue)/$nvalue);
	$cent = (int)((((($change%$dvalue)%$qvalue)%$divalue)%$nvalue)/$cvalue);
} elseif ($change < $divalue) {
	$dime = 0;
	$nickel = (int)(((($change%$dvalue)%$qvalue)%$divalue)/$nvalue);
	$cent = (int)((((($change%$dvalue)%$qvalue)%$divalue)%$nvalue)/$cvalue);
} elseif ($change < $nvalue) {
	$nickel = 0;
	$cent = ($nickel%$nvalue)/$cvalue;
} elseif ($change < $cvalue) {
	$cent = 0;
}
echo "You are due $change cents back in change total.";

echo "<br>";

echo "You are due back $dollar dollar(s), $quarter quarter(s), $dime dime(s), $nickel  nickel(s), and $cent  cent(s).";

?>

<h1>Challenge: 99 Bottles of Beer</h1>
<?php


for($count=99; $count>=1; $count--){
	$sub = $count-1;
	if ($sub == 0) break;
    echo "$count bottles of beer on the wall, $count bottles of beer!<br>";
	echo "Take one down and pass it around, ";
	echo $sub;
	echo " bottles of beer on the wall!";
	echo "<br>";
}
echo "$count bottle of beer on the wall, $count bottle of beer! Take one down and pass it around, no more bottles of beer on the wall!";
echo "<br>";
echo "The End.";











?>

</body>
</html>