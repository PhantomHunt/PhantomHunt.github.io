	<?php
		$language=array('Hindi','Spanish','Urdu','Malayalam','Tamil','French','German','Punjabi');
	?>
		<h2>Translate Hello</h2>
			<form action="" method="post">
				<span id="input">Select language:
					<select name="lang" onchange="form.submit()">
						<option value="0" selected disabled>SELECT LANGUAGE</option>
						<?php 
							$i=1;
							foreach($language as $lang)
							{
								echo "<option value=$i>$lang</option>";
								$i++;
							}
						?>
					</select>
				</span>
			</form>		
			
				<span id='output'>
					<?php
						$x=$_POST['lang'];
						switch($x)
						{
							case 1:
								echo "नमस्ते";
								break;
							
							case 2:
								echo "HOLA";							
								break;
								
							case 3:
								echo "ہیلو";							
								break;
								
							case 4:
								echo "ഹലോ";							
								break;
								
							case 5:
								echo "வணக்கம்";							
								break;
								
							case 6:
								echo "Bonjour";							
								break;
								
							case 7:
								echo "Hallo";							
								break;
								
							case 8:
								echo "ਸਤ ਸ੍ਰੀ ਅਕਾਲ";							
								break;							
						}	
					?>
					
				</span>
	