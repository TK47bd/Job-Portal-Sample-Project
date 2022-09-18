
@if(Session::get('User') != 'semi')
        
		<script> location.href="{{ route('Dashboard') }}"; </script>
		
		@php
			exit();
	    @endphp
		
@endif

<html>
	<head>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

		<title>Update info</title>

		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

	</head>
	<body>

		<form class="container mt-3" action="#" method="post" enctype="multipart/form-data">
			
			@csrf

			<h4> Add Your Profile Details: </h4>
			<p>[<i class="text-danger">*</i> are required fields]</p> <br/>
			<div class="form-group">
				<label>Institute:  </label>
				<input type="text" Name="University" class="form-control" placeholder="Your Educational Institute">
				<br/>
				<label>Most Used Social Media Link: </label>
				<input type="text" Name="Social" class="form-control" placeholder="ex- facebook.com/example123">
				<br/>

				<script>
					$(document).ready(function(){
						$("select.country").change(function(){
							var selectedCountry = $(".country option:selected").val();
							$.ajax({
								type: "POST",
								url: "{{ asset('files/lib/adopted.php') }}",
								data: { country : selectedCountry } 
							}).done(function(data){
								$("#response").html(data);
							});
						});
					});
				</script>

				<label>Country:</label>
                <select class="form-control form-control-sm country" name="Country">
					<option class="text-muted">--SELECT--</option>
					<option value="BD">Bangladesh</option>
                    <option value="UK">United Kingdom</option>
                </select>

				<div id="response">

				</div>

			</div>

			<div class="form-group">
				<label>Portfolio Link: </label>
				<input type="url" Name="Portfolio" class="form-control" placeholder="Put your Portfolio Link">
				<small class="form-text text-muted">[Include 'https://'. You can skip if you don't have it now, but it is good for you to represent you and your work through it! <a href="https://www.symstar.co.uk/" style="text-decoration:none;" target="_blank">Order us</a>] </small>
				<br/>
				<label>Skills: <i class="text-danger">*</i></label>
				<input type="text" Name="Skills" class="form-control" placeholder="ex- Microsoft Office, Photoshop, Quick learner, writting " required> <small class="form-text text-muted">[Put your valid and relevant skills seperated by a comma - not more than 5]</small>
				<br/>
				<label>Expertise: <i class="text-danger">**</i></label>
				<input type="text" Name="Expertise" class="form-control" placeholder="ex- Graphics Design, Web Development, Django Framework" required> <small class="form-text text-muted">[All of your skills, this is really important to be found in search, seperated by a comma - not more than 5]</small>
				<br/> 
				<label>Experience: </label>
				<input type="text" Name="Experience" class="form-control" placeholder="ex- Volunteer - UNICEF(2019-present), Graphics Designer - DIU(2018-2020)"> <small class="form-text text-muted">[Experiences including any volunteering work(Legal only) - seperated by a comma]</small>
				<br/>
				<label>Language: <i class="text-danger">*</i></label>
				<input type="text" Name="Language" class="form-control" placeholder="Languages you can read and write" required>
				<br/>
				<label>Cover Letter: </label>
				<textarea name="Cover" class="form-control" rows="3" style="width: 50%; resize: none;" placeholder="Put a cover letter to attract client - max 200 words"></textarea>
				<br/>
				<label>Resume: </label>
				<div class="form-class">
				<label>Upload Your Resume: &nbsp;</label>
				<input type="file" Name="uploadResume" accept=".pdf">
				</div>
				<small class="form-text text-muted">[Represent yourself on the best way you can, employers will look into it very carefully and may also download it.]</small> <br/>
				<br/>
				<label>Bio: </label>
				<textarea name="Bio" class="form-control" rows="2" style="width: 50%; resize: none;" placeholder="Write a beautiful Bio to describe yourself - max 120 words"></textarea>
				<br/>
				<label>Certificates: </label>
				<textarea name="Certificates" class="form-control" rows="2" style="width: 50%; resize: none;" placeholder="Certificate_Name(Certificate_Number) ex: ECH(ECC12345), CISCO Networking(CSCO123456)"></textarea>
				<small class="form-text text-muted">[Write all certificate's name if they are digitally searchable - seperated by a comma]</small>
			</div>
			
			<br/>
			<button type="submit" name="Submit" class="btn btn-primary">Submit</button>
			<a class="btn btn-danger" href="{{route('Logout')}}">Log me out</a>
		</form>

		@include('layout.copyright')

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	</body>
</html>


<?php /*

  $con = OpenConN_Usr();

  $id = mysqli_real_escape_string($con,$_GET['f']);

  $sQL = "SELECT Email FROM general WHERE Ref = '$id'";

  $RSL = mysqli_query($con,$sQL);

	if($data = mysqli_fetch_assoc($RSL)){
			   
		$EMAIL = $data['Email'];
	}


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  if (is_uploaded_file($_FILES['uploadResume']['tmp_name'])) 
  { 

  	if(empty($_FILES['uploadResume']['name']))
  	{
  		echo " File name is empty! ";
  		exit;
  	}

  	$upload_file_name = $_FILES['uploadResume']['name'];

  	if(strlen ($upload_file_name)>100)
  	{
  		echo " too long file name ";
  		exit;
  	}

	$temp = explode(".", $_FILES["uploadResume"]["name"]);
    $newfilename = $EMAIL . '.' . end($temp);
	$upload_file_name = $newfilename;

  	if ($_FILES['uploadResume']['size'] > 999900000) 
  	{
		echo " too big file ";
  		exit;        
    }

    $dest=__DIR__.'\\Profiles\\'.$EMAIL.'\\'.$upload_file_name;
    if (move_uploaded_file($_FILES['uploadResume']['tmp_name'], $dest)) 
    {
    	echo 'Resume Has Been Uploaded !';
    }
  }


}


?>


<?php 

	if(isset($_POST["Skip"])){

		   echo "<script>location='login.php';</script>";
  		   exit();

	}


	if(isset($_POST["Submit"])){

		try{

		   //$conN = OpenConN_Usr();

		   $University = $_POST['University'];
		   $City = $_POST['City'];
		   $Portfolio = $_POST['Portfolio'];
		   $Language = $_POST['Language'];
		   $Cover = $_POST['Cover'];
		   $Bio = $_POST['Bio'];
		   $Resume = $upload_file_name;
		   $Certificates = $_POST['Certificates'];
		   $Expertise = $_POST['Expertise'];
		   $Experiences = $_POST['Experience'];
		   $Social = $_POST['Social'];
		   $Skills = $_POST['Skills'];


    $SqL = "insert into features(Ref,Portfolio,Social,University,CGPA,City,Skills,Expertise,Language,Resume,Cover,Experience,Bio,Certificates) values ('".$id."','".$Portfolio."','".$Social."','".$University."','".$CGPA."','".$City."','".$Skills."','".$Expertise."','".$Language."','".$Resume."','".$Cover."','".$Experiences."','".$Bio."','".$Certificates."')";

    echo $id." ".$Portfolio." ".$Social." ".$University." ".$CGPA." ".$City." ".$Skills." ".$Expertise." ".$Language." ".$Resume." ".$Cover." ".$Experiences." ".$Bio." ".$Certificates;

	if(mysqli_query($con,$SqL)){
			   
		$sQL = "UPDATE general SET isActive = 'yes' WHERE Ref = '$id'";
  		mysqli_query($con,$sQL);

		echo "<script>alert('Congrats!');location='login.php';</script>";
		CloseConN($con);

	}

	}catch(Exception $e1){
		echo "<script>alert('Error...!!!');</script>";
		CloseConN($con);
		echo "<script>location='next.php';</script>";
	}
}
*/
?>

