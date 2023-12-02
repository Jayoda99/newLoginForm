<?php 
echo "Hello World!"."<br>";
?>

<?php 
$color = "red";
$COLOR = "white";
$coLOR = "yellow";
echo "My car is ".$color."<br>";
echo "My house is ".$COLOR."<br>";
echo "My boat is ".$coLOR."<br>"."<br>";
?>

<head>
	<title><?php echo "Jayoda"; ?></title>
</head>

<h1><?php echo "Jayoda" ?></h1>

<p><?php echo "Jayoda"?></p>

<a href="#"><?php echo "Jayoda"."<br>"."<br>"?></a>


<form method="GET">
	<input type="text" name="username">
	<input type="submit" name="submit">
</form>
<?php 
	$username = $_GET['username'];
	echo $username."<br>"."<br>";
?>



