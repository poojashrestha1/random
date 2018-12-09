<?php
$cart_array=array("Wonder Bread", "Pickles", "Moyannaise", "Lettuce");

echo $cart_array[0];
echo "<br/>";
echo "$cart_array[1]";
echo "<br/>";
echo "$cart_array[2]";
echo "<br/>";
echo "$cart_array[3]";
echo "<br/><hr/>";
foreach ($cart_array as $key) {
	echo $key;
}
echo "<br/>";
echo serialize($cart_array);

echo "<br/>";
print_r($cart_array);

echo "<br/>";
echo gettype($cart_array);
?>


<?php
echo "<br/><hr/>";
$cart_array= array('cerial' => 5.00, 'coffee beans' => 2.00, 'bananas'=> 5.22, "onion"=> 12.54, "Lettuce"=>12.45, "tomato"=>5.00 );
echo "Bananas cost".$cart_array["bananas"]."at this store";
echo "<br/>";
foreach ($cart_array as $key => $value) {
	echo $key."'s cost is ".$value."<br/>";
}
?>

<?php
echo "<br/><hr/>";
$members= array(
	'member1' => array(
		'name' => "John", 
		'zodiac'=>"Scorpio", 
		'country'=>"USA"),

	'member2'=>array(
		'name' => "Jack", 
		'zodiac'=>"Aquarius", 
		'country'=>"UK"),
	'member3'=>array(
		'name' => "Hari", 
		'zodiac'=>"Aries", 
		'country'=>"UAE"),
);
echo $members["member2"]["name"];
echo "<br/>";

foreach ($members as $key => $value) {
	echo "The details are as follows <br/>";
	foreach ($value as $y => $z) {
		echo "$z <br/>";
	}
}
?>

<?php
echo "<br/><hr/>";
$myarray=array("Europe","Asia","Africa","Australia");
next($myarray); //advance internal pointer
$current=current($myarray); //get current element
echo "$current";
echo "<br>";
$lastvalue=end($myarray);
echo "$lastvalue";
echo "<br>";
list($u1,$u2,$u3,$u4)=$myarray;
echo "$u2 and $u3 start with A.";
?>