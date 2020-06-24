<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>samlekom ini halaman blog</h1>
  <h2>{{ $blog }}!!</h2>

  @foreach ($users as $user)
    <li>{{ $user->username }}</li>
  @endforeach
</body>
</html>
