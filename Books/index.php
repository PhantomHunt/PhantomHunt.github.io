<html>    
    <head>        
        <title>    BOOKERS STOP       </title>        
        <link rel="stylesheet" type="text/css" href="styles.css"/>    
    </head>    
    <body>	
        <div id = "header">
		
			<a href="index.php?id=7"><img src="pa.jpeg"  style="width:100px;height:100px;"></a>
			
            <h1>BOOKERS STOP</h1>
			
		</div>
		
		<div id="nav">
			<ul>		
				<li><a href="index.php?id=9">Latest Releases</a></li>
				<li><a href="index.php?id=7">Author</a> </li>
				<li><a href = "index.php?id=0">Home</a></li>
			</ul>	
		</div>		
		
        <div id = "ldiv">
            <h2>BOOKS</h2>
            <ul>
                <li>
					<a href="index.php?id=0">HOME </a>
                    <br><br>
                    <a href="index.php?id=1">ELEVEN MINUTES </a>
                    <br><br>
					<a href="index.php?id=2">THE ALCHEMIST </a>
                    <br><br>                    
                    <a href="index.php?id=3">THE DEVIL AND MISS PRYM</a>
                    <br><br>
                    <a href="index.php?id=4">THE WITCH OF PORTOBELLO</a>
                    <br><br>
                    <a href="index.php?id=5">THE ZAHIR</a>
                    <br><br>
					<a href="index.php?id=6">THE WINNER STANDS ALONE</a>
                    <br><br>
					<a href="index.php?id=8">THE PILGRIMAGE</a>
                    <br><br>
                    <a href="index.php?id=9">ADULTERY</a>
                    <br><br>
                </li>
            </ul>
        </div>

        <div id = "rdiv">
            <?php
                if(isset($_GET['id']))
                {
                    $a = $_GET['id'];
					
                    if($a == 0)
                        include ("home.php");
					
					elseif($a == 1)
                        include ("ElevenMinutes.php");
						
                    elseif($a == 2)
                        include ("ALCHEMIST.php");
						
                    elseif($a == 3)
                        include ("thedevil.php");
						
                    elseif($a==4)
                        include ("witch.php");
						
                    elseif($a == 5)
                        include ("zahir.php");
						
                    elseif($a == 6)
                        include ("winner.php");
						
                    elseif($a == 7)
                        include ("paulo.php");
						
					elseif($a == 8)
						include ("pilgrimage.php");
						
					else if($a == 9)
						include ("adultery.php");
                }
                else 
                    include ("home.php");
            ?>
        </div>

        <div id = "footer">
            Copyright &copy; Vinjit
        </div>

    </body>
</html>
