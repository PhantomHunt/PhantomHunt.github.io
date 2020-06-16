 <?php
	$s="";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$s=$_POST['arr'];		
	}
	
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>SORT THE ARRAY</h2>
			<form action="" method="post">
				<span id="input">ENTER THE ARRAY YOU WANT TO SORT:
					<input type="text" name="arr" placeholder="ARRAY" autofocus required><br><br>
				</span>		
				<input type="Submit"  id='submit' value="SORT"><br>						
			</form>
			
			<span id='output'>
			<?php 
			if(isset ($_POST['arr']))
			{
				echo "<br>Original Array : <br>";				
				$arr = explode(" ",$s);
				echo "<pre>";
				print_r($arr);
				echo "</pre>";
				echo "<br>Sorted Array : <br>";
				sort($arr);
				echo "<pre>";
				print_r($arr);
				echo "</pre>";
			}
			?>
			</span>
	</body>
</html>