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

    $(document).ready(function () {
    $("input#submit").click(function(){
        $.ajax({
            type: "POST",
            url: "process.php", //process to mail
            data: $('form.contact').serialize(),
            success: function(msg){
                $("#thanks").html(msg) //hide button and show thank you
                $("#form-content").modal('hide'); //hide popup  
            },
            error: function(){
                alert("failure");
            }
        });
    });
});

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
            <li><a href="about.php">About</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav><!--END OF NAVBAR-->

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
            
    </script> 
    <footer id="foot01"></footer>
    <script type="text.javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="./script.js"></script>
    </body>
    </html>
