<!DOCTYPE html>
<html>
<head>
	<title>Them sua pb</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$hostname = "localhost";
		$user = "root";
		$password = "";
		$database = "php24_database";
		$db = mysqli_connect($hostname,$user,$password,$database);
		//set charset de hien thi unicode
		mysqli_set_charset($db,"UTF8");
		//------------
		$action = isset($_GET["action"])?$_GET["action"]:"";
		switch($action){
			case "edit":
				$maphongban = isset($_GET["maphongban"])?$_GET["maphongban"]:0;
				$form_action = "themsuaphongban.php?action=do_edit&maphongban=$maphongban";
				//goi ham lay ban ghi co maphongban truyen vao
				$arr = get_phongban($maphongban);
			break;
			case "do_edit":
				$maphongban = isset($_GET["maphongban"])?$_GET["maphongban"]:0;
				$tenphongban = $_POST["tenphongban"];
				//goi ham update ban ghi
				update_phongban($maphongban,$tenphongban);
				//quay lai trang vidu.php
				header("location:vidu.php");
			break;
			case "do_add":
				$tenphongban = $_POST["tenphongban"];
				//goi ham insert ban ghi
				insert_phongban($tenphongban);
				//quay lai trang vidu.php
				header("location:vidu.php");
			default:
				$form_action = "themsuaphongban.php?action=do_add";
			break;
		}
		function insert_phongban($tenphongban){
			global $db;
			//thuc thi truy van
			mysqli_query($db,"insert into phongban(tenphongban) values('$tenphongban')");
		}
		function update_phongban($maphongban,$tenphongban){
			global $db;
			mysqli_query($db,"update phongban set tenphongban='$tenphongban' where maphongban=$maphongban");
		}
		function get_phongban($maphongban){
			global $db;
			$result = mysqli_query($db,"select * from phongban where maphongban=$maphongban");
			//duyet qua mot lan object $result de lay gia tri
			$rows = mysqli_fetch_object($result);
			return $rows;
		}
		//------------
	 ?>
	 <fieldset style="width: 300px; margin: 30px auto;">
	 	<legend>Them sua phong ban</legend>
	 	<form method="post" action="<?php echo $form_action; ?>">
	 		<table cellpadding="5">
	 			<tr>
	 				<td>Ten phong ban</td>
	 				<td><input type="text" name="tenphongban" required value="<?php echo isset($arr->tenphongban)?$arr->tenphongban:""; ?>" ></td>
	 			</tr>
	 			<tr>
	 				<td></td>
	 				<td><input type="submit" value="Thuc Hien"></td>
	 			</tr>
	 		</table>
	 	</form>
	 </fieldset>
</body>
</html>