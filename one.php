<?php
$namee="RAM";
echo 'I am $namee';
echo "<br>";
$sport1='volley';
$plan1="I will play {$sport1}ball in summer time";
echo "$plan1";
 
echo "<br>";
$name="Ram";
$name.=" Shrestha ";
$name.="goes to college.";
echo "$name";
echo "<br>";
$short_string="This string has 20 characters";
print("It does have ".strlen($short_string)."characters");

echo "<br>";

$twister="Peter picked a Pebble.";
print("Location of 'p' is ".strpos($twister, 'p'));

//strrev reverses the string.
echo "<br>";

$string1="Hello World";
$string2="Hello World";
$result=strcmp($string1, $string2);
if ($result!=0) {
	echo "The strings do not match";
}
else
{
	echo "The strings match";
}
?>