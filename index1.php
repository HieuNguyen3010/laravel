<!DOCTYPE html>
<html>
<head>
	<title>PHP2</title>
	<meta charset="utf-8">
</head>
<!-- /*
		- GET: là phương thức của form được thực hiện theo hình thức truyền các tham số lên URL
		- Cấu trúc của danh sách các tham số: index.php?bien1=giatri1&bien2=giatri2
			- Sau dấu ? là danh sách các biến
			- Biến có cấu trúc: tenbien=giatri
			- Các biến cách nhau bởi dấu &

		- Array trong PHP
			- Array bao gồm 2 thành phần: key và value
				key: là chỉ số của array, chạy từ 0-n(phần tử đầu tiên key=0)
				value: là giá trị array
			- Hàm print_r(array) sẽ hiển thị cấu trúc của array
			- Hàm count(array) sẽ trả về số lượng các phần tử trong array
			- Để duyệt các phần tử trong array, sử dụng lệnh foreach theo cấu trúc
			foreach($bien as $key=>$value){} ->$key là chỉ số, $value là giá trị
			foreach($bien as $value){} -> $value là chỉ số, không show được key
			- Các cách khai báo array
				- Khai báo array không có chỉ số, khi đó chỉ số sẽ gán tự động từ 0-n
					- cú pháp: $bien = array(giatri1,giatri2...giatrin); -> khi đó key sẽ được gán tự động, key=0 cho phần tử đầu tiên, key=1 cho phần tử thứ 2
					- Khi đó sẽ có sự tương ứng: $bien[0] = giatri1; $bien[1] = giatri2; -> để lấy giá trị của phần tử đầu tiên, chỉ cần ghi $bien[0]
					- Thêm một phần tử array theo cấu trúc: $bien[] = giatri
					- Để xóa một phần tử array theo cấu trúc: unset($bien[key]) -> khi đó sẽ xóa phần tử thứ key ra khỏi array
				- Khai báo array do người dùng tự định nghĩa chỉ số
					- Cú pháp: $bien = array("chiso1"=>giatri1,"chiso2"=>giatri2...)
					-> khi đó key sẽ là chiso1,chiso2 tương ứng với các value
		- hàm time() sẽ đổi thời gian hiện tại ra thành một số nguyên
		- cookie: là đoạn mã lưu ở phía client
			- cookie có thời gian timeout tính bằng giây
			- Cú pháp: setcookie(ten,giatri,thoigiansong)
				- ten: là tên biến
				- giatri: các kiểu dữ liệu
				- thoigiansong: là thời gian hiện tại (tính bằng hàm time()) cộng với số thời gian mà cookie này tồn tại. Quá thời gian thì cookie sẽ tự động bị hủy
			- Để lấy giá trị của cookie, sử dụng đối tượng $_COOKIE["ten"]
			- Để hủy cookie, chỉ cần cho thời gian tồn tại về trước thời gian hiện tại
		- Session: phiên làm việc
			- session tồn tại phía server
			- Muốn sử dụng session, bắt buộc phải start session bằng hàm session_start();
			- Khai báo hoặc sử dụng session bằng biến $_SESSION["tenbien"]
			VD: $_SESSION["lop"] = "PHP24"; -> echo $_SESSION["lop"]
			- Để hủy session, sử dụng hàm unset($_SESSION["tenbien"])
			- Mỗi phiên làm việc sẽ có một id thông qua hàm session_id(). Phiên làm việc được định nghĩa:
				- Mỗi trình duyệt (IE, firefox, chrome) sẽ có một phiêm làm việc khác nhau (có session id khác nhau).Khi đóng trình duyệt thì session cũng sẽ mất đi.Session tồn tại trên trình duyệt có nghĩa là tồn tại trong tất cả các tab và các thành phần khác của trình duyệt

	*/ -->

<body>
	
<!-- 
	 <?php
		/*	if($_SERVER["REQUEST_METHOD"] == "GET")
			$url = $_GET["rdo"];
			echo $url;*/
			//di chuyen den link
			//header("location: tentrang") -> di chuyen den trang tentrang
			
	 ?>  
	<fieldset style="width: 300px; margin: 20px auto;">
		<legend>Form Get</legend>
		<form method="GET" action="index1.php">
			<div><input type="radio" name="rdo" value="http://vnespress.net">Vnespress.net</div>
			<div><input type="radio" name="rdo" value="http://dantri.com.vn">Trang dan tri</div>
			<div><input type="radio" name="rdo" value="http://ngoisao.net">Trang ngoi sao</div>
			<div><input type="submit" value="Go"></div>
		</form>
	</fieldset> -->




<!-- 
	<?php
	/*	$tenlop = "";
		$monhoc = "";
		if(isset($_GET["tenlop"]) == true)
			$tenlop =  $_GET["tenlop"];
		if(isset($_GET["monhoc"]) == true)
			$monhoc = $_GET["monhoc"];
		echo "<h1>Ten lop: $tenlop </h1>";
		echo "<h1>Ten mon hoc: $monhoc </h1>";*/
	 ?>
	<h1><a href="index1.php?tenlop=PHP24&monhoc=PHP">Lien ket den trang</a></h1>  -->


<!-- 
	<?php 
	/*	echo $_SERVER["REQUEST_METHOD"];
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$txt = $_POST["txt"];
			echo "<h1>$txt</h1>";
		}*/
	 ?>
	 <script type="text/javascript">
	 	function go(){
	 		//tac dong vao thuoc tinh action cua form
	 		//document.getElementById('frm').action = "http://dantri.com.vn"
	 		//tac dong vao thuoc tinh submit de submit form
	 		document.getElementById('frm').submit();
	 	}
	 </script>
	<fieldset style="width: 300px; margin: 20px auto;">
		<form id="frm" method="POST" onsubmit="return true" action="index1.php">
			Noi dung <input type="text" name="txt" required>
			<!-- <input type="submit" value="Go">  -->
		<!-- 	<a href="#" onclick="go();">Submit</a>
		</form>
	</fieldset> --> 



<!-- 
	<?php 
	/*
		$arr = array("hieu",34,true);
		//them mot phan tu vao array
		$arr[] = "nguyen";
		unset($arr[1]);
		//hien thi cau truc cua array
		echo "<pre>";
		print_r($arr);
		echo "</pre>";*/
	 ?>  -->



<!-- 
	 <?php 
	 	/*echo "<h1>".time()."</h1>";
	 	//setcookie("hoten","nguyen trung hieu",time() + 100);
	 	echo $_COOKIE["hoten"];*/
	  ?> -->




	  <?php 
	  	//de du dung ham session, phai start session
	  	session_start();
	  	//khoi tao bien session co ten la tenlop
	  	$_SESSION["tenlop"] = "PHP24";
	  	$tenlop = $_SESSION["tenlop"];
	  	echo $tenlop;	
	   ?> 
</body>
</html>
