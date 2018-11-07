<?php
if($_POST)
{
		$errors=array();
		if(empty($_POST['fname']))
		{
			$errors['fname1']="*Required";
			
		}
		if(empty($_POST['lname']))
		{
			$errors['lname1']="*Required";
			
		}
		if(empty($_POST['dob']))
		{
			$errors['dob1']="*Required";
			
		}
		if(empty($_POST['email']))
		{
			$errors['email1']="*Required";
			
		}
		if(count($errors)==0)
		{
			header("Location:success.php");
			exit();
		}
		
}
?>

<html>
<head><title>Register To JFC</title></head>
<body>
<style>
body{

padding:50px;
padding-left:150px;
padding-right:450px;
background-image:url('2018.jpg');
 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color: #e7e7e7;
   
}

h1{
 color:white;
}
input{
 width:350px;
 height:30px;
}
input[type="submit"]{
   background: #3399ff;
  border: 0;
  width: 250px;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.4s linear;
}
</style><center>

<form method="post" target="">
<h2>Registration Form</h2>
<label for="fname">First Name</label>
<input type="text" name="fname" id="fname"/>
<?php if(isset($errors['fname1'])) echo $errors['fname1']; ?>
<br><br>
<label for="lname">Last Name    </label>
<input type="text" name="lname" id="lname"/><?php if(isset($errors['lname1'])) echo $errors['lname1']; ?>
<br><br>
<label for="age">Age           </label>
<input type="text" name="age" id="age"/><br><br>
<label for="coll">College       </label>
<input type="text" name="coll" id="coll"/><br><br>
<label for="pos">Position</label>
<input type="text" name="pos" id="pos"/><br><br>
<label for="pf">Preferred Foot</label>
<input type="text" name="pf" id="pf"/><br><br>
<label for="pb">Previous Club</label>
<input type="text" name="pb" id="pb"/><br><br>
<label for="Op">Other Position</label>
<input type="text" name="Op" id="Op"/><br><br>
<label for="team">Team</label>
<input type="text" name="team" id="team"/><br><br>
<label for="dob">Date of birth</label>
<input type="text" name="dob" id="dob"/><?php if(isset($errors['dob1'])) echo $errors['dob1']; ?>
<br><br>
<label for="contact">Contact No</label>
<input type="text" name="contact" id="contact"/><br><br>
<label for="email">Email</label>
<input type="email" name="email" id="email"/>
<?php if(isset($errors['email1'])) echo $errors['email1']; ?>
<br><br>
<input type="submit" name="submit" id="submit">

</form>
</body>
</html>