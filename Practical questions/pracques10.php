<?php
	$a="";
	$b="";
	$c="";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$a=$_POST['n1'];
		$b=$_POST['n2'];
		$c=$_POST['n3'];							
	}	
	
	function greatest($a,$b,$c)
	{
		if(isset($_POST['n1'],$_POST['n2'],$_POST['n3']))
		{
			$MAX=($a>$b)?$a:$b;
			$MAX=($c>$MAX)?$c:$MAX;				
			echo "<br> <b>Max of $a, $b & $c numbers is: $MAX <br>";
		}	
	}	
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>Find greatest number</h2>
			<form action="" method="post">
				<span id="input">Enter First Number:<input type="number" name="n1" placeholder=" First number" autofocus required><br><br>
				Enter Second Number:<input type="number" name="n2" placeholder=" Second number"  required><br><br>
				Enter Third Number:<input type="number" name="n3" placeholder=" Third number"  required><br><br></span>
				<input type="Submit"  id='submit' value="Find Max"><br>						
			</form>
			
			<span id='output'>
			<?php greatest($a,$b,$c); ?>
			</span>
	</body>
</html>