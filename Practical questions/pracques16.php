<?php

	$n="";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$n=$_POST['num'];		
	}
	
	function fibonacci($n)
	{
		if(isset($_POST['num']))
		{
			if ($n<=0)
			{
				return 0;
			}   
			elseif($n==1)
			{
				return 1;
			}
			else
			{
				return (fibonacci($n-1) + fibonacci($n-2));
			}
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>Fibonacci Series</h2>
			<form action="" method="post">
				<span id="input">Enter number of elements of the fibonacci series to be printed:
				<input type="number" name="num" placeholder="Enter The Number of terms" autofocus required><br><br>	</span>		
				<input type="Submit" id='submit'  value="PRINT"><br>						
			</form>
			
			<span id='output'>
			<?php 
				if(isset($_POST['num']))
				{
					echo "<br> The fibonacci series is: ";
					for ($i=0; $i<$n-1; $i++)
						echo fibonacci($i).", ";
					echo fibonacci($i).".";
				}
			?>
			</span>
	</body>
</html>