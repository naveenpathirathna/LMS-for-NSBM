<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="veiwport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="learning menagment system for nsbm">
	<title>Admin pannel</title>
	<link rel="stylesheet" type="text/css" href="CSS\demo.css">
  <link rel="stylesheet" type="text/css" href="CSS\AdminPannel.css">
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
                <h1 >Admin Panel</h1>
            </div>
            <div class="settings">
                <h4>Add Notes</h4>
                <form action="uploadserver.php" method="post" enctype="multipart/form-data">
							<table id="supform1">
							
							<tr>
							<td><a id="captxt1">File :</a></td>
							<td><input type="file" name="file1"></td>
							</tr>
							<tr>
                            <tr>
                            <td>
							<br>
							<input type="submit" value="Submit File">
							</td>
							</tr>
							</table>
                            </form>
                
                
                
            </div>
            
             <div class="settings">
                <h4>News</h4>
                
            </div>
                        
                
        </div>
    </div>
    </body>
</html>