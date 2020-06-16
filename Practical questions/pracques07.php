<form action="" method="POST" style="text-align:center">
	<input type="text" placeholder='Enter Username' autofocus required name='uname'><br>
	<input type="password" placeholder='Enter Password' required name='pass'><br><br>
	<input type="submit" name="submit">
</form>

<?php
$uname="";
$pass="";

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	
	if(isset($_POST['submit']))
	{	
		$con=mysqli_connect("localhost","root",'',"vinjit");
		$query="SELECT * FROM Q7 where uname='$uname' AND pass='$pass'";
		$result=mysqli_query($con,$query);
				
		while($record=mysqli_fetch_assoc($result)>0)
		{
			die( "WELCOME");
		}	
		echo "Invalid Username or Password";
	
	}
}
?>