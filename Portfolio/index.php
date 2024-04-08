<!DOCTYPE html>
<html>
<head> 
	<title>Portfolio</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style>
			section{
				width: 100vw;
				height: 100vw;
				padding: 50px;
			}
			.cl_white{
				color: white;
			}
			img{
				width: 300px;
				transition: opacity is ease-in-out;
			}
			img:hover{
				opacity: .10;
			}
			.col-text{
				-webkit-column-count: 3;
			}

					
		</style>
</head>

<body data-spy="scroll" data-target=".navbar"> 
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<ul class="nav navbar-nav">
			<li><a href="#home">Home</a></li>
			<li><a href="#work">What I Do</a></li>
			<li><a href="#about">What About Me</a></li>
			<li><a href="#contact">Contact Me</a></li>
		</ul>
	</nav>
	<section id="home" style="background: url(image/header.png); background-size: 100% 100%;" class="cl_white text-center">
		<h1>My Portfolio</h1>
		<p class="lead">Welcome to my world, The life of a Programmer</p>
		<button class="btn btn-default">Contact Me</button>
	</section>
				
	<section id="work" class="container">
		<div class="page-header">
			<h1 class="text-center">My Work</h1>
		</div>			
			<div class="text-center">
				<img src="image/work1.jpg" class="img-thumbnail">	
				<img src="image/work2.jpg" class="img-thumbnail">	
				<img src="image/work3.jpg" class="img-thumbnail">	
				<img src="image/work4.jpg" class="img-thumbnail">	
				<img src="image/work5.jpg" class="img-thumbnail">	
				<img src="image/work6.jpg" class="img-thumbnail">	
			</div>
	</section>

	<section id="about" class="container">
		<h2 class="text-center">My Skills</h2>
			<div class="col-text">
			But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a 
			complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of 
			human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not 
			know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves 
			or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil 
			and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, 
			except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has 
			no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
			</div><br/>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>PHP Programmer</h4>
					</div>
					<div class="panel-body">
						<img src="image/me.jpg" class="img-circle center-block">
						<p class="lead text-center">I Do PHP Programming</p>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>Web Designer</h4>
					</div>
					<div class="panel-body">
						<img src="image/me2.jpg" class="img-circle center-block">
						<p class="lead text-center">I Do CSS Bootstrap Designing</p>
					</div>
						<div class="panel-footer"></div>
				</div>
			</div>
		</div>
	</section>

	<section id="contact" style="background: silver;">
		<div class="page-header">
			<h2 class="text-center">Contact Me</h2>
		</div>

		<form class="col-md-5 col-md-offset-4">
			<div class="form-group">
				<input class="form-control" placeholder="Enter Your Name" type="text">
			</div>
			<div class="form-group">
				<input class="form-control" placeholder="Enter Your E-mail" type="email">
			</div>
			<div class="form-group">
				<input class="form-control" placeholder="Subject" type="text">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="10">Comments</textarea>
			</div>
			<div class="form-group">
				<input class="btn btn-success btn-block" type="submit">
			</div>
		</form>
	</section>

</body>
</html>