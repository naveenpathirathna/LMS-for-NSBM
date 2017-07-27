<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="veiwport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="learning menagment system for nsbm">
  <title>Contatct_us</title>
  <link rel="stylesheet" type="text/css" href="CSS\demo.css">
  <link rel="stylesheet" type="text/css" href="CSS\ContactUs.css">
</head>
<body>
<header>
    <div class="nav">
      <ul>
          <li><a  href="index.php">HOME</a></li>
          <li><a href="AboutUS.php">About US</a></li>
          <li><a href="News.php">NEWS</a></li>
          <li><a href="Clubs.php">Clubs & socities</a></li>
          <li><a class="active" href="ContactUS.php">CONTACT US</a></li>
           <li>
                    <?php
                    if (isset($_SESSION['uname'])){echo'
                    <a href="logOut.php">LOGOUT</a>';}
                                                   ?>
                </li>
                <li><?php
                    if (isset($_SESSION['uname'])){
                        echo '<a class="my"> You Logged as: '.$_SESSION['uname'].'</a>';
                    }  
                    else {
                        echo '<a>You are not logged in !</a>';
                    }

                    ?>
                </li>  
          
      </ul>
      </div>
</header>
<div class="ContUs"></div>
<h1 align="center"><font color="blue">Contact Us</font></h1>
<div class="soc">
  <h3 align="center"><u>School of Computing</u></h3>
  
    <p>NSBM Green University Town</p>
    <p>Mahenwaththa,</p>
    <p> Pitipana,</p>
    <p>Homagama.</p>
    <p>Sri Lanka</p>
    <p>Tel: +94 (11) 544 6000</p>
  
</div>
<div class="soc">
  <h3 align="center"><u>School of Business</u></h3>
  <p>NSBM Green University Town</p>
  <p>Mahenwaththa,</p>
  <p>Pitipana,</p>
  <p>Homagama.</p>
  <p>Sri Lanka</p>
  <p>Tel: +94 (11) 544 5100</p>
  
</div>
<div class="soc">
  <h3 align="center"><u>NSBM Library</u></h3>
  <p>NSBM Green University Town</p>
  <p>Mahenwaththa,</p>
  <p>Pitipana,</p>
  <p>Homagama.</p>
  <p>Sri Lanka</p>
  <p>Tel: +94 (11) 528 8827</p>
</div>
<div class="soc">
  <h3 align="center"><u>NSBM Exam Unit</u></h3>
  <p>NSBM Green University Town</p>
  <p>Mahenwaththa,</p>
  <p>Pitipana,</p>
  <p>Homagama.</p>
  <p>Sri Lanka</p>
  <p>Tel: +94 (11) 544 5080</p>
</div>
</body>
</html>