<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>
<?php require '../Controller/addMedicineValidation.php';?><br>

<form method="post">
<fieldset>

	<legend><h1>Add Medicine Order</h1></legend>

	<fieldset>
	    <l>Medicine Name :</l1>
		<input type="text" name="medicineName" value="<?php echo $medicineName;?>">
		<span class="error"><?php echo $medicineNameErr;?></span>
	</fieldset><br>

	<fieldset>
    	<l>Total Quantity:</l>
		<input type="text" name="pricePerPiece" value="<?php echo $pricePerPiece;?>">
		<span class="error"><?php echo $pricePerPieceErr;?></span>
	</fieldset><br>

	<fieldset>
	    <l>Total Price :</l>
		<input type="text" name="quantity" value="<?php echo $quantity;?>">
		<span class="error"><?php echo $quantityErr;?></span>
	</fieldset><br>

	<input type="submit" name="submit" value="Save">
</fieldset><br>
</form>
</body>
</html>