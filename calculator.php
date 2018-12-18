<?php

//FUNCTIONS
function Add($num1, $num2) {
	return $num1 + $num2;
}

function Subtract($num1, $num2) {
	return $num1 - $num2;
}

function Multiply($num1, $num2) {
	return $num1*$num2;
}

function Divide($num1, $num2) {
	return $num1/$num2;
}


//PRINT OUT THE FORM
echo "
<!DOCTYPE HTML>
<html lang='en'>

	<head>
		<title>Calculator</title>
	</head>
<body>

<h1>WELCOME! THIS IS A CALCULATOR THAT I BUILT. ENJOY! </h1>

	<form  method='GET'>
		<p>Number 1:</p>
		<input type='text' name='num1' value='".@$_REQUEST['num1']."' />
		<p>Number 2:</p>
		<input type='text' name='num2' value='".@$_REQUEST['num2']."' />
		<br><br>

		<input type='radio' name='function' id='Add' value='+'/>Add (+)<br>
		<input type='radio' name='function' id='Subtract' value='-'/>Subtract (-)<br>
		<input type='radio' name='function' id='Multiply' value='*'/>Multiply (*)<br>
		<input type='radio' name='function' id='Divide' value='/'/>Divide (/)<br>

		<input type='submit' name='Submit' value='Submit'/>

	</form>
";

// action ='"; echo htmlentities($_SERVER['PHP_SELF']); echo"'

if(isset($_GET['function'])){

	$func = (string)$_GET["function"];
	$num1 = (float)$_GET["num1"];
	$num2 = (float)$_GET["num2"];

	if($func == '+'){
		$result = Add($num1, $num2);
	}
	else if($func == '-'){
		$result = Subtract($num1, $num2);
	}
	else if($func == '*'){
		$result = Multiply($num1, $num2);
	}
	else {
		if($num2 == 0){
			$result= "Sorry, cannot divide by Zero!";
		}
		else{
			$result = Divide($num1, $num2);
		}
	}
	echo "
	<p style='text-decoration:underline'>RESULTS:</p>
	<p style='color:red'>$num1 $func $num2 = $result </p>";
}

?>

</html>
