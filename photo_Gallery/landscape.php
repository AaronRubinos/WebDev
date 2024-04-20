<!DOCTYPE hmtml>
<html>
    <head>
        <title>Photo Gallery</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/lightbox.css">
	    <script src="js/jquery.js"></script>
	    <script src="js/bootstrap.min.js"></script>
        <script src="js/lightbox.js"></script>
        <style>
            .thumbnail img{
                width: 350px;
                height: 200px;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-brand">Photo Gallery</div>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="landscape.php">Landscape Gallery</a></li>
                    <li><a href="others.php">Others</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    </div>
                    <div class="carousel slide" data-ride="carousel" id="slider">
                        <ol class="carousel-indicators">
                            <li data-target="#slider" data-slide-to="0" class="active"></li>
                            <li data-target="#slider" data-slide-to="1"></li>
                            <li data-target="#slider" data-slide-to="2"></li>
                            <li data-target="#slider" data-slide-to="3"></li>
                        </ol>
                
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="image/picture1.jpg"/>
                        </div>
                        <div class="item">
                            <img src="image/picture2.jpg"/>
                        </div>
                        <div class="item">
                            <img src="image/picture3.jpg"/>
                        </div>
                        <div class="item">
                            <img src="image/picture4.jpg"/>
                        </div>
                    </div>

                    <a href="#slider" data-slide="prev" class="left carousel-control">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#slider" data-slide="next" class="right carousel-control">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    
                    </div>
                </div>
            </div>

                <div class="page-header">
                    <h3>Photo Gallery</h3>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="image/pic1.jpg" data-lightbox="gallery" data-title="Landscape 1" class="thumbnail">
                            <img src="image/pic1.jpg">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="image/pic2.jpg" data-lightbox="gallery" data-title="Landscape 2" class="thumbnail">
                            <img src="image/pic2.jpg">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="image/pic3.jpg" data-lightbox="gallery" data-title="Landscape 3" class="thumbnail">
                            <img src="image/pic3.jpg">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="image/pic4.jpg" data-lightbox="gallery" data-title="Landscape 4" class="thumbnail">
                            <img src="image/pic4.jpg">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="image/pic5.jpg" data-lightbox="gallery" data-title="Landscape 5" class="thumbnail">
                            <img src="image/pic5.jpg">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="image/pic6.jpg" data-lightbox="gallery" data-title="Landscape 6" class="thumbnail">
                            <img src="image/pic6.jpg">
                        </a>
                    </div>
                </div>

                <footer class="navbar navbar-default navbar-fixed-bottom">
                    <div class="container">
                        <p class="text-center" style="padding: 10px;">Created by: Aaron Rubinos</p>
                    </div>
                </footer>

        </div>
            
    </body>

</html>