<!DOCTYPE html>
<html>
<head>
	<title>vd</title>
	<meta charset="utf-8">
</head>
<!-- 
	- Kết nối PHP & mySQL
		- Sử dụng mysqli để kết nối php&mysql
		- mysqli_connect(hostname,username,password,database) sẽ thực hiện việc kết nối giữa php và mysql, kết quả trả về một biến gọi là ketnoi
		- mysqli_query(ketnoi,truy vấn sql) sẽ thực hiện truyền câu truy vấn vào csdl, kết quả trả về là một object có tên là ketqua
		- mysqli_fetch_array(ketqua) sẽ duyệt qua các object ketqua và trả về một biến array
		- mysqli_fetch_object(ketqua) sẽ duyệt qua các object ketqua và trả về một biến theo kiểu object
		- mysqli_num_rows(ketqua) trả về số lượng các bản ghi

 -->
<body>
	<?php 
		$hostname = "localhost";
		$user = "root";
		$password = "";
		$database = "php24_database";
		$db = mysqli_connect($hostname,$user,$password,$database);
		//set charset de hien thi unicode
		mysqli_set_charset($db,"UTF8");
		//tao ham lay ra danh sach phong ban
		function phongban(){
			global $db;
			$result = mysqli_query($db,"select * from phongban");
			//duyet qua gia tri cua object $result,tra ket qua ve mot bien array
			$arr = array();
			while($rows = mysqli_fetch_object($result))
				$arr[] = $rows;
				return $arr;
		}
		$danhsachphongban = phongban();
		//------------
		$action = isset($_GET["action"])?$_GET["action"]:"";
		switch($action){
			case "delete":
			$maphongban = isset($_GET["maphongban"])?$_GET["maphongban"]:0;
			delete_phongban($maphongban);
			//quay lai trang vidu.php
			header("location:vidu.php");
			break;
		}
		function delete_phongban($maphongban){
			global $db;
			mysqli_query($db,"delete from phongban where maphongban='$maphongban'");
		}
		//------------
	 ?>

	 <fieldset style="width: 400px; margin: 30px auto;">
	 	<legend>Danh Sach Phong Ban</legend>
	 	<div style="margin-bottom: 5px;">
	 		<a href="themsuaphongban.php">Them phong ban</a>
	 	</div>
	 	<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
	 		<tr>
	 			<th>Ten phong Ban</th>
	 			<th style="width: 100px;"></th>
	 		</tr>
	 		<?php 
	 			foreach ($danhsachphongban as $rows)
	 			{
	 		 ?>
	 		<tr>
	 			<td><?php echo $rows->tenphongban ?></td>
	 			<td style="text-align: center;">
	 				<a href="themsuaphongban.php?action=edit&maphongban=<?php echo $rows->maphongban; ?>">Edit</a>&nbsp;&nbsp;
	 				<a href="vidu.php?action=delete&maphongban=<?php echo $rows->maphongban; ?>">Delete</a>
	 			</td>
	 		</tr>
	 		<?php 
	 			}
	 		 ?>
	 	</table>
	 </fieldset>
</body>
</html>