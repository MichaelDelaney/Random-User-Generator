<!doctype html>
<html>
	<meta charset="utf-8">
	<link rel='stylesheet' href='{{ asset('css/style.css') }}'>

	<title>
		@yield('title','P3 - Michael Delaney')
	</title>
<head>
</head>
<body>
	<div class="welcome">
		<img src=' {{ URL::asset('images/logo.png') }} ' alt='Company Logo'>
		<h1>You have arrived at Michael Delaney's P3</h1>
		@yield('content')
	</div>
	
</body>
</html>