<!DOCTYPE html>
<html>
	<head>
		<title>Basic of PHP</title>
	</head>
	
	<body>
		<h1>PHP Basic Part 1</h1>
		
		<?php
		
			/*
			echo "Hello World";
			
			//This is a single line comment
			#This is also a single line comment

				Multiple lines 
				Multiple lines 
				Multiple lines 
				Multiple lines 
				Multiple lines 
				Multiple lines 
			
			echo "<br/>";
		
			$mytext = "Welcome to my page";
			$x = 10;
			$y = 5;
			
			echo $mytext;
			echo "<br/>";
			echo $x + $y;
			
			PHP Supprots Data types
			String
			Integer
			Float(double)
			Bolean
		
			
			$vstring = "hello";
			$vnumber = 100;
			$vfloat = 10.5;
			$vbool = true;
			
			var_dump($vstring);
			var_dump($vnumber);
			var_dump($vfloat);
			var_dump($vbool);

			
			#PHP STRING FUNCTIONS
			
			echo strlen("HELLO WOLRD");
			echo "<br/>";
			echo str_word_count("Hello World! Today");
			echo "<br/>";
			echo strrev("NEW ERA UNIVERSITY");
			echo "<br/>";
			echo strpos("Hello world!", "world");
			echo "<br/>";
			echo str_replace("world","Dolly","Hello world!");
			
			#PHP Operators
			
			#Arithmetic + - * / % **
			#Assignment x=y x+=y x-=y 
			#Comparison == === != <> !== > < >== <=
			#Increment/Decrement ++$x $x++ --$x $x--
			#Logical and or xor && || !
			#String . .= $txt1.$txt2
			#Array
			#Conditional assignment ?: ??
			
			
			#PHP if else statements 
			
			$x = 20;
			
			if($x < 20)	{
			
				echo "the values is less than 20";
			
			}elseif($x == 20){
				
				echo "the value is equal to 20";
			}else{
				echo "The value is invalid";
			}
			
			*/
			
			#PHP switch statement 
			
			$favcolor = "black";
		
			switch($favcolor){
				case "red";
					echo "You have a red t-shirt";
					break;
				
				case "blue";
					echo "You have a blue t-shirt";
					break;
					
				case "green";
					echo "You have a green t-shirt";
					break;
					
				default:
					echo "No Available Color";
			}
			
			
			
		?>
	
	</body>
</html> 
