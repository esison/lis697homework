<html>
<body>
<h1>Challenge: Book List</h1>
<?php

//Use a multi-dimensional array to later code a table around.
$bookdata = array(
	array("Title","First Name","Last Name","Number of Pages","Type","Price"),
	array("PHP and MySQL Web Development","Luke","Welling",144,"Paperback",31.63), 
	array("Web Design with HTML, CSS, JavaScript and jQuery","Jon","Duckett",135,"Paperback",41.23),
	array("PHP Cookbook: Solutions & Examples for PHP Programmers","David","Sklar",14,"Paperback",40.88),
	array("JavaScript and JQuery: Interactive Front-End Web Development","Jon","Duckett",251,"Paperback",22.09),
	array("Modern PHP: New Features and Good Practices","Josh","Lockhart",7,"Paperback",28.49),
	array("Programming PHP","Kevin","Tatroe",26,"Paperback",28.96)
);

//Put data into a table.
echo "<table border=\"1\">";
for($i=0;$i<count($bookdata);$i++) {
  echo('<tr>');
  for($j=0;$j<count($bookdata[$i]);$j++) {
	  ($i == 0 ) ? $style = ' style="background-color: black; color:white; font-style:heading;text-align:center"' : $style = NULL;
    echo("<td$style>" . $bookdata[$i][$j] . "</td>");
  } 
  echo('</tr>');
}
echo "</table><p></p>";

echo "Your total is $";
echo $bookdata[1][5]+$bookdata[2][5]+$bookdata[3][5]+$bookdata[4][5]+$bookdata[5][5]+$bookdata[6][5];

/*I was not able to add the total when each price variable had a $ sign before the number.*/

?>

<h1>Challenge: Coin Toss, continued</h1>
<?php

$b = 4; //set the number of heads you want in a row.

//Make a function that will be used in the loop. It will stop the loop once it gets the desired result.
function cointoss($toss)
{
  $test_array = [];
  $result_array = [];
  do {
    if (mt_rand(1,2) == 1)
    {
      array_push($result_array, 1);
      unset($test_array);
      $test_array = [];
    }
		else
		{
		array_push($result_array, 2);
		array_push($test_array, 2);
		}
  } while(count($test_array) < $toss);
  return $result_array;
}


echo "We are looking for $b heads in a row...<br>";
$result = cointoss($b);
$count = count($result);

// I made a loop that prints the result list until we get the desired result.
foreach ($result as $flip) {
  if ($flip == 1)
  {
    echo "<img src=http://30.media.tumblr.com/tumblr_l9jgddd49q1qzgcpyo1_500.gif style=width:120px;height:120px>";
  }
  elseif ($flip == 2)
  {
    echo "<img src=http://vignette2.wikia.nocookie.net/spartacus/images/5/55/Juliuscaesar.jpg/revision/latest?cb=20130606052819 style=width:90px;height:120px>";
  }
} echo "<br><p>It took $count tosses to land $b heads in a row.</p>";
echo "</div>";


?>

</body>
</html>