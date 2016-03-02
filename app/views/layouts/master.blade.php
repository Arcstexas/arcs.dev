<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Shawn Pivonka Gaming Blog</title>






		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link rel="shortcut icon" href="/img/truck.jpg" />
		<!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> -->
		<!-- <link rel="stylesheet" type="text/css" href="/css/mainBlog.css"> -->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


		@yield('top-script')
	</head>
	<body>

		<main id="main" class="container">

			@include('/partials/navBar')


			@yield('content')  {{-- is a placeholder --}}


			@include('/partials/footer');
		</main>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<!-- // <script src="/js/bootstrap.min.js"></script> -->
		<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		@yield('bottom-script')
	</body>
</html>