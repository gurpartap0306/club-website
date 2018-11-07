<html>
<head><title>Main form</title></head>
<body>
<?php
		
if(isset($_POST['submit']))
	
	{
			
		$conn=mysqli_connect("localhost","root","","data");
	
		if(!$conn)
			
			die("Connection failed: ".mysqli_connect_error());

		$email=$_POST['email'];
			
		$pass=$_POST['password'];			
		$sql="INSERT INTO `data`.`loginform`(`User`,`Pass`) VALUES ('$email','$pass')";
	
		if(mysqli_query($conn,$sql))
		
		
		mysqli_close($conn);
	
	}
	
	?>
<style>
body{

padding:200px;
padding-left:550px;
padding-right:550px;
background-image:url('jc.jpg');
 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color: #e7e7e7;
   
}
input[type="submit"]{
   background: black;
   top: 1000%;  
  border: 20px;
  width: 250px;
  height: 60px;
  padding : 12px 19px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.4s linear;
}
</style>
<div class="login">


<a href="form.php"><input type="submit" value="Registration" name="Registration" id="submit"></a><br><br><br>

<a href="third.php"><input type="submit" value="About Club" name="About Club" id="submit"></a><br><br><br>

<a href="form1.php"><input type="submit" value="Ground Booking" name="Ground Booking" id="submit"></a><br><br><br>
</form>
</div>
</body>
</html>