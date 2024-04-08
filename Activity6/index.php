<!DOCTYPE html>
<html>
<head>
	<title>Scroll Spy</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style>
			section{
				width: 100vw;
				height: 100vw;
				padding-top: 50px;
			}
			
			h1{
				padding: 0;
				margin: 0;
			}
		</style>
		
</head>

<body data-spy="scroll" data-target=".navbar">
	<nav class="navbar navbar-default navbar-fixed-top">
		<ul class="nav navbar-nav">
			<li><a href="#home">Home</a></li>
			<li><a href="#about">About Us</a></li>
			<li><a href="#product">Products</a></li>
			<li><a href="#contact">ContactUs</a></li>
		</ul>
	</nav>
	
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<ul class="nav navbar-nav">
			<li><a href="#home">Home</a></li>
			<li><a href="#about">About Us</a></li>
			<li><a href="#product">Products</a></li>
			<li><a href="#contact">ContactUs</a></li>
		</ul>
	</nav>	

	<section id="home" style="background: green;">
		<h1>Home</h1>
	</section>
	
	<section id="about" style="background: blue;">
		<h1>About Us</h1>
	</section>
	
	<section id="product" style="background: red;">
		<h1>Products</h1>
	</section>
	
	<section id="contact" style="background: gray">
		<h1>Contact Us</h1>
	</section>

</body>


</html>