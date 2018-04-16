<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<fieldset style="width: 300px; margin: auto;">
		<legend>Form</legend>
		<form method="post" action="">
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="text" name="txt" required>
			<input type="submit" value="Go">
		</form>
		<h1>{{ Request::get('txt') }}</h1>
	</fieldset>
</body>
</html>