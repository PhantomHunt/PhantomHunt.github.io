<?php
	$a="";
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$a=$_POST['n1'];
									
	}	
	
	function factorial($a)
	{
		if(isset($_POST['n1']))
		{
			if($a==0)
				return 0;
			
			elseif($a==1)
				return 1;
				
			elseif($a<0)
			{
				echo"<br><b>ERROR:Factorial of NEGATIVE number can't be computed";
				exit();
			}
				
			else
				return $a*factorial($a-1);
		}	
	}	
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>Find Factorial</h2>
			<form action="" method="post">
				<span id="input">Enter Number Whose Factorial You Wish To Compute:
					<input type="number" name="n1" placeholder="Enter the number" autofocus required><br><br>	</span>			
				<input type="Submit"  id='submit' value="Find Factorial"><br>						
			</form>
			
			<span id='output'>
			<?php 
				if(isset($_POST['n1']))
				{
					echo "<br><b>FACTORIAL of " .$a. " is : ".factorial($a)."<br>";
				}
			?>
			</span>
	</body>
</html>