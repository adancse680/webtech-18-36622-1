<?php

$medicineNameErr = $pricePerPieceErr = $quantityErr = "";
$medicineName = $pricePerPiece = $quantity = "";


if (isset($_POST['submit'])) 
{
	if (empty($_POST["medicineName"])) 
	{
		$medicineNameErr = "Medicine name is required";
	} 
	else 
	{
		$medicineName = $_POST["medicineName"];
		if (preg_match("/^[a-zA-Z0-9+* -]*$/",$medicineName)) 
		{
		}
		else
		{
			$medicineNameErr = "Not allowed";
			$medicineName = "";
		}
	}

	if (empty($_POST["pricePerPiece"])) 
	{
		$pricePerPieceErr = "Price per piece is required";
	} 
	else 
	{
		$pricePerPiece = $_POST["pricePerPiece"];
		if (preg_match("/^[0-9.]*$/",$pricePerPiece)) 
		{
		}
		else
		{
			$pricePerPieceErr = "Not allowed";
			$pricePerPiece = "";
		}
	}

	if (empty($_POST["quantity"])) 
	{
		$quantityErr = "Quantity is required";
	} 
	else 
	{
		$quantity = $_POST["quantity"];
		if (preg_match("/^[0-9]*$/",$quantity)) 
		{
		}
		else
		{
			$quantityErr = "Not allowed";
			$quantity = "";
		}
	}

	if(empty($medicineName) || empty($pricePerPiece) || empty($quantity))  
	{   
	}
	else
	{
		require_once '../Model/modelMedicine.php';

		$data['medicineName'] = $medicineName;
		$data['pricePerPiece'] = $pricePerPiece;
		$data['quantity'] = $quantity;

		if (updateMedicine($_GET['medicineId'], $data)) 
		{
			header('Location: ../View/displayMedicine.php');
		}
	}
}
?>