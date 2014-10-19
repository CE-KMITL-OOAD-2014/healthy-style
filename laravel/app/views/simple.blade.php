<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Squirrels!</title>
</head>
<body>
	@if ($squirrel == 'red')
	<p>I am a {{$squirrel}} squirrel!</p>
	@else
	<p>something could be a squirrel.</p>
	@endif
</body>
</html>