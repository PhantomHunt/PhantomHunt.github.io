<?php
	$a="";
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$a=$_POST['n1'];
									
	}	
	
	function prime($a)
	{
		if(isset($_POST['n1']))
		{
			if($a==0||$a==1)
				echo "<br><b>".$a." is neither Prime nor Composite";
			
			elseif($a<0)
			{
				echo "<br><b>ERROR : NEGATIVE NUMBER";
				exit();
			}
			
			elseif($a==2)
				echo "<br><b>2 is a prime number";
				
			else
			{
				$flag=0;
				for($i=2; $i<$a; $i++)
					if($a%$i==0)
					{						
						$flag++;
						break;
					}
				
				
				if($flag==0)
					echo "<br> <b> $a is a Prime Number";
				else
					echo "<br> <b> $a is a Composite Number";
			}
		}	
	}	
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>CHECK PRIME</h2>
			<form action="" method="post">
				<span id="input">Enter The Number You Wish To Check : 
				<input type="number" name="n1" placeholder="Enter the number" autofocus required><br><br></span>			
				<input type="Submit"  id='submit' value="Check Prime"><br>						
			</form>
			
			<span id='output'>
			<?php 
				if(isset($_POST['n1']))
				{
					prime($a);
				}
			?>
			</span>
	</body>
</html>