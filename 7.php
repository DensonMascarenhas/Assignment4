<!DOCTYPE html>
<head>
	<title>Electricity Bill</title>
</head>

<?php
$final_result = $result = '';
if (isset($_POST['unit-submit'])) {
    $units_consume = $_POST['units'];
    if (!empty($units_consume)) {
        $result = generate_bill($units_consume);
        $final_result = 'Total amount of ' . $units_consume . ' - ' . $result;
    }
}

function generate_bill($units_consume) {
    $unit_first = 3;
    $unit_second = 4;
    $unit_third = 5;
    $unit_fourth = 6;

    if($units_consume <= 100) 
	{
        	$bill = $units_consume * $unit_first;
    	}
    else if($units_consume > 50 && $units_consume <= 100) 
	{
        $temp = 50 * $unit_first;
        $remaining_units = $units_consume - 50;
        $bill = $temp + ($remaining_units * $unit_second);
    }
    else if($units_consume > 100 && $units_consume <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_second);
        $remaining_units = $units_consume - 150;
        $bill = $temp + ($remaining_units * $unit_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_second) + (100 * $unit_third);
        $remaining_units = $units_consume - 250;
        $bill = $temp + ($remaining_units * $unit_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
}

?>

<body>
	<div id="page-wrap">
		<h1>Electricity Bill</h1>

		<form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php 
			echo '<br />'; 
			echo $final_result.'Rs.'; 
			?>
		</div>
	</div>
</body>
</html>