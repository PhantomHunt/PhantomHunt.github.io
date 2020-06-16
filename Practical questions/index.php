<!DOCTYPE HTML>
<html>
	<head>
		<title>KMV STUDENTS LAB</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<div id="header">
		<span>KMV Students Lab</span>
			<ul>
				<div><li><a href="index.php">Home</a></li></div>
				<div><li><a href="index.php">Login</a></li></div>
				<div><li><a href="index.php">FAQ</a></li></div>
				<div><li><a href="index.php">Contact Us</a></li></div>
			</ul>
		</div>		
		
		<div id="ldiv">			
			<ul>
				<li><a href="index.php?id=01">Ques 1</a></li>
				<li><a href="index.php?id=02">Ques 2</a></li>
				<li><a href="index.php?id=03">Ques 3</a></li>
				<li><a href="./?id=04">Ques 4</a></li>
				<li><a href="./?id=05">Ques 5</a></li>
				<li><a href="./?id=06">Ques 6</a></li>
				<li><a href="./?id=07">Ques 7</a></li>
				<li><a href="./?id=08">Ques 8</a></li>
				<li><a href="./?id=09">Ques 9</a></li>
				<li><a href='./?id=10'>Ques 10</a></li>
				<li><a href='./?id=11'>Ques 11</a></li>
				<li><a href='./?id=12'>Ques 12</a></li>
				<li><a href='./?id=13'>Ques 13</a></li>
				<li><a href='./?id=14'>Ques 14</a></li>
				<li><a href='./?id=15'>Ques 15</a></li>
				<li><a href='./?id=16'>Ques 16</a></li>
				<li><a href='./?id=17'>Ques 17</a></li>
			</ul>
		</div>
			
		<div id="rdiv">
			<?php 
				if(isset($_GET['id']))
				{
					$a = $_GET['id'];
					include("pracques$a.php");
				}
				
				else
					include("default.php");
			?>
		</div>
			
		<div id="footer">
			Copyright &copy; Vinjit
		</div>
	</body>
</html>