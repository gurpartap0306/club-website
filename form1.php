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
		
		if(empty($_POST['email']))
		{
			$errors['email1']="*Required";
			
		}
		if(count($errors)==0)
		{
			header("Location:success1.php");
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
padding-left:250px;
padding-right:100px;
background-image:url('grd.jpg');
 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color: white;
   
}

h1{
 color:black;
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
  color: black;
  cursor: pointer;
  transition: background 0.4s linear;
}
</style><center>

<form method="post" target="">
<h2>Ground Booking Form</h2>
<label for="fname">Club Name</label>
<input type="text" name="fname" id="fname"/>
<?php if(isset($errors['fname1'])) echo $errors['fname1']; ?>
<br><br>
<label for="lname">Country    </label>
<input type="text" name="lname" id="lname"/><?php if(isset($errors['lname1'])) echo $errors['lname1']; ?>
<br><br>
<label for="age">Date           </label>
<input type="text" name="age" id="age"/><br><br>
<label for="coll">No Of Days       </label>
<input type="text" name="coll" id="coll"/><br><br>
<label for="pos">Purpose</label>
<input type="text" name="pos" id="pos"/><br><br>
<label for="pf">Name</label>
<input type="text" name="pf" id="pf"/><br><br>
<label for="pb">Designation</label>
<input type="text" name="pb" id="pb"/><br><br>
<label for="Op">Phone No</label>
<input type="text" name="Op" id="Op"/><br><br>
<label for="email">Email</label>
<input type="email" name="email" id="email"/>
<?php if(isset($errors['email1'])) echo $errors['email1']; ?>
<br><br>
<input type="submit" name="submit" id="submit">

</form>
</body>
</html>