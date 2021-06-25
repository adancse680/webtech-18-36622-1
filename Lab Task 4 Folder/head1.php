<html>
<body>

<form method="post">

<table>
	<tr>
		<td><a href="Dashboard.php"><img src="./pic/logo.jpg" alt="Logo" style="width:80px;height:80px;"></a></td>
		<td align="right" style="width: 100%;"> 
	    <?php 
		session_start();

		if (isset($_SESSION['username'])) 
		{
			echo "Logged in as ".$_SESSION['username'];
		}
		else
		{
		header("location:loginwt.php");
	    }
		?> | <a href="Logout.php">Logout</a></td>
	</tr>
</table>
</form>

</body>
</html>