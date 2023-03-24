<?php include_once('config.php');

$admission_no = $_POST['admission_no'];
$admission_no = stripcslashes($admission_no);
$admission_no = mysqli_real_escape_string($connection, $admission_no);

$sql = "SELECT * from results where admission_no='$admission_no'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);


if ($count == 1){
    $subject= $_POST['subject'];
    $points= $_POST['points'];
    $grade= $_POST['grade'];  
    $sql = "INSERT INTO results (subject, points, grade) VALUES('$subject', '$points', '$grade')";
if ($connection->query($sql)=== TRUE){
    echo "<script>alert('Results updated successfully');</script>";
}
else{
    "Error: ".$sql. "<br>".$connection->error;
}
    


$connection->close();
}
?>
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
        body {
    font-family: "Open Sans", sans-serif;
    height: 100%;
}
body {
    background: #FFFFFF;
    height: 100%;
}
img {
    max-width: 100%;
}
ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
a {
    text-decoration: none;
}
#header {
    float: left;
    width: 100%;
    background: #ffffff;
    position: relative;
}
.white-label {
    float: left;
    background: #33373B;
    max-width: 210px;
    padding: 10px;
    min-height: 44px;
    background: #279BE4;
    width: 100%;
    max-height: 44px;
}
.white-label img {
    max-height: 43px;
}
.header-nav {
    min-height: 64px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    background: #279BE4;
}
.menu-button {
    float: left;
    font-size: 29px;
    color: #fff;
    padding: 12px 19px;
}
.nav ul {
    height: 64px;
    float: right;
}
.nav ul li {
    float: left;
    position: relative;
    padding: 11px;
}
.nav > ul > li:first-child {
    border-left: none;
}
.nav ul li a {
    color: #fff;
    padding: 1px;
    float: left;
}
.nav ul li i {
    color: #fff;
}
.nav ul li:hover {
    background: #01A9F0;
    color: #fff;
}
.user-profile {
    float: right;
}
.user-profile > div {
    float: left;
    padding: 20px 8px;
    position: relative;
}
.user-profile i {
    font-size: 1.2em;
    color: #5F6F86;
}
.user-profile i:hover {
    color: #397AC5;
}
.font-icon i:after {
    position: absolute;
    content: "3";
    background: #E74C3C;
    color: #fff;
    font-size: 12px;
    border-radius: 50%;
    width: 10px;
    height: 10px;
    padding: 3px 4px 4px 3px;
    text-align: center;
    top: 12px;
    right: 11px;
}
.font-icon {
    padding: 8px 10px;
}
.font-icon i {
    font-size: 24px;
}
.nav-mail .font-icon i:after {
    background: #2ECC71;
}
div.user-image {
    padding: 9px 5px;
    margin: 0 5px;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
}
.nav-profile {
    background: #0274BD;
}
.nav-profile-image img {
    width: 39px;
    height: 41px;
    border-radius: 50%;
    float: left;
}
.nav-profile-name {
    float: right;
    margin: 11px 7px 8px 14px;
    color: #fff;
}
.nav-profile-name i {
    padding: 0 0 0 11px;
}
.nav-chat i:after {
    display: none;
}
#sidebar {
    overflow: hidden;
    width: 210px;
    height: 100%;
    float: left;
    background: #2A2D33;
}
#sidebar-nav {
    width: 106%;
    height: calc(100% - 95px);
    padding: 0;
    background: #2A2D33;
    border-right: 1px solid #E0E0E0;
    overflow-y: scroll;
}
#sidebar-nav h2 {
    color: #60636B;
    float: left;
    width: 100%;
    font-size: 0.8em;
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
    text-transform: uppercase;
    padding: 3px 0 2px 20px;
    border-top: 1px solid #4D4C4C;
    box-sizing: border-box;
    margin: 10px 0;
}
#sidebar-nav ul {
}
#sidebar-nav ul li {
}
#sidebar-nav ul li a {
    color: #C2C2C2;
    font-size: 0.95em;
    padding: 15px 20px;
    float: left;
    width: 100%;
    font-weight: 600;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
#sidebar-nav ul li:hover a,
#sidebar-nav ul li:hover a i,
#sidebar-nav li.active a,
#sidebar-nav li.active a i {
    color: #333;
}
#sidebar-nav ul li:hover a {
    background: gray;
    color: white;
}
#sidebar-nav ul li.active a {
    background: gray;
    color: white;
}
#sidebar-nav ul li.active a i {
    background: gray;
}
#sidebar-nav i {
    padding-right: 8px;
    font-size: 1.3em;
    color: #60636B;
    width: 25px;
    text-align: center;
    
}
#content {
    float: left;
    width: calc(100% - 210px);
    height: 100%;
    word-wrap: break-word;
    background: #FFFFFF;
    font-family: Raleway, sans-serif;
}
::-webkit-scrollbar {
    width: 12px;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
}
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
}
.content {
    float: left;
    background: #E9EEF4;
    width: 100%;
    height: calc(100% - 64px);
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.content-header {
    background: #fff;
    float: left;
    width: 100%;
    margin-bottom: 15px;
    padding: 15px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border-bottom: 1px solid #ccc;
}
.content-header h1 {
    margin: 0;
    font-weight: normal;
    padding-bottom: 5px;
}
.content-header p {
    margin: 0;
    padding-left: 2px;
}
.widget-box {
    background: #fff;
    border: 1px solid #E0E0E0;
    float: left;
    width: 100%;
    margin: 0 0 15px 15px;
}
.widget-header {
    background: #151616;
}
.widget-header h2 {
    font-size: 15px;
    font-weight: normal;
    margin: 0;
    padding: 11px 15px;
    color: #F9F9F9;
    display: inline-block;
}
.sample-widget {
    max-width: 47%;
}
.widget-box .fa-cog {
    float: right;
    color: #fff;
    margin: 11px 11px 0 0;
    font-size: 20px;
}
</style>
</head>
<body>

<header class="cd-main-header">
		<a href="profile.php" class="cd-logo"><img src="images/logoE.png" alt="Logo"></a>
					<div class=".nav-profile-name">
                        
                    </div>
                    <div class="sliding-out links">
                        <li>
                        <a href="settings.php">Edit Account</a>
                    </li>
                    </div>
						<div class="register-user">
				<a id="login" href="logout.php">Logout</a>
			</div>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

<section id="sidebar">
<div class="white-label">
</div>
<div id="sidebar-nav">
			<ul>
<li class="active"><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul><li>
					<a href="adminInfo.php"><i class="perm_identity"></i>Profile</a>
				</li>
                <ul>
<li><a href="#"><i class="fas fa-comment-dots"></i>Messages</a></li>
<li><a href="addannouncement.php"><i class="fa fa-list-alt"></i>Announcements</a></li>
</ul>
<ul>
<li><a href="addfeestructure.php"><i class="fa fa-dollar"></i>Fee Structure</a></li>
<li><a href="editresults.php"><i class="fa fa-download"></i>Results</a></li>
<li><a href="editreport.php"><i class="fa fa-book"></i>Report</a></li>
</ul>


</ul>
</div>
</section>
        
    </div>
</body>

</html>