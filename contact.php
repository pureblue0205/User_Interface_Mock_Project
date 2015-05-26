<!-- Author: Michael Milstead / Mode87.com
     for Untame.net
     Twitter Bootstrap Tutorial
     Modal Contact Demo, 2013
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap Modal Contact Form Demo</title>
    <meta name="description" content="Creating Modal Window with Twitter Bootstrap">

    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("input#submit").click(function(){
                $.ajax({
                    type: "POST",
                    url: "process.php", // 
                    data: $('form.contact').serialize(),
                    success: function(msg){
                        $("#thanks").html(msg)
                        $("#form-content").modal('hide');   
                    },
                    error: function(){
                        alert("failure");
                    }
                });
            });
        });
    </script>

    <style type="text/css">
        body { margin: 50px; background: url(assets/bglight.png); }
        .well { background: #fff; text-align: center; }
        .modal { text-align: left; }
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
            <li><a href="index.php">Home</a></li>
            <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="photo.html">Photography</a></li>
                <li><a href="video.html">Videography</a></li>
              </ul>
            </li>-->
            <li><a href="photo.php">Gallery</a></li>
            <li class = "active"><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav><!--end of navbar-->

<div class="container">
    <div class="well well-large">
        <h2>Twitter Bootstrap Modal Contact Form Demo</h2>
        <div id="form-content" class="modal hide fade in" style="display: none;">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Send me a message</h3>
            </div>
            <div class="modal-body">
                <form class="contact" name="contact">
                    <label class="label" for="name">Your Name</label><br>
                    <input type="text" name="name" class="input-xlarge"><br>
                    <label class="label" for="email">Your E-mail</label><br>
                    <input type="email" name="email" class="input-xlarge"><br>
                    <label class="label" for="message">Enter a Message</label><br>
                    <textarea name="message" class="input-xlarge"></textarea>
                </form>
            </div>
            <div class="modal-footer">
                <input class="btn btn-success" type="submit" value="Send!" id="submit">
                <a href="#" class="btn" data-dismiss="modal">Nah.</a>
            </div>
        </div>
        <div id="thanks"><p><a data-toggle="modal" href="#form-content" class="btn btn-primary btn-large">Modal powers, activate!</a></p></div>
    </div>
</div>

</body>
</html>
