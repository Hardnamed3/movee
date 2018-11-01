<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Thanks page</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <meta charset="utf-8">
    <link rel="icon" href="../images/dancing-cow.gif">
  </head>
    <body>
		<div class="mate-container">
			<div class="mate-content">
				
				<div class="head">
						<div class="logo">
							<a href="index.html"><img src="../images/logo.png" alt="logo image" /></a>
						</div>
						<div class="Website__name">
							<h1 id="title">Mooviee Grooviee</h1>
							<h4>Get your groove on</h4>
						</div>
				</div>
				<div class="navbar">
					<ul class="navbar__ul">
					  <li class="navbar__li"><a href="gytis.html">Gytis</a></li>
					  <li class="navbar__li"><a href="robert.html">Robert</a></li>
					  <li class="navbar__li"><a href="scott.html">Scott</a></li>
					  <li class="navbar__li"><a href="mate.html">Mate</a></li>
					  <li class="navbar__li"><a href="shaquille.html">Shaquille</a></li>
					  <li class="navbar__li"><a href="gyuri.html">Gyuri</a></li>
					  <li class="navbar__li"><a href="form.html">Give Feedback</a></li>
					</ul>
				</div>
				<?php 
					if (isset($_POST['submit']))
					{
							$name = $_POST['nickname'];
							$change = $_POST['change'];
							$email = $_POST['email'];
				
						echo "<div class='form__title'><h1>Thank you " . ucfirst($interest) . "for your feedback:</h1></div>";
					}	
				?>
			</div>
			<div id="footer">
				<p id="year">2017-2018</p>
				<p id="name">Mooviee Grooviee&trade;</p>
			</div>
        </div>
    </body>
</html>