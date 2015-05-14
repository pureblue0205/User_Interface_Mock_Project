	<!doctype html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>Cole Heilborne</title>

	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="./js/jqBootstrapValidation.js"></script>
	  <script type="text/javascript" src="contact_form.js"></script>

	<!--SITE STYLING-->
	<link type="text/css" href="site.css" rel="stylesheet">

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
	        <li><a href="index.php">Home</a></li>
	        <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="photo.html">Photography</a></li>
	            <li><a href="video.html">Videography</a></li>
	          </ul>
	        </li>-->
	        <li><a href="photo.php">Gallery</a></li>
	        <li><a href="about.php">About</a></li>
	        <li class ="active"><a href="contact.php">Contact</a></li>
	      </ul>
	    </div>
	  </div>
	</nav><!--end of navbar-->

	<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="name" name="name" type="text" placeholder="Name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" required>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" 
									placeholder="Enter your massage for us here." rows="7" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .header {
        color: dimgray;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: dimgray;
    }
</style>

			 
	</script> 
	</div>
	<footer id="foot01"></footer>
	</div>
	</div>
	<script type="text.javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="./js/jqBootstrapValidation.js"></script>
	<script type="text/javascript" src="contact_form.js"></script>
	</body>
	</html>
