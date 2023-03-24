<!DOCTYPE html>
<html>
<head>
<title>E-School</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/icon.png" rel="icon">
<link href="assets/css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="scripts.js"></script>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<style>
.msg-alert{
  display: none;
  position: fixed;
  left: 50%;
 -ms-transform: translate(-50%);
  transform: translate(-50%); 
  bottom:0;
  z-index: 9999;
}

.msg-alert p{
  font-family: calibri;
  border-radius: 5px 5px 0px 0px;
  padding: 5px 8px;
  font-size: 20px;
  color: white;
}
<!-- styling for the slideshow-->
.slideshow-container {
            position: absolute;
        }
        
        .dot {
            height: 15px;
            width: 15px;
            background-color: steelblue;
            border-radius: 50%;
            display: inline-block;
        }
        
        .activee {
            background-color: #717171;
        }
        
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        
        img {
            border-radius: 30px 30px 200px 200px;
        }
        
        .mySlides img {
            width: 168%;
        }
</style>
</head>

<body id="home">
	<div class="msg-alert"><p></p></div>
	<div class="cssload-loader">
	<div class="cssload-flipper">
		<div class="cssload-front"></div>
		<div class="cssload-back"></div>
	</div><br/>
	<center><span id="loading">Loading</span></center>
	</div>

	<div class="clr-switch"></div>
	<div class="bubble-1"></div>
	<div class="bubble-2"></div>
	<div class="bubble-3"></div>
	
	<div id="login-form">
	<input type="radio" id="login" name="switch" class="hide" checked>
	<div>
		<ul class="form-header">
		<li><label for="login"><i class="material-icons">lock</i> LOGIN</li>
		</ul>
	</div>

	<div class="section-out">
		<section class="login-section">
			<div class="login">
				<form id="form_login" name="form_login" action="loginn.php" method="post">
					<ul class="ul-list">
						<li><input type="email" id="log_email" name="email" required class="input" placeholder="Email Address" required="" /><span class="icon"><i class="material-icons">local_post_office</i></span></li>

						<li><input type="password" id="log_passwd" name="password" required class="input" minlength="4" maxlength="32" placeholder="Your Password" required="" /><span class="icon"><i class="material-icons">lock</i></span></li>

						<li><input type="submit" id="submit" name="submit" value="Sign in" class="btn"></li>


						<li><input type="button" value="Close" class="btn close"></li>
                        

						<span class="errorTxt"></span>
						<div id="status"></div>
					</ul>
				</form>
			</div>	<!-- login -->
		</section>

		
					
	</div>	<!-- section-out -->
	</div>	<!-- login-form -->

	<header>
		<div class="wrap-width">
		<a href="index.php">
			<div class="navbar-logo">
				<img src="images/logoE.png"/>
				<img id="hat" src="images/hat.png"/>
			</div> <!-- navbar-logo -->
		</a>
		<!--<a href="#nav"><i class="material-icons">reorder</i></a>-->
		<div class="horizontal-page-links" id="nav">

			<div class="register-user">
				<a id="login">Login</a>
				<!--<a id="register" href="#register">Register</a>-->
			</div>	<!-- register-user -->
			
			<ul>	
				<div class="sliding-out links"><li><a href="index.php">Home</a></li></div>
				<div class="sliding-out links"><li><a href="about.html">About </a></li></div>
				<div class="sliding-out links"><li><a href="contacts.html">Contact </a></li></div>
				<div class="last-navbar-link"><li></li></div>
			</ul>
			
		</div> <!-- horizontal-page-links -->
		</div>
	</header>

    <!-- slideshow -->
    <div class="container con">
        <h2>Hi, Welcome to E-School.</h2>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="assets/img/1.jpg" style="height: 150%; width: 214%;">
            </div>

            <div class="mySlides fade">
                <img src="assets/img/2.jpg" style="height: 450%; width: 214%;">
            </div>
            <div class="mySlides fade">
                <img src="assets/img/4.webp" style="height: 150%; width: 218%;">
            </div>
            <div class="mySlides fade">
                <img src="assets/img/4.avif" style="height: 450%; width: 212%;">
            </div>
            <div class="mySlides fade">
                <img src="assets/img/5.jpg" style="height: 450%; width: 257%;">
            </div>
            <div class="mySlides fade">
                <img src="assets/img/6.jpg" style="height: 450%; width: 257%;">
            </div>
        </div>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <!--javascript code for slideshow -->
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides"); //defining
                var dots = document.getElementsByClassName("dot"); //defining
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" activee", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " activee";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </div>

    <!-- service section -->
    <section class="services">
        <div class="icon-box icon-box-green">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="announcement.html"><b>Announcements</b></a></h4>
            <p><i>Find all announcements in this page.</i></p>
        </div>

        <div class="icon-box icon-box-blue">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="events.html"><b>Our events</b></a></h4>
            <p><i>Click here to view this our events</i></p>
        </div>

        <div class="icon-box icon-box-cyan">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="calendar.html"><b>Academic calender</b></a></h4>
            <p><i>Click here to view this year's academic calender.</i></p>
        </div>
    </section>
</body>

</html>