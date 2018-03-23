<!DOCTYPE html>
<html>
<body>

<form action="parcial-04.php" method="get"> <input type="text" name="num1"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num2"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num3"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num4"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num5"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num6"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num7"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num8"><br>	
<form action="parcial-04.php" method="get"> <input type="text" name="num9"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num10"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num11"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num12"><br>	
<form action="parcial-04.php" method="get"> <input type="text" name="num13"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num14"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num15"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num16"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num17"><br>	
<form action="parcial-04.php" method="get"> <input type="text" name="num18"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num19"><br>
<form action="parcial-04.php" method="get"> <input type="text" name="num20"><br><br>
<label for="find">Find:</label>
<form action="parcial-04.php" method="get"> <input type="text" name="find"><br>	
	
<input type="submit">
</form>

<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set(“display_errors”, 1 );

$array = array();

for ($i=1; $i <= 20 ; $i++) { 

	array_push($array, array(
		'num'.$i => $_GET['num'.$i],
));
}

$find = $_GET['find'];
//echo $find . "<br>";
$key =  array_search('15', $array).'<br />';
echo array_search(15,$array,true);
//echo $key;
//$arrayr = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

//$key = array_search('green', $arrayr);


if (in_array($find, $array, TRUE)) { 
    echo "Tem o numero <br>";
}else{
	echo "Não Tem o numero <br>";
}

for ($i=0; $i <= 19; $i++){
	print_r($array[$i]);
	echo "<br>";
}

?>

</body>
</html>