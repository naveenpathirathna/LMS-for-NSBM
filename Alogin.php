<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="veiwport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="learning menagment system for nsbm">
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="CSS\demo.css">
  <link rel="stylesheet" type="text/css" href="CSS\home.css">
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
      
        <div class="con">
            <div>
                <h1 >Welcome to NSBM Learning Management System</h1>
                <hr>
            </div>
            <div class="computing">
                <ul>Main Menu
                     <li><a href="research.php">NSBM Research Publication</a></li>
                    <li><a href="handbook.php">Student handbook</a></li>
                    <li><a href="Ahandbook.php">Award Handbook</a></li>
                    <li><a href="timetable.php">Class Time Tables</a></li>
                    <li><a href="examtimetable.php">Exam Time Table</a></li>
                    <li><a href="regulation.php">Regulations</a></li>
                </ul>
            </div>
            <div class="school">
                <br>
                <br>
                <br>
                <br>
                <a class="aa" href="Computing.php">School of Computing</a>
            </div>
            <div class="school2">
                <br>
                <br>
                <br>
                <br>
                <a class="aa" href="Bussiness.php">School of Business</a>
            </div>
        
           
        </div>
    </div>
</body>
</html>