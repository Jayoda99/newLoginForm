<?php 
$var1 = "Jayoda";
$var2 = "Jithmini";
$var3 = $var1.$var2;
echo $var3."<br>"."<br>";
?>

<?php 
$x = 96;
$y = 78;
$z = 89;
if($x > $y){
	if($x > $z){
    	echo "Max Number is: ", $x."<br>"."<br>";
    }
    else{
    	echo "Max Number is: ", $z."<br>"."<br>";
    }
}else{
	if($x > $z){
    	echo "Max number is: ", $y."<br>"."<br>";
    }
    else{
    	echo "Max Number is: ", $z."<br>"."<br>";
    }
}
?>

<?php 
$x = 1;
$sum = 0;
while($x <= 10){
	$sum = $sum + $x;
    $x++;
}
echo "The sum is: $sum"."<br>"."<br>";
?>

<?php 
$a = 1;
$mul = 0;
while($a <= 12){
	$mul = $a * 5;
    echo $a." "."x 5 = ".$mul."<br>";
    $a++;
}
?>

<h1>The PHP for loop</h1>
<?php 
$sum = 0;
for($x = 0; $x <= 100; $x++){
	echo "The number is: $x <br>";
    $sum = $sum + $x;
}
echo "The sum is: $sum"."<br>"."<br>";
?>

