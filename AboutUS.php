<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="veiwport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="learning menagment system for nsbm">
  <title>About US</title>
  <link rel="stylesheet" type="text/css" href="CSS\demo.css">
  <link rel="stylesheet" type="text/css" href="CSS\aboutusstyle.css">
</head>
<body>
<header>
    <div class="nav">
      <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a  class="active" href="AboutUS.php">About US</a></li>
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
                        echo '<a > You Logged as: '.$_SESSION['uname'].'</a>';
                    }  
                    else {
                        echo '<a>You are not logged in !</a>';
                    }

                    ?>
                </li>  
      </ul>

    </div>
</header>
    <div class="AUSPIC"></div>
    <button class="aboutus">about us</button>
    <div class="panel">
        <p>NSBM Green University Town is the first ever green university in South Asia and sets an example for the whole South Asia by paving the way for environmental sustainability. The university is open for both national and international student community and it has turned a new chapter in Sri Lankan higher education.</p>

        <p>NSBM Green University Town is established under the Ministry of Skills Development and Vocational Training and it is renowned for its world-class academic offerings. This state-of-the-art university offers nationally and internationally recognized, UGC approved degree programmes and foreign degree programmes in three faculties: Management, Computing and Engineering.</p>

        <p>The university is spread over an area of 26 acres and the massive university complex was built with the intention of providing an opportunity for both national and international students to have a fully-fledged education in Sri Lanka. Currently around 9000 students are studying at the university and the highly qualified local and foreign lecturers who teach at the university are committed to prepare these undergraduates to face any challenge the world has to offer. The university’s commitment to excellence in education extends beyond course delivery since the university has created mutually beneficial relationships with the industry to provide students with opportunities to get exposure to the real- world work places.</p>

        <p>Inspired by the vision of making Sri Lanka the best educational hub in Asia, NSBM Green University Town is dedicated to gift the future leaders to the world with its fully fledged university..</p>
      </div>

    <button class="aboutus">vision</button>
    <div class="panel">
        <p>To be Sri Lanka’s best performing Graduate School and to be recognized internationally</p>
    </div>
    <button class="aboutus">mission</button>
    <div class="panel">
        <p>To develop globally competitive and responsible graduates that businesses demand, working in synergy with all our stakeholder and contributing to our society</p>
    </div>
    <button class="aboutus">faculties</button>
    <div class="panel">
    
    <p><a href="Programmes.html">School of Computing</a></p>
    <p><a href="Programmes.html">School of Business</a></p>
    <p><a href="Programmes.html">School of Engineering</a></p>
 
    </div>
    <script>
var acc = document.getElementsByClassName("aboutus");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>

  
</body>
</html>