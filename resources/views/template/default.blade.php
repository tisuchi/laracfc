<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cFc :: Academic Conference Worldwide</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

	@include('template.partials.top-nav')
	<div class="container">
		@include('template.partials.alert')
		@yield('content')
	</div>

	
</body>
</html>