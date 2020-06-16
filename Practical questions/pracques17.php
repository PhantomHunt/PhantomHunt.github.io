<?php
	$n="";
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$n=$_POST['n1'];									
	}	
	
	function Pattern($n)
	{
		echo "<br> Number of lines = $n <br><br>";
		for($i=$n;$i>=1;$i--)
		{
			for($j=$n;$j>=$i;$j--)
			{
				echo "* ";
			}
			echo "<br>";
		}
	}

	
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>STAR PATTERN</h2>
			<form action="" method="post">
				<span id="input">
				Enter Number of Rows :<input type="number" name="n1" placeholder="Rows" autofocus required><br><br>	</span>		
				<input type="Submit" id='submit'  value="Print Pattern"><br>						
			</form>
			
			<span id='output'>
			<?php 
				if(isset($_POST['n1']))
				{
					echo "<b>".pattern($n);
				}
			?>
			</span>
	</body>
</html>