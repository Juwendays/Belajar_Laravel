<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>samlekom ini halaman blog</h1>
	<hr>
	@foreach ($blogs as $blog)
		<li>{{$blog->title}}</li>
	@endforeach
</body>
</html>
