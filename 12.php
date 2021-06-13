<?php
	if(isset($_POST['submit'])) {
		$option = $_POST['option'];
		if($option == '1')
		{
			$si_no = '101'; 
			$item_name = 'Pen';
			$price = '10';
			$item_code = 'P101';
		}
		elseif ($option == '2') {
			$si_no = '102';
			$item_name = 'Pencil';
			$price = '5';
			$item_code = 'P102';
		}
		elseif ($option == '3') {
			$si_no = '103';
			$item_name = 'Scale';
			$price = '15';
			$item_code = 'P103';
		}
	}
?>
<?php
$quantity = '';
$grand_total = '';
	if(isset($_POST['sub'])) {
		$quantity = $_POST['qty'];
		$si_no = $_POST['sl_num'];
		$item_name = $_POST['item_name'];
		$price = $_POST['item_price'];
		$item_code = $_POST['item_code'];
		$grand_total = $quantity * $price;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Item Bill</title>
</head>
<body>
		<form action="" method="POST">
			<center><h2>Select Your Item</h2>
			<select name="option" required>
    		<option value="" disabled selected>Select</option>
    		<option value="1">Pen</option>
   			<option value="2">Pencil</option>
   			<option value="3">Scale</option>
            </select>
            <br><br>
            <input  type="submit" name="submit" ><br><br>
		</form>
		</center>
					<center><h2>Item Info</h2></center>
	    <center>
		<table >
			<tr>
			<td>Item Number</td>
			<form method="POST">
			<td>
				<input type="text" name="sl_num" value="<?php echo $si_no; ?>" readonly>
			</td></tr>
			<tr>
				<td>Item Name</td>
				<td><input type="text" name="item_name" value="<?php echo $item_name; ?>" readonly></td>
			</tr>
			<tr>
			<td>Item Price</td>
				<td>
				<input type="text" name="item_price" value="<?php echo $price; ?>" readonly>
				</td></tr>
			<tr>
				<td>Item Code</td>
				<td><input type="text" name="item_code" value="<?php echo $item_code; ?>" readonly></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="qty" required></td>
			</tr><br>
		</table><br>
		<input type="submit" name="sub"><br><br>
		</form>
		</center>
		<center><h2>Bill</h2></center>
		<br>
		<center>
		<table border="1">
			<tr>
				<th>Item Name</th>
				<th>Item Code</th>
				<th>Item Price</th>
				<th>Quantity</th>
				<th>Date of purchase</th>
				<th>Total Amount</th>
			</tr>
			<tr>
				<td><?php echo $item_name; ?></td>
				<td><?php echo $item_code; ?></td>
				<td><?php echo $price; ?></td>
				<td><?php echo $quantity; ?></td>
				<td><?php echo date("d/m/Y"); ?></td>
				<td><?php echo $grand_total; ?></td>
			</tr>
		</table>
		</center>	
		<br><br>
</body>	
</html>