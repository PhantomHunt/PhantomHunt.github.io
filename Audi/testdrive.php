<?php
	$stateind=array('Andhra Pradesh' , 'Arunachal Pradesh', 'Assam' , 'Bihar' , 'Chhattisgarh' , 'Goa' , 'Gujarat',
	'Haryana' , 'Himachal Pradesh' , 'Jammu and Kashmir' , 'Jharkhand' , 'Karnataka' , 'Kerala' , 'Madhya Pradesh',
	'Maharashtra' , 'Manipur' , 'Meghalaya' , 'Mizoram' , 'Nagaland' , 'Odisha' , 'Punjab' , 'Rajasthan' , 'Sikkim',
	'Tamil Nadu' , 'Telangana' , 'Tripura' , 'Uttar Pradesh' , 'Uttarakhand' , 'West Bengal' , 'Andaman and 
	Nicobar Islands' , 'Dadar and Nagar Haveli' , 'Daman and Diu' , 'New Delhi' , 'Lakshadweep' , 'Puducherry');
?>

<html>

 
 <head>
 <title>
	AUDI
</title>
		<link rel="stylesheet" type="text/css" href="style3.css"/>
 </head>

<body>

<form action="" method="POST">
	<table id="table">
		<tr>
			<td>ENTER YOUR NAME</td>
			<td><input type='text' name='name' autofocus required placeholder="NAME"></td>
		</tr>
		
		<tr>
			<td>ENTER YOUR ADDRESS</td>
			<td><textarea placeholder="YOUR ADDRESS" name=add></textarea></td>
		</tr>
		
		<tr>
			<td>ENTER YOUR AGE</td>
			<td><input type='number' name='age' min=19 required placeholder="AGE"></td>
		</tr>
		
		<tr>
			<td>ENTER YOUR PHONE NUMBER</td>
			<td><input type='number' name='ph' required placeholder="PHONE NUMBER"></td>
		</tr>
		
		<tr>
			<td>ENTER YOUR GENDER</td>
			<td><input type="radio" name=gender value=male required><b>MALE</b>
			<input type="radio" name=gender value=female required><b>FEMALE</b></td>
		</tr>
		
		<tr>
			<td>SELECT YOUR CITY</td>
			<td><input type="text" name=state list="states" placeholder="SELECT STATE"></td>
					<datalist id="states">			<!-- for suggestions -->							
						<?php													
							foreach($stateind as $st)
							echo "<option>$st</option>";												
						?>			 
					</datalist>
		</tr>
		
		<tr>
			<td>ENTER YOUR EMAIL:</td>
			<td><input type="email" name="email" placeholder="ENTER YOUR EMAIL ID" required></td>
		</tr>
		
		<tr><td  colspan=2><input type=reset></td></tr>
		<tr><td  colspan=2><input type=submit name=submit></td></tr>
	</table>	
	</form>
	<?php
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			if(isset($_POST['submit']))
			{
				echo "TEST DRIVE BOOKED SUCCESSFULLY!!";
			}
		}
	?>

</body>
</html>
		
		
