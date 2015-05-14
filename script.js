document.getElementById("foot01").innerHTML =
"<p>&copy;  " + new Date().getFullYear() + " JM. All rights reserved.</p>";

document.getElementById("nav01").innerHTML =
"<ul id='menu'>" +
	"<li><a href='web.html'>Home</a></li>" +
	"<li><a href='about.html'>About</a></li>" +
	"<li>"+
		"<a href='portfolio.html'>Portfolio &#9658</a>"+
			"<ul>" +
				"<li><a href='photo.html'>Photos</a></li>" +
				"<li><a href='video.html'>Videos</a></li>" +
			"</ul>" +
	"</li>"+
	"<li><a href='contact.html'>Contact Me</a></li>" +
"</ul>";
