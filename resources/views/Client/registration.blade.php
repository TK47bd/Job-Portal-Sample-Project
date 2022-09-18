
<html>
	<head>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('css/reg.css') }}">

		<title>Create Account - I want to hire</title>

	</head>
	<body>

		<form class="container" action="{{ route('Client-register') }}" enctype="multipart/form-data" method="post">

			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			@csrf
			
			<h4> Register a new account: </h4>
			<h6>[All fields are required!]</h6> <br/>

			<div class="form-group">
				<label for="Username">Username: </label>
				<input type="text" Name="name" class="form-control" id="Username" placeholder="Your Full Name" required>
				<label for="InputEmail1">Email address: </label>
				<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" Name="email" placeholder="Enter your email" required>
				<small id="emailHelp" class="form-text text-muted"> We'll never share your email! Please use a valid email for verification and further use. </small>
			</div>
			<div class="form-group">
				<label for="Institute">Organization: </label>
				<input type="text" Name="Institute" class="form-control" id="Institute" placeholder="What is your organization name?" required> <small class="form-text text-muted">[People will be able to search and find to know about vacancy! write 'Freelance' if you want to hire for your personal tasks.] </small>
				<label>Website: </label>
				<input type="url" Name="Web" class="form-control" placeholder="Website link">
				<small class="form-text text-muted">[Include 'https://'. You can skip if you don't have it now, but it is good for your organization to have one! <a href="https://www.symstar.co.uk/" style="text-decoration:none;" target="_blank">Order us</a>] </small>
				<label for="Designation">Designation: </label>
				<input type="text" Name="Designation" class="form-control" id="Designation" placeholder="What is your position?" required>
				<label>NID number: </label>
				<input type="Number" Name="NID" class="form-control" placeholder="Valid NID no." onkeydown="javascript: return event.keyCode == 69 ? false : true" required>
				<small class="form-text text-muted">We'll never share or use it anywhere! We will just verify you are real and not here for spamming.</small>

				<label>Office Address: </label>
				<textarea name="Location" class="form-control" rows="2" style="width: 50%; resize: none;" placeholder="ex- House 21, Road 2, New Lane" required></textarea>
				<label>ZIP: </label>
				<input type="Number" Name="ZIP" class="form-control" placeholder="ZIP Code of office location(ex: 1212)" onkeydown="javascript: return event.keyCode == 69 ? false : true" required>
				<label>City: </label>
				<input type="text" Name="City" class="form-control" placeholder="City where the office is located(ex: Dhaka)" required>


				<label for="InputPassword1">Password: </label>
				<input type="password" Name="password" class="form-control" id="InputPassword1" placeholder="Password" required>
				<label for="InputPassword2">Confirm Password: </label>
				<input type="password" name="password_confirmation" class="form-control" id="InputPassword2" placeholder="Password" required>

				<label for="PhoneNumber">Phone: </label>
				<input type="Number" Name="Phone" class="form-control" id="PhoneNumber" placeholder="Phone no." onkeydown="javascript: return event.keyCode == 69 ? false : true" required>
				<label for="BDay">Birthday: </label>
				<input type="date" Name="Birthdate" class="form-control" id="BDay"  max="2005-01-01" required>
			</div>
			<div class="form-class">
				<label>Upload Logo of your Company: &nbsp;</label>
				<input type="file" Name="uploadImage" accept="image/png, .jpeg, .jpg, image/gif" required>
			</div>
			<div class="form-check" style="padding-left: 0;">
				<label class="radio-inline">
					<label for="male">Gender: &nbsp;</label>
					<input type="radio" id="male" name="gender" value="male" checked>
					<label for="male">Male</label><br>
			    </label>
			
				<label class="radio-inline">
					<input type="radio" id="female" name="gender" value="female">
					<label for="female">Female</label><br>
				</label>

				<label class="radio-inline">
					<input type="radio" id="other" name="gender" value="other">
					<label for="other">Other</label>
				</label>
			</div>
			<button formnovalidate type="submit" name="Create" class="btn btn-primary">Continue</button>
			<small class="form-text text-muted mb-5">[Hereby I declare that if I use this platform for any illegal activity, authority can take any legal action against me.] </small>
			<br>

		</form>

		@include('layout.copyright')

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	</body>
</html>




