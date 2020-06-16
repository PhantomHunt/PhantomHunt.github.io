<?php

	$n="";
	$sum="";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$n=$_POST['num'];		
	}
	
	function sumodd($n)
	{
		if(isset($_POST['num']))
		{
			$sum=0;
			if($n<=0)
				echo "ERROR : Neither ODD nor EVEN";
			
			else
			{
				for($i=1;$i<=$n;$i++)
				{
					if($i%2!=0)
					{	$sum+=$i; }		
				}
				echo "<br>The Sum of odd numbers till ".$n." is : ".$sum;
			}	
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>Find Sum Of Odd Numbers</h2>
			<form action="" method="post">
				<span id="input">Enter number till you want to compute sum:
					<input type="number" name="num" placeholder="Enter The Number" autofocus required><br><br>	</span>			
				<input type="Submit"  id='submit' value="Find Sum"><br>						
			</form>
			
			<span id='output'>
			<?php sumodd($n); ?>
			</span>
	</body>
</html>