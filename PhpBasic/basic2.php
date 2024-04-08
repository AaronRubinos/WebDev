<!DOCTYPE html>
<html>
	<head>
		<title>Basic of PHP</title>
	</head>
	
	<body>
		<h1>PHP Basic Part 2</h1>
		
		<?php
			#while -loops through a block of code as the specified condition is true
			#do.. while -loops through a block of code once, and then repeats the loop as long as the 
			#		specified condition is true.
			#for -loop through a block of code a specified number of times
			#foreach -loops through a block of code for each element in an array.
			
			/*
			$x = 1;
			
			while($x <= 5)	{
				
				echo "the number is:$x <br/>";
				
				$x++;
			}
	
			
			$x = 1;
			do{
				echo "The number is: $x <br/>";
				$x++;
				
			}	while($x <= 5);
			
			
			for($x = 0; $x <=20; $x++)	{
				echo "The number is: $x <br/>";
			}
			
			
			$colors = array("red","green","blue","white");
			
			foreach($colors as $value)	{
				echo "$value <br/>";
			}
			
			#PHP break
			
			for($x = 0; $x <= 10; $x++)	{
				if($x == 4)	{
					echo "The number is exactly equal to 4";
					break;
				}
				echo "The number is: $x <br/>";
			}
			
			*/
			
			#PHP continue
			
			$x = 0;
			
			while($x < 10)	{
				if($x == 4)	{
					echo "The number is skipped here... <br/>";
					$x++;
					continue;
				}
				
				echo "The number is: $x <br/>";
			$x++;
				
			}
			
			
		?>
		
		
	</body>
</html>