<!doctype html>
<html>
	<meta charset="utf-8">
	<!--Styling Sheets-->
	<link rel='stylesheet' href='{{ asset('css/style.css') }}'>
<body>

	<!--Logo and Webpage Title-->
	<div class="container">
		<br /><h2><img src=' {{ URL::asset('images/ComputerIcon.png') }} ' alt='Company Logo'> Developer's Best Friend</h2><br />
	</div>
	
	<!--Webpage Content-->
	<div class="welcome">
		@yield('content')
	</div>
	
</body>
<footer>
	<!--Contact Info-->
	<br />
	Authored By: Michael Delaney<br />
	michaeldelaney@fas.harvard.edu<br />
	DWA P3 - Developers Best Friend<br />
	<br />
</footer>
</html>