<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Layout</title>
</head>
<body>
	<style type="text/css">
		body,h1{padding: 0px; margin: 0px;}
		.wrap{width: 1000px; margin: auto;}
		.header{height: 100px; background-color: red;}
		.left{height: 400px; width: 200px; background-color: green; float: left;}
		.main{height: 400px; width: 600px; float: left;}
		.right{height: 400px; width: 200px; background-color: blue; float: left;}
		.footer{height: 100px; background-color: yellow; clear: both;}
	</style>
	<div class="wrap">
		<div class="header"><h1>Header</h1></div>
		<div class="left"><h1>Left</h1></div>
		<div class="main">
			@yield('controller')
		</div>
		<div class="right"><h1>Right</h1></div>
		<div class="footer"><h1>Footer</h1></div>
	</div>
</body>
</html>