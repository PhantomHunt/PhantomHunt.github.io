<?php
$color=array('White', 'Green', 'Red');
//sort($color);
?>


<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>Print COLORS</h2>
			<form action="" method="post">
				<span id="input">Select The Colors:
					<select name="dropdown">
						<option>SELECT COLORS</option>
						<?php 
							$i=1;
							foreach($color as $colours)
							{
								echo "<option value=\"$i\">$colours</option>";
								$i++;
							}
						?>
					</select>
					<input type="Submit" id="submit" value="Color"><br>					
				</span>
			</form>
			<?php
				if(isset($_POST["dropdown"]))
				{
					switch ($_POST["dropdown"])
					{
						case "1": echo '<h3 style = "color: white;" > White </h3>';
								break;
						case "2": echo '<h3 style = "color: green;" > Green </h3>';
								break;
						case "3": echo '<h3 style = "color: red;" > Red </h3>';
								break;
					}
				}
			?>
	</body>
</html>
