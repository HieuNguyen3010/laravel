<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
</head>
<body>
	<h1>Hello xin chào mọi người</h1>
	<h1><?php echo $hovaten; ?> - <?php echo $lop; ?></h1>
	<h1>{{ "3 < 5" }}</h1>
	<h1>{!! "3 < 5" !!}</h1>

	<?php 
		$a = 8;
	 ?>
	 @if($a % 2 ==0)
	 {{ "$a la so chan" }}
	 @else
	 {{ "$a la so le" }}
	 @endif

	 <table border="1" style="border-collapse: collapse; width: 100px;">
	 	@for($i = 0; $i<=6; $i++)
	 	<tr>
	 		<td>{{ $i }}</td>
	 	</tr>
	 	@endfor
	 </table>

	 <?php 
	 	$arr = array(5,6,7,8,9);
	  ?>
	  @foreach($arr as $value)
	  {{ $value."," }}
	  @endforeach
</body>
</html>