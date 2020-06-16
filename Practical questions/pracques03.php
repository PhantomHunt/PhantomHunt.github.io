<?php
	$s="";
	$sub="";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$s=$_POST['string1'];
		$sub = $_POST['string2'];
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>OPERATIONS ON STRING</h2>
			<form action="" method="post">
				<span id="input">
				ENTER THE STRING:<input type="text" name="string1" placeholder="String" autofocus required><br><br>
				ENTER THE SUB-STRING:<input type="text" name="string2" placeholder="String" required><br><br>
				</span>				
				<input type="Submit"  id='submit' value="Execute"><br>
			</form>
			
			<span id='output'>
			<?php 
			if(isset($_POST['string1'],$_POST['string2']))
			{
				$temp = $s;
				echo "Removing whitespaces<br>";
				echo "<br>Original String : $temp<br>";
				$s = str_replace(' ', '', $s);	
				echo "<br>New String : ".$s."<br>";
				
				$s = $temp;
				echo "<br><hr><br>Check for substring<br><br>";
				if(strpos($s,$sub)>=0) 
				{	
					echo $s." contains ".$sub;
				}
				else 
				{
					echo $s." doesn't contain ".$sub;
				}
				
				echo "<br><br><hr><br>Check if string is all lowercase<br>";
				echo "<br>Original String : $temp<br><br>";				
				if(preg_match("/^[a-z]+$/",$s))
				{
					echo $s." is all lowercase";
				}
				else
				{
					echo $s." is not all lowercase";
				}
				
			}
			?>
			</span>
	</body>
</html>