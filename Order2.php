<!DOCTYPE html>
<html>
<head>
	<title>Multiple</title>
</head>
<body>
	<table>
		<form method="POST" action="Order3.php">
			<?php
				$num = $_POST['num'];
				for ($i=1 ; $i <= $num ; $i++ ) 
				{ 
					# code...
			?>

			<tr>
				<td colspan="2">Item #<?php echo $i;?></td>
			</tr>

			<input type="hidden" value = "<?php echo $num;?>"name="num"/>

			<span>Item No </span>
			<select name="ItemNo[]" class="select-field">
    			<option value="">Select</option>
    			<option value="401">Chicken Biryani</option>
   				<option value="402">Mutton Biryani</option>
   				<option value="403">Kadai Paneer</option>
   				<option value="404">Roti</option>
   				<option value="405">Rice</option>
			</select>

			<span>Quantity </span>
			<select name="Quantity[]" class="select-field">
    			<option value="">Select</option>
    			<option value="1">1</option>
   				<option value="2">2</option>
   				<option value="3">3</option>
   				<option value="4">4</option>
   				<option value="4">5</option>

    		</select>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>

			<?php }
			?>

			<tr>
				<td><input type = "submit" value = "Place Order" name = "submit" /></td>
			</tr>
		</form>
	</table>
</body>
</html>