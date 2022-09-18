
<html>
	<head>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="style/reg.css">

		<title>Create Account - I want to be hired</title>

	</head>
	<body>

		<form class="container" action="{{ route('User-register') }}" enctype="multipart/form-data" method="post">
			
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
		
			<h4> Regester a new account: </h4>
			<h6>[All fields are required!]</h6> <br/>
			<div class="form-group">
				<label for="Username">Username: </label>
				<input type="text" Name="name" class="form-control" id="Username" placeholder="Your Full Name" required>
				<label for="InputEmail1">Email address: </label>
				<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" Name="email" placeholder="Enter your email" required>
				<small id="emailHelp" class="form-text text-muted">We'll never share your email! Please use a valid email for verification and further use.</small>
			</div>
			<div class="form-group">
				<label for="Institute">Institute/Organization: </label>
				<input type="text" Name="Organization" class="form-control" id="Institute" placeholder="Where you work?" required> <small class="form-text text-muted">[it could be your educational inst. too!] </small>
				<label for="Designation">Designation: </label>
				<input type="text" Name="Designation" class="form-control" id="Designation" placeholder="What is your position?" required> <small class="form-text text-muted">[Or write 'Student, freelancer, etc.']</small>
				<label for="Subject">Field: </label>
				<input type="text" Name="Field" class="form-control" id="Field" placeholder="Field you are expert at" required>

				<label for="InputPassword1">Password: </label>
				<input type="password" Name="Password" class="form-control" id="InputPassword1" placeholder="Password" required>
				<label for="InputPassword2">Confirm Password: </label>
				<input type="password" name="Password_confirmation" class="form-control" id="InputPassword2" placeholder="Password" required>

				<label for="PhoneNumber">Phone: </label>
				<input type="Number" Name="Phone" class="form-control" id="PhoneNumber" placeholder="Phone no." onkeydown="javascript: return event.keyCode == 69 ? false : true" required>
				<label for="BDay">Birthday: </label>
				<input type="date" Name="Birthdate" class="form-control" id="BDay"  max="2005-01-01" required>
			</div>
			<div class="form-class">
				<label>Upload a picture of yours: &nbsp;</label>
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
			<button type="submit" name="Create" class="btn btn-primary">Continue</button>
			<small class="form-text text-muted">[Hereby I declare that if I use this platform for any illegal activity, authority can take any legal action against me.] </small>
		</form>

		@include('layout.copyright')

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	</body>
</html>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  if(is_uploaded_file($_FILES['uploadImage']['tmp_name'])) 
  { 

  	if(empty($_FILES['uploadImage']['name']))
  	{
  		echo " File name is empty! ";
  		exit;
  	}

  	$upload_file_name = $_FILES['uploadImage']['name'];

  	if(strlen ($upload_file_name)>100)
  	{
  		echo " too long file name ";
  		exit;
  	}

	$temp = explode(".", $_FILES["uploadImage"]["name"]);
    $newfilename = $_POST['email'] . '.' . end($temp);
	$upload_file_name = $newfilename;

  	if($_FILES['uploadImage']['size'] > 999900000) 
  	{
		echo " too big file ";
  		exit;        
    }

    try{
    $dirc = "Profiles\\".$_POST['email'];
    if(!is_dir($dirc)){
    mkdir($dirc);

    $dest=__DIR__.'\\'.$dirc.'\\'.$upload_file_name;
    if(move_uploaded_file($_FILES['uploadImage']['tmp_name'], $dest)) 
    {
    	echo 'Picture Has Been Uploaded !';
    }

	}else{
		echo "<script>alert('Account already exist.');</script>";
		echo "<script>location='Stu_reg.php';</script>";
	}
	}catch(exception $e){
		echo "<script>alert('Error...!!! Account exist or internal problem.');</script>";
		echo "<script>location='Stu_reg.php';</script>";	
	}

  }


}

?>


<?php 

	if(isset($_POST["Create"])){

		try{

		   $Name = $_POST['name'];
		   $email = $_POST['email'];
		   $password = sha1($_POST['Password']);
		   $desig = $_POST['Designation'];
		   $inst = $_POST['Institute'];
		   $subject = $_POST['Subject'];
		   $phone = $_POST['Phone'];
		   $Bday = $_POST['Birthdate'];
		   $gender = $_POST['gender'];
		   $age = 5;
		   $isActive = 'semi';
		   $Hashes = md5(rand());	
		   $photo = $upload_file_name;

    $conN = OpenConN_Usr();

    $SqL = "insert into general(Name,Ref,Email,Pass,Phone,Institute,Designation,Course,Birthdate,Age,Gender,Picture,isActive,Hashes) values ('".$Name."',0,'".$email."','".$password."','".$phone."','".$inst."','".$desig."','".$subject."','".$Bday."','".$age."','".$gender."','".$photo."','".$isActive."','".$Hashes."')";

	if(mysqli_query($conN,$SqL)){

		$sql = "SELECT Ref FROM general where Email = '$email'";
		$res = $conN->query($sql);
		$r = $res->fetch_assoc();

		$rand1 = md5(rand());
		$rand2 = md5(rand());
		$ref = $r['Ref'];
			   
		echo "<script>alert('Congrats!');</script>";

		session_start();

  		$_SESSION['SN'] = md5(rand());
  		$_SESSION['Act'] = 'semi';

		echo "<script>location='next.php?as=$rand1&f=$ref&id=$rand2';</script>";
  		exit();
		CloseConN($conN);

	}

	}catch(Exception $e1){
		CloseConN($conN);
		echo "<script>alert('Error...!!! Account exist or internal problem.');</script>";
		echo "<script>location='Stu_reg.php';</script>";	
	}
}

?>

