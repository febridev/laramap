<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laramap v1</title>
	<link rel="stylesheet" href="{{URL('assets/css/main.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	@yield('content')

	<script crossorigin="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAO2JwM0KN9xtAndK-6Hwj6k4DKCLIvkHo&libraries=places"
    async="" defer=""></script>
	@stack('scripts')
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>