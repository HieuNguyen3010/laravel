<!DOCTYPE html>
<html>
<head>
	<title>Cạnh Huyền</title>
</head>
<body>
	<?php 
		$canhA = isset($_POST["canhA"])?$_POST["canhA"]:"";
		$canhB = isset($_POST["canhB"])?$_POST["canhB"]:"";
		$canhhuyen = sqrt(($canhA * $canhA) + ($canhB * $canhB));
	 ?>
	<fieldset style="width: 300px; margin: auto; background-color: pink;">
		<legend style="font-weight: bold;">Cạnh Huyền Tam Giác</legend>
		<form method="post" action="canhhuyentamgiac.php">
			<table style="width: 100%">
				<tr>
					<td>Cạnh A</td>
					<td><input type="text" name="canhA" value="<?php echo $canhA; ?>"></td>
				</tr>
				<tr>
					<td>Cạnh B</td>
					<td><input type="text" name="canhB" value="<?php echo $canhB; ?>"></td>
				</tr>
				<tr>
					<td>Cạnh Huyền</td>
					<td><input type="text" readonly name="canhhuyen" style="background:yellow;" value="<?php echo $canhhuyen; ?>"></td>
				</tr>
			</table>
			<center><input type="submit" value="Tính"></center>
		</form>
	</fieldset>
</body>	
</html>