<!DOCTYPE html>
<html>
<head>
	<title>HCN</title>
</head>
<body>
	<?php 
		$chieudai = $_POST["chieudai"];
		$chieurong = $_POST["chieurong"];
		$kq = $chieudai * $chieurong;
	 ?>
	<fieldset style="width:300px; margin: auto; background:pink;">
		<legend style="font-weight: bold;">Dien Tich HCN</legend>
		<form method="post" action="hcn.php">
			<table style="width: 100%">
				<tr>
					<td>Chieu dai</td>
					<td><input type="text" name="chieudai" placeholder="Nhap chieu dai" value="<?php echo $chieudai ?>"></td>
				</tr>
				<tr>
					<td>Chieu rong</td>
					<td><input type="text" name="chieurong" placeholder="Nhap chieu rong" value="<?php echo $chieurong ?>"></td>
				</tr>
				<tr>
					<td>Dien tich</td>
					<td><input type="text" readonly value="<?php echo $kq; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Tinh"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>