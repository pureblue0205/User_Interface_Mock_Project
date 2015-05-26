	<!doctype html>

	<html>
	<head>
	<meta charset="UTF-8">
	<title>Cole Heilborn</title>

	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<link type="text/css" href="site.css" rel="stylesheet">


	<meta name="description" content="Sharing My Love For Cycling">
	<meta name="keywords" content="Photography, Cycling, Bycicles, Roadbike, Washington">
	<style type="text/css">

	</style>
	</head>

	<body>

	<!--START OF NAVBAR-->
	 <nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Cole Heilborn Photography</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="index.php">Home</a></li>
	        <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="photo.html">Photography</a></li>
	            <li><a href="video.html">Videography</a></li>
	          </ul>
	        </li>-->
	        <li><a href="photo.php">Gallery</a></li>
	        <li><a href="about.php">About</a></li>
	        <li><a href="contact.php">Contact</a></li>
	      </ul>
	    </div>
	  </div>
	</nav><!--END OF NAVBAR-->

	<!--CAROUSEL-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="land01.jpg" alt="First slide">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Lorem ipsum dolor sit amet, velit movet eum et, atomorum mandamus abhorreant pri ut.</h1>
                    <p>Lorem ipsum dolor sit amet, velit movet eum et, atomorum mandamus abhorreant pri ut.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="land02.jpg" alt="Second slide">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Lorem ipsum dolor sit amet, velit movet eum et, atomorum mandamus abhorreant pri ut.</h1>
                    <p>Lorem ipsum dolor sit amet, velit movet eum et, atomorum mandamus abhorreant pri ut.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="land03.jpg" alt="Third slide">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Lorem ipsum dolor sit amet, velit movet eum et, atomorum mandamus abhorreant pri ut.</h1>
                    <p>Lorem ipsum dolor sit amet, velit movet eum et, atomorum mandamus abhorreant pri ut.</p>
                    <p><a class="btn btn-lg btn-success" href="photo.php" role="button">View More</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> <!--END OF CAROUSEL-->


<!-- Trigger the modal with a button -->
<div class= "container text-center">
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
</div> 

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form class="contact" name="contact">
                    <label class="label" for="name" color="black">Your Name</label><br>
                    <input type="text" name="name" class="input-xlarge"><br>
                    <label class="label" for="email" color="black">Your E-mail</label><br>
                    <input type="email" name="email" class="input-xlarge"><br>
                    <label class="label" for="message" color="black">Enter a Message</label><br>
                    <textarea name="message" class="input-xlarge"></textarea>
                </form>
      </div>
      <div class="modal-footer">
        <input class="btn btn-success" type="submit" value="Send!" id="submit">
        <a href="#" class="btn" data-dismiss="modal">Nah.</a>
      </div>
    </div>
    	<div id="thanks"><p><a data-toggle="modal" href="#form-content" class="btn btn-primary btn-large">Contact Us</a></p></div>
  </div>
</div>

			 
	</script> 
	<footer id="foot01"></footer>
	<script type="text.javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="./script.js"></script>
	</body>
	</html>
