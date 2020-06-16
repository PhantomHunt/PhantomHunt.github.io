<?php
	$f = <<<END
	<form action="" method="post"
		<span id="input">
			Enter birthday <input type="date" name="d" required><br><br>
		</span>
		<input type="submit" id='submit' value="Execute"><br>
	</form>
END;

	echo $f;
	if (isset($_POST["d"]))
	{
		$curr = time();
		$my_date = strtotime($_POST["d"]);
		$daysdiff = round(($my_date-$curr)/(60*60*24));
		$mul = abs(daysdiff)/365;
		echo "<br>$daysdiff   $mul<br>";
		if ($daysdiff<=0)
			$daysdiff += 365*$mul;
		if ($daysdiff>=365)
			$daysdiff %= 365;
		echo "Today is : ".date("d-m-Y",$curr)."<br>";
		echo "Birthday is : ".date("d-m-Y",$my_date)."<br>";
		echo "Number of days left : ". $daysdiff ."<br>";
		if($daysdiff==0)
		{
			echo "<br> <marquee behavior=alternate>Happy Birthday</marquee> <br>";
		}
			
	}
?>