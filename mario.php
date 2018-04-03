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
	echo"<table border=0 >";
for($a=0 ; $a < $num ; $a++ )
 {
 	echo"<tr>";
 	for($d =9; $d > $a ; $d--) {
 		echo"<td>&nbsp;</td>";
 	}
 	for($b=0 ; $b < $a+2 ; $b++) 
 	{
 	echo "<td>#</td>";
 	}
 	echo"</tr>";
 }
 echo"</table>";
}else {
	echo"Please enter between 1 to 10.";
}
?>

</body>
</html>