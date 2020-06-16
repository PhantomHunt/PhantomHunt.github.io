<?php

	$n="";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$n=$_POST['num'];		
	}
	
	function printeven($n)
	{
		if(isset($_POST['num']))
		{
			echo "<br> The even numbers till $n are : <br><br>";
			for($i=0;$i<=$n-2;$i+=2)
					echo "$i, ";
			if($i%2==0) echo "$i.";
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>Print Even Numbers</h2>
			<form action="" method="post">
				<span id="input">Enter number till which you want to print the even numbers: 
				<input type="number" name="num" placeholder="Enter The Number" 	autofocus required><br><br>	</span>		
				<input type="Submit"  id='submit' value="PRINT"><br>						
			</form>
			
			<span id='output'>
			<?php printeven($n); ?>
			</span>
	</body>
</html>