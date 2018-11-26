<?php
echo "My name is Pooja Shrestha";
//phpinfo(); not to use on live server

$message= "Welcome to php class";
echo "<br/>";

//Single line comment
/*multi line comment */
#alternative way

?>
<?= $message ?>

<?php
$qty=5;
$price=10000;
$amt=$qty*$price;
echo "<br/>";
echo "Rs. ".number_format($amt,2);

echo "<br/>";

$num1=30;
$num2=40;
$sum=$num1+$num2;
echo "The sum of $num1 and $num2 is $sum <br>";
echo "The multiplication of $num1 and $num2 is ".($num1*$num2)." <br>";


if ($num1%2==0) 
{
	echo "even";
	# code...
}
else
{
	echo "odd";
}

for($i=1; $i<10; $i++)
{
	echo "5*$i=".(5*$i)."<br>";
}
>?