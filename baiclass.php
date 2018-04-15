<!DOCTYPE html>
<html>
<head>
	<title>Doc So</title>
</head>
<body>
	<?php 
		class docso{
			public $so;

			//ham tao co tham so
			public function __construct($so){
				$this->s = $so;
			}
			public function read(){
				$kq = $this->s;
				$tram = floor($kq/100);
				$chuc = floor(($kq%100)/10);
				$donvi = ($kq%100)%10;
				$chu = array("không","một","hai","ba","bốn","năm","sáu","bảy","tám","chín");
				$tr="";
				$ch="";
				$dv="";
				if($tram<>0)
				{ 	$tr=$chu[$tram]." trăm";
		       		if($chuc==0)
		       		{
			       		if($donvi<>0)
			       	 	{
			       	  		$ch=" linh ";
			       	  		$dv=$chu[$donvi];
		             	}
		             	else
		             	{
		             		$ch="";
			            	$dv="";
		             	}
		       		}
		       		elseif($chuc<>0)
		      		 {
		       			$ch=$chu[$chuc]." mươi";
		      
		      		 	if($chuc==1)
		       			{
		       				$ch=" mười ";
		       				$dv=$chu[$donvi];

		       			}
		       	
		       			switch ($donvi) {

		       				case 1:
		       				if($chuc<>1)
		       				$dv=" mốt ";
		       				break;
		       				case 5:
		       				$dv=" lăm ";
		       				break;
		       				default:
		       				$dv=$chu[$donvi];
		       				break;
		       			}
		      		 }
			  
					}
			else{

				if($chuc<>0&&$chuc<>1)
				{
					$ch=$chu[$chuc]." mươi";
				    $dv=$chu[$donvi];
				    switch ($donvi) {

		       		case 1:
		       		if($chuc<>1)
		       			$dv=" mốt ";
		       			break;
		       		case 5:
		       			$dv=" lăm ";
		       			break;
		       		default:
		       			$dv=$chu[$donvi];
		       			break;
		       	}
				}
				elseif($chuc<>0&&$chuc==1)
				{
					$ch=" mười";
					$dv=$chu[$donvi];

			    }
			    else{
			    	$ch="";
					$dv=$chu[$donvi];
			    }
			}
			if($donvi==0)
			$dv="";
			echo "$tr"." $ch"." $dv";
			}
		}
		$number = $_POST["number"];
		$kt = new docso($number);
		
		
	 ?>

	 <fieldset style="width: 300px; margin: auto;">
	 	<legend>Doc So Thanh Chu</legend>
	 	<form method="post">
	 		<table>
	 			<tr>
	 				<td>Nhap so</td>
	 				<td><input id="number" type="text" name="number" value="<?php echo $number; ?>"></td>
	 			</tr>
	 			<tr>
	 				<td>Doc So</td>
	 				<td><input type="text" name="" readonly value="<?php echo $kt->read(); ?>"></td>
	 			</tr>
	 			<tr>
	 				<td></td>
	 				<td><input type="submit" name="" value="Đọc số"></td>
	 			</tr>
	 		</table>
	 	</form>
	 </fieldset>
	 
</body>
</html>