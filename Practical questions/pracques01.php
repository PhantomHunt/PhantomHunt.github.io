<?php

	$s="";
	$temp="";
	$length="";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$s=$_POST['string'];		
	}
	
	function revstr($s)
	{
		if(isset($_POST['string']))
		{
			/*$length = strlen($s); 
			for ($i = 0, $j = $length-1; $i < ($length / 2); $i++, $j--) 
			{
				$temp = $s[$i];
				$s[$i] = $s[$j];
				$s[$j] = $temp;
			}*/
			$s=strrev($s);
			return $s;
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>REVERSE THE STRING</h2>
			<form action="" method="post">
				<span id="input">ENTER THE STRING:</span><input type="text" name="string" placeholder="string" autofocus required><br><br>				
				<input type="Submit"  id='submit' value="Reverse the string"><br>						
			</form>
			
			<span id='output'>
			<?php 
			if(isset ($_POST['string']))
			{
				echo "<br>Original String : $s<br>";				
				echo "<br>Reversed String : ".revstr($s)."<br>";
			}
			?>
			</span>
	</body>
</html>