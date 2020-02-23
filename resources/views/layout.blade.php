<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Home Page')</title>
</head>
<body>
	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="php">PHP</a></li>
		<li><a href="js">JS</a></li>
	</ul>
	@yield('content')
</body>
</html>