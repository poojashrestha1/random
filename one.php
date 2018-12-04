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
$resultt=strcasecmp($string1, $string2);
if($resultt!=0) { //0 if true
	echo "The strings do not match";
}
else
{
	echo "The strings match";
}

//strtoupper, strtolower... ucfirst... ucwords... wordwrap
//trim



echo "<br>";
$mystring="Develop PHP is the best place for beginners to learn PHP";
$mystring=wordwrap($mystring,24,"<br/>");
echo "$mystring";
echo "<hr/>";
$mystring="Wrap long words hahahahahahahahhahahahahahahahahahahahahahahahaha";
$mystring=wordwrap($mystring,24,"<br/>",true);
echo "$mystring";
$mystring=trim($mystring,"ra");
echo "$mystring";
//trims first and last only
//space matters in between the letters

//chop..rtrim..ltrim

?>

<?php
$stringa= "In the year";
$stringb= "the world will end";
$myfile=fopen("myfile.txt", "w");
$formatted=fprintf($myfile, "%s%04d%s",$stringa, date("Y"), $stringb);
echo "$formatted";


$mystring="This will \n add break tags where \n new lines are.";
$newstring=nl2br($mystring);
echo "$newstring";
?>

<?php
$mystring="Joey's BBQ shack";
$newstring=addslashes($mystring);

echo "$newstring";
echo "<br>";
$astring=stripslashes($newstring);
echo "$astring";
?> 

<?php
echo "<br>";
$mystring="pooja1234";
$hashedstring=md5($mystring);
echo "$hashedstring";
?>