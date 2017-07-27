<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="veiwport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="learning menagment system for nsbm">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="CSS\demo.css">
    <link rel="stylesheet" type="text/css" href="CSS\login.css">
</head>
<body>
<header>
<!-- navgration bar -->
		<div class="nav">
			<ul>
  				<li><a  class="active" href="Alogin.php">HOME</a></li>
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
                        echo '<a> You Logged as: '.$_SESSION['uname'].'<a>';
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
        <div class="log">
            <form method="post" action="loginconnect.php">  
                <table class="tab">
                    <tr>
                        <th colspan="2" style="text-align:center">Student Login</th>
                        <th colspan="2" style="text-align:center"></th>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="user" placeholder="User Name" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" placeholder="password" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Login"></td>
                        <td><input type="reset" value="Cancle"></td>
                    </tr>
                </table>
            </form>
        </div>
             <div class="log">
            <form method="post" action="loginconnect1.php">  
                <table class="tab">
                    <tr>
                        <th class="th"colspan="2" style="text-align:center">Lecture Login</th>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="user" placeholder="User Name" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" placeholder="password" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Login"></td>
                        <td><input type="reset" value="Cancle"></td>
                    </tr>
                </table>
            </form>   
        </div> 
        <div id="w3">
             
            <a href="https://validator.w3.org/nu/#textarea"><img src="PNG/valid-html5.png" alt="Validate"/></a>
             <a href="http://jigsaw.w3.org/css-validator/validator"><img src="PNG/valid-css.png" alt="Validate"/></a>
        
   

        </div>
        
    </div>
</body>
</html>