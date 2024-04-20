<!DOCTYPE html>
<html>
    <head>
        <title>My Blog</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stylekoto.css">
	    <script src="js/jquery.js"></script>
	    <script src="js/bootstrap.min.js"></script>
    
    </head>

    <body style="background: silver;">
        <nav class="navbar navbar-custom">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">THE BLOG</a>
                </div>

                <div class="nav navbar-nav form-inline navbar-right" style="padding:10px">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                        </div>    
                    </div>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="post.php">Post</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>

        <header style="background: url(images/header.jpg);">
            <div class="text-center">
                <h1>The Blog</h1>
                    <div class="lead">Welcome to My Blog</div>
            </div>
        </header>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="post">
                    <h1><a href="#">My Topic on my Blog</a></h1>
                    <p class="lead">It goes like this...</p>
                    <p>19-April-2024</p>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt odio 
                        ut ante lacinia porttitor. Duis in tellus ut ipsum dapibus scelerisque non vitae lacus. 
                        Integer eleifend viverra nibh, at egestas erat luctus tincidunt. Maecenas et faucibus nisi. 
                        Nulla id magna molestie, lacinia mi non, lobortis sem. Nam venenatis ipsum ac eros molestie 
                        rhoncus. Donec accumsan hendrerit eros at rhoncus. Phasellus a ultricies sem.
                    <br/><br/>
                    <img src="images/blogpic.png" class="img-thumbnail">
                    <br/><br/>
                        Ut non aliquam lacus, volutpat volutpat ex. Nulla felis ipsum, luctus ut ligula vel, 
                        vestibulum feugiat justo. Phasellus lacinia maximus arcu, in dictum urna dapibus ac. 
                        Suspendisse id ultrices ex, ut rutrum risus. Aliquam erat volutpat. Donec vitae sodales 
                        ligula. Ut turpis nisl, ultrices eget leo a, rutrum ornare orci. Ut feugiat dui sit amet 
                        porttitor dapibus. Pellentesque venenatis ut turpis eget consectetur. Quisque at imperdiet 
                        augue.
                    </p>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <ul class="nav navbar-nav nav-mycenter">
                <li><a href="#">Home</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">Nature</a></li>
            </ul>
        </div>

    </body>

</html>