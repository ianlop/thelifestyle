<?php

require '../Filebase/vendor/autoload.php';
session_start();


if(isset($_SESSION["username"])){
$Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
    'backupLocation' => '../Filebase/Database/Backup'
]);

$user = $database->get($Username);

$title;
$button1;
$button2;
if(isset($_SESSION['username']))
{

   $title = "<h1> Welcome, ".$_SESSION['username']."!</h1>";
   $button1 = "<a href='../Profile.php' class='mbloginbtn'>Profile</a>";
   $button2 = "<a href='../PHP/LogOut.inc.php' class='mbloginbtn'>Log Out</a>";

}

}
else{
 $title = "<h1> Welcome to the LIFESTYLE.CA!</h1>";
 $button1 = "<a href='../Login.php' class='mbloginbtn'>Login</a>";
 $button2 = "<a href='../SignUp.php' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Create an Account</p></a>";
}
?>

<!DOCTYPE html>


<!DOCTYPE html>

<html>

<head>
	<title>Education & Professional</title>
	<link rel="stylesheet" type = "text/css" href="edu_css/educationCSS.css"/>
	<link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/>
	<script type="text/javaScript" src="eduJS.js"></script>
</head>

<body class="body">

	
		<nav class="mbHeadernav">
			<div class="mbtablediv">
				<table>
					<tr>
						<td>
							<img src="edu_img/potentiallogo.png" alt="logo" style="width:50px;height:50px; float: left;">
						</td>
						<td>
							<a href="../HomePage.php" style="text-decoration: none;"><h1 id="mbMainMenuHeader">THELIFESTYLE.CA</h1></a>
						</td>
						<td class="mbheadertd"  style="padding-left: 50px;">
							<a href="../Nutrition/Fitness&Nutrition.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Fitness & Nutrition</p></a>

						</td>
						<td class="mbheadertd">
							<a href="education.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Education & Professional Life</p></a>
						</td>
						<td class="mbheadertd">
							<a href="../finances/financepage.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Finances</p></a>
						</td>
					</tr>
				</table>
			</div>
				
			 <div id="mbloginsignupsdiv">
                <?php
                echo "$button1";
                ?>
                <?php
                echo "$button2";
                ?>
            </div>
			
		</nav>

	<br>
	
	<section class="IntroSection">

		<div>
			<h1 class="IntroHeader">Education & Professional Life</h1>
			<h2 class="IntroHeader">Plan your future right here and right now!</h2>
			<table>
				<tr>
					<td>
						<img src="edu_img/career-tree.png" alt="career-tree">
					</td>
					<td>
						<p class="IntroTxt">View suggested info from various job fields! (statistics/job opportunities/internships)</p>
						<ul class="buttonList">
							<li class="listItem">
								<input type="button" id="Eng" class="suggButton" value="Engineering" onclick="popupSite('Eng')"/>
							</li>
							<li id="popUp"></li>
							<li class="listItem">
								<input type="button" id="IT" class="suggButton" value="Information Technology" onclick="popupSite('IT')"/>
							</li>
							<li id="popUp2"></li>
							<li class="listItem">
								<input type="button" id="Hlth" class="suggButton" value="Health" onclick="popupSite('Hlth')"/>
							</li>
							<li id="popUp3"></li>
							<li class="listItem">
								<input type="button" id="Bs" class="suggButton" value="Business" onclick="popupSite('Bs')"/>
							</li>
							<li id="popUp4"></li>
							<li class="listItem">
								<input type="button" id="Mrkt" class="suggButton" value="Marketing" onclick="popupSite('Mrkt')"/>
							</li>
							<li id="popUp5"></li>
							<li class="listItem">
								<input type="button" id="Law" class="suggButton" value="Law" onclick="popupSite('Law')"/>
							</li>
							<li id="popUp6"></li>
							<li class="listItem">
								<input type="button" id="Rtl" class="suggButton" value="Retail" onclick="popupSite('Rtl')"/>
							</li>
							<li id="popUp7"></li>
						</ul>
					</td>
				</tr>
			</table>
		</div>
	</section>
	<section class="NetworkingSection">
		<div>
		<h1 class="networkTitle">Network with other people!</h1>
		<table class="NetworkTable">
			<tr>
				<td>
					<img src="edu_img/networking3.png" alt="network-tree">
				</td>
				<td>
					<a href="instant_messenger.php" class="suggButton">Find people!</a>
				</td>
				<td>
					<img src="edu_img/network2.png" alt="network-tree">
				</td>
			</tr>
		</table>
		</div>
	</section>
	<section class="schedule">
		<h1 class="networkTitle" id="scTitle">Schedule your ambitions ahead of time!</h1>
		<table>
			<tr>
				<td><p class="scTxt">Make your own schedule with our schedule builder!<br>
					Any upcoming events based on your career goals shall be put onto your personal agenda!<br>
					Keep in mind organization is the key to success!<br><br><a href="" class="suggButton">Use Schedule Builder</a></p>
					
				</td>
				<td>
					<img src="edu_img/scheduleArt.png" alt="a schedule">
				</td>
			<tr>
			
		</table>
	</section>
	<section class="school">
		<h1 class="networkTitle" id="scTitle">Be successful in your studies as well!</h1>
		<table>
			<tr>
				<td><p class="scTxt">Tips and tricks to help you get through your school semesters without having to stress too much!<br>
				Resources available to point you in the right direction!<br><br><a href="taskAttempt.php" class="suggButton">Access Resources!</a></p>
				</td>
				<td>
					<img src="edu_img/studying.png" alt="studying">
				</td>
			</tr>
		</table>
	</section>
	
</body>


<div class="homepagefooter">
	<div class="footerdiv">
		<h1 class="footerheading">Start with the change now</h1>
		<div class="EmailAddressDiv">
			<input type="text" placeholder="Email Address" id="EmailAddressInput">
			<a href="" class="beginnow">Begin Now</a>
		</div>
		
	</div>

	<div class="footerlinkswrapper">
		<div class="footerlinksdiv">
			<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Sections</p>
			<p><a href="">Education</a></p>
			<p><a href="">Finances</a></p>
			<p><a href="">Health And Fitness</a></p>
		</div>
		<div class="footerlinksdiv">
			<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Go To</p>
			<p><a href="">Sign in my account</a></p>
			<p><a href="">Schedule Builder</a></p>
		</div>
		<div class="footerlinksdiv">
			<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">About us</p>
			<p><a href="">Contact</a></p>
			<p><a href="">FAQ</a></p>
			<p><a href="">Account</a></p>
		</div>
		<div class="footerlinksdiv">
			<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Why us?</p>
			<p><a href="">Our Values</a></p>
			<p><a href="">Our Mission</a></p>
		</div>
		<div class="footerlinksdiv">
			<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Follow us on</p>
			<p><a href="">Twitter</a></p>
			<p><a href="">Instagram</a></p>
			<p><a href="">Facebook</a></p>
		</div>
	</div>
</div>

</html>