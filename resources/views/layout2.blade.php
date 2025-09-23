<html>
<head>
	<title>Manila FAME</title>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" >
	<link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" ></script>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>