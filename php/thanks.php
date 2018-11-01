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
					  <li class="navbar__li"><a href="../html/gytis.html">Gytis</a></li>
					  <li class="navbar__li"><a href="../html/robert.html">Robert</a></li>
					  <li class="navbar__li"><a href="../html/scott.html">Scott</a></li>
					  <li class="navbar__li"><a href="../html/mate.html">Mate</a></li>
					  <li class="navbar__li"><a href="../html/shaquille.html">Shaquille</a></li>
					  <li class="navbar__li"><a href="../html/gyuri.html">Gyuri</a></li>
					  <li class="navbar__li"><a href="../html/form.html">Give Feedback</a></li>
					</ul>
				</div>
				<?php 
					if (isset($_POST['submit']))
					{
							$name = $_POST['nickname'];
							$change = $_POST['change'];
							$email = $_POST['email'];
						echo "<div class='form__title'><h1>Thank you " . ($name) . " for your feedback:</h1></div>";
                                        } else 	{
                                            echo "<div class='form__title'><h1>Sorry, but you need to fill out the form</h1></div>";
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