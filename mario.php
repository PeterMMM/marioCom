<html><h2></h2>
<head></head>
<body>
<h4>Enter between 1 to 10 to create mario(By Peter)</h4>
<br><form action="" method="post"><input type="number" name="num"/><input type="submit" value="Show Mario"/>
</form><br>
<?php

$num = $_POST["num"];
echo "Number = ".$num."<br>";

if(0 < $num && $num < 11) {
for($a=0 ; $a < $num ; $a++ )
 {
 	for($b=0 ; $b < $a+1 ; $b++) 
 	{
 	echo "#";
 	}
 	echo"<br>";
 }
 
}else {
	echo"Please enter between 1 to 10.";
}
?>

</body>
</html>