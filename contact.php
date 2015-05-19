	<!doctype html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>Cole Heilborne</title>

	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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

                        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
   
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
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
