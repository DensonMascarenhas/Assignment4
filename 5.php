<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>

<body>
   <center>
	<h1>BASIC CALCULATOR</h1>
	
	
	<form method="post">
		<table border="2">
			<tr>
				<td> <input type="number" name="num1" value="" placeholder="Enter First number"/>
				</td>
			</tr>

			<tr>
			<td> <input type="text" name="option" value=""
					placeholder="USE +,-,*,/ ONLY"/>
				</td>
			
			</tr>

			<tr>
				<td> 
					<input type="number" name="num2" value="" placeholder="Enter Second Number"/>
				</td>
			</tr>

			<tr>
			<center>
				<td> <input type="submit" name="submit"
					value="Submit"/>
				</td>
				</center>
			</tr>
		</table>
	</form>
</center>

<?php


if(isset($_POST['submit'])) 
{
	$a = $_POST['num1'];
	$b = $_POST['num2'];
	$ch = $_POST['option'];
	switch($ch) 
	{
		case '+':	$r = $a + $b;
			echo " Addition of two numbers = " . $r ;
			break;

		case '-':	$r = $a - $b;
			echo " Subtraction of two numbers= " . $r ;
			break;

		case '*':	$r = $a * $b;
			echo " Multiplication of two numbers = " . $r ;
			break;

		case '/':	$r = $a / $b;
			echo " Division of two numbers = " . $r ;
			break;

		default: echo ("invalid option\n");
	}
	return 0;
}
?>
</body>
</html>
