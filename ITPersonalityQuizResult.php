<?php
    $name = $_POST['name'];
    $personality;

    $q1 = $_POST['q1']; $q2 = $_POST['q2']; $q3 = $_POST['q3']; $q4 = $_POST['q4']; $q5 = $_POST['q5'];
    $q6 = $_POST['q6']; $q7 = $_POST['q7']; $q8 = $_POST['q8']; $q9 = $_POST['q9']; $q10 = $_POST['q10'];

    $raw_score =  ($q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10);
    $percentage = ($raw_score / 50) * 100;

    if($raw_score > 40){
        $personality = "Project Manager";
    }elseif($raw_score > 30 && $raw_score <= 40){
        $personality = "IT Security";
    }elseif($raw_score > 20 && $raw_score <= 30){
        $personality = "Computer System Analyst"; 
    }else{
        $personality = "Programmer";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style/result.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="banner">
            <h5>SEMAPHORE</h5>
        </div>
        <div class="main">
            <center>
            <p class="p1">Congratulations! <?php echo $name ?>.</p>
            <p class="p2">Your score: <?php echo $raw_score  ?> | Percentage: <?php echo $percentage ?>%</p>
            <p class="p3">Your IT personality: <?php echo $personality ?></p>
          
            <div class= "summary">
                  <?php 
             if($personality == "Project Manager"){
                    echo "<img style='height:100px;width:110px;margin-bottom:15px;' src='img/personality/project_manager.png'>";
                    echo "<p style='color:#666666;'>Every project manager knows to execute projects on time and on budget. <br>
                    And good project managers also take pains to meet project requirements consistently. <br>
                    But truly great project leaders go above and beyond. Among other things, not only <br>
                    do they execute projects within scope; they are accountable, strategic business <br>
                    partners fully vested in organizational success.</p>";
             }elseif($personality == "IT Security"){
                    echo "<img style='height:100px;width:110px;margin-bottom:15px;' src='img/personality/IT_security.png'>";
                    echo "<p style='color:#666666;'>IT security consultants tend to be predominantly investigative individuals, which <br>
                    means that they are quite inquisitive and curious people that often like to spend <br>
                    time alone with their thoughts. They also tend to be enterprising, which means <br>
                    that they are usually quite natural leaders who thrive at influencing and persuading others.</p>";

             }elseif($personality == "Computer System Analyst"){
                    echo "<img style='height:100px;width:110px;margin-bottom:15px;' src='img/personality/system_analyst.png'>";
                    echo "<p style='color:#666666;'>Computer systems analysts tend to be predominantly investigative individuals, <br>
                    which means that they are quite inquisitive and curious people that often like to <br>
                    spend time alone with their thoughts. They also tend to be conventional, meaning <br>
                    that they are usually detail-oriented and organized, and like working in a <br>
                    structured environment.</p>"; 

             }else{
                    echo "<img style='height:100px;width:110px;margin-bottom:15px;' src='img/personality/programmer.png'>";
                    echo "<p style='color:#666666;'>Computer programmers tend to be predominantly investigative individuals, which means <br>
                    that they are quite inquisitive and curious people that often like to spend time alone with <br>
                    their thoughts. They also tend to be conventional, meaning that they are usually detail- <br>
                    oriented and organized, and like working in a structured environment.</p>";
             }
            ?>
            <ul>
                <li>IT PERSONALITIES</li>
                <li>40 - 50 - Project Manager</li>
                <li>30 - 40 - IT Security</li>
                <li>20 - 30 - Computer System Analyst</li>
                <li>10 - 20 - Programmer</li>
            </ul>
            <a href="SemaphoreITPersonalityQuiz.php"><button class="btn btn-success btn-md pl-5 pr-5" id="btn">Restart Quiz</button></a>
            </div>
            <footer>
                © 2021 Semaphore. All righs reserved.
                 <br><br>
                Created by Martinez, Rikki Mae &middot;   Rario, Marianne &middot;  Marquez, Jennifer &middot;  Carillo, Aaron &middot; Dela Cruz, Johnvic
            </footer>
            </center>
        </div>
    </body>
</html>