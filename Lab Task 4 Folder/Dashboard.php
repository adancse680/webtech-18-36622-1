<html>
<body>

<?php include 'head1.php';?>

<form>
<table>
	<tr>
		<td><?php include 'account.php';?></td>
		<td>
			<fieldset>
				<?php 
				if (isset($_SESSION['username'])) 
				{
					echo "Welcome ".$_SESSION['username'];
				}
				else
				{
					header("location:login.php");
				}?>
			</fieldset>		
		</td>
	</tr>
</table>
</form>

<?php include 'foot.php';?>

</body>
</html> 