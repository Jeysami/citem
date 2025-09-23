<html>
<head>
	<title>Manila FAME</title>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" >
	<link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" ></script>
</head>
<body>
	<div>
		@yield('content') 
	</div>
</body>
</html>