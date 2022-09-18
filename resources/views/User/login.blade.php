
<html>
	<head>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('css/reg.css') }}">

		<title>Login</title>

	</head>
	<body>

		<form class="container" action="{{ route('User-login-check') }}" method="post">
			
			@if (session()->has('error'))
				<div class="alert alert-danger">
					<p> Wrong Credentials or User not Registered! </p>
				</div>
			@endif
		
			@csrf

			<div class="form-group">
				<h4> Login: </h4>

				<label>Email:</label>
				<input type="text" class="form-control" name="Email" placeholder="Email" required>
				<label>Password:</label>
				<input type="password" class="form-control" name="pass" placeholder="Password" required>
			</div>

			<button type="submit" name="Submit" class="btn btn-success">Login</button>
			<br><br>

			<p> <a href="{{ route('User-reg') }}">Click here</a> to do Registration as Job Finder </p>

		</form>

		@include('layout.copyright')

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	</body>
</html>


