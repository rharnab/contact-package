<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{ url('send') }}" method="post">
		@csrf
		<input type="text" name="name" placeholder="name">
		<input type="email" name="email" placeholder="email">
	<textarea name="message" cols="20" rows="5"></textarea>
		<input type="submit" name="" value="submit">
	</form>
</body>
</html>