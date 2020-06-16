<?php
	$newstr="";
	$s="";
	$temp="";
	$x="";
	$length="";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$s=$_POST['string'];		
	}
	
	function palindrome($s)
	{
		if(isset($_POST['string']))
		{
			$newstr = str_replace(' ', '', $s);		//to remove white space from the string
			$length = strlen($newstr); 
			$x=$newstr;
			$length = strlen($newstr); 
			for ($i = 0, $j = $length-1; $i < ($length / 2); $i++, $j--) 
			{
			$temp = $newstr[$i];
			$newstr[$i] = $newstr[$j];
			$newstr[$j] = $temp;
			}
			if($x==$newstr)
			{
				echo "<b>YES!</b> $s is a Palindrome !";
			}
			else
			{
				echo "<b>NO!</b> $s is Not a Palindrome!!";
			}
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>CHECK PALINDROME</h2>
			<form action="" method="post">
				<span id="input">ENTER THE STRING:<input type="text" name="string" placeholder="string" autofocus required><br><br></span>				
				<input type="Submit"  id='submit' value="CHECK"><br>						
			</form>
			
			<span id='output'>
			<?php palindrome($s); ?>
			</span>
			
	</body>
</html>