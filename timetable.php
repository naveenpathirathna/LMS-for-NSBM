<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="veiwport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="learning menagment system for nsbm">
	<title>classtimetable</title>
	<link rel="stylesheet" type="text/css" href="CSS\demo.css">
  <link rel="stylesheet" type="text/css" href="CSS\ModuleStyle.css">
     <link rel="stylesheet" type="text/css" href="CSS/download%20links.css">
</head>
<body>
<header>
<!-- navgration bar -->
		<div class="nav">
			<ul>
  				<li><a  class="active" href="Alogin.php">LMS-HOME</a></li>
  				<li><a href="AboutUS.php">About US</a></li>
  				<li><a href="News.php">NEWS</a></li>
  				<li><a href="Clubs.php">Clubs & socities</a></li>
  				<li><a href="ContactUS.php">CONTACT US</a></li> 
                 <li>
                    <?php
                    if (isset($_SESSION['uname'])){echo'
                    <a href="logOut.php">LOGOUT</a>';}
                                                   ?>
                </li>
                <li><?php
                    if (isset($_SESSION['uname'])){
                        echo '<a class="my"> You Logged as: '.$_SESSION['uname'].'<a>';
                    }  
                    else {
                        echo '<a>You are not logged in !<a>';
                    }

                    ?>
                </li>  
			</ul>

		</div>
</header>
    <div class="img">
      <div>
        <h1 id="welcome2">Class Time Tables</h1>
      </div>
        <div class="con">
            <div id="download">
          
          <br>
          <br> <a href="files/t1.pdf" target="blank">Time table 01</a>
          <br> <a href="files/t2.pdf" target="blank">Time table 02</a>
          <br> <a href="files/t3.pdf" target="blank">Time table 03</a>
          <br> <a href="files/t4.pdf" target="blank">Time table 04</a>
          <br> <a href="files/t5.pdf" target="blank">Time table 05</a>
        </div>                
        </div>
    </div>
    </body>
</html>