<?php

   session_start();    
   
   $correct = 0;
   $line ='\n';
   $function = '$function';
   $sessCorrect = '$_SESSION["name"]';  // JUST TO PRINT CORRECT $_SESSION Bc the $ caused probelms
   $image = "img src='pic.jpeg'";
   
   if(isset($_GET["question01"])){
      $question01 = $_GET["question01"];
   }
   if(isset($_GET["question02"])){
      $question02 = $_GET["question02"];
   }
   if(isset($_GET["question03"])){
      $question03 = $_GET["question03"];
   }
   if(isset($_GET["question04"])){
      $question04 = $_GET["question04"];
   }
   if(isset($_GET["question05"])){
      $question05 = $_GET["question05"];
   }
   if(isset($_GET["question06"])){
      $question06 = $_GET["question06"];
   }
   if(isset($_GET["question07"])){
      $question07 = $_GET["question07"];
   }
   if(isset($_GET["question08"])){
      $question08 = $_GET["question08"];
   }
   if(isset($_GET["question09"])){
      $question09 = $_GET["question09"];
   }
   if(isset($_GET["question10"])){
      $question10 = $_GET["question10"];
   }
    
  
   $numQuestions =  $_SESSION["questions"];
       
   $cheat = $_SESSION["cheat"];
   
   $total = $numQuestions;
   
   
   
   echo"<br>";
   if($cheat == "check"){
   echo " <div class='pageTitle' sytle='width:100%; display: block; padding-top:10px;'>";
       echo"<marquee class='marquee1' width='35%' bgcolor='darkgrey' direction='down' scrollamount='4'><h1>HTML Quiz (Remember no Cheating)</h1></marquee>";
        echo"</div> ";
   }
   
   
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;' >";
         echo"<br> <br>";
         echo"<p>1. What does HTML stand for?<br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='question01' value='wrong'> Home Transfering Mixing Language <br>";
         echo"<input type='radio' name='question01' value='wrong'> Hyper Target Maximizer Language<br>";
         echo"<input type='radio' name='question01' value='correct'> Hypertext Markup Language<br>";
         echo"<input type='radio' name='question01' value='wrong'> Happy Timmy Making Language<br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($question01 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         //echo"<br>";
         echo"<p>2. A head section is visible to a person viewing the Web page.?<br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='question02' value='wrong'> True <br>";
         echo"<input type='radio' name='question02' value='correct'> False <br>";
         
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($question02 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p>3. What must be the first thing in HTML code?<br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='question03' value='wrong'> TYPEDOC html<br>";
         echo"<input type='radio' name='question03' value='correct'> DOCTYPE html<br>";
         echo nl2br("<input type='radio' name='question03' value='wrong'> DOC.HTML <br>");
         echo"<input type='radio' name='question03' value='wrong'> @=[H_T_M_L]=@ <br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($question03 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p>4. Which tag would insert a graphic into a Web page? <br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='question04' value='wrong'> image == 'pic.jpeg' <br>";
         echo"<input type='radio' name='question04' value='correct'> " . $image . "<br>";
         echo"<input type='radio' name='question04' value='wrong'> image(src) <br>";
         echo"<input type='radio' name='question04' value='wrong'> pic(goHere)<br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($question04 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo" <br>";
         echo"<p>5. H1 is a larger size text than H2. <br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='question05' value='correct'> True <br>";
         echo"<input type='radio' name='question05' value='wrong'> False <br>";
        
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($question05 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p>6. What type of HTML form is being used in this quiz to make a question multible choice<br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='question06' value='wrong'> text<br>";
         echo"<input type='radio' name='question06' value='correct'> radio <br>";
         echo"<input type='radio' name='question06' value='wrong'> checkbox<br>";
         echo"<input type='radio' name='question06' value='wrong'> buttons <br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($question06 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p>7. What is the tag that begins a list of items?<br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='question07' value='wrong'> Li ()<br>";
         echo"<input type='radio' name='question07' value='wrong'> L_make <br>";
         echo"<input type='radio' name='question07' value='wrong'> Ul or Il<br>";
         echo"<input type='radio' name='question07' value='correct'> ol or ul<br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($question07 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;' >";
         echo"<br>";
         echo"<p>8. What does the tag  tr  used for?<br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='question08' value='correct'> Make a new row in a table<br>";
         echo"<input type='radio' name='question08' value='wrong'> Make text repeat<br>";
         echo"<input type='radio' name='question08' value='wrong'> PHP 5.3<br>";
         echo"<input type='radio' name='question08' value='wrong'> PHP 7284.67<br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($question08 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p>9. Which tag is used to make a line break in HTML?<br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='question09' value='wrong'> Lb <br>";
         echo"<input type='radio' name='question09' value='wrong'> nL <br>";
         echo"<input type='radio' name='question09' value='wrong'> LINE BLAST <br>";
         echo"<input type='radio' name='question09' value='correct'> br <br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($question09 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p>10. Our first Homework in CST336 for Fall 2018 was completely done in HTML<br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='question10' value='correct'> True<br>";
         echo"<input type='radio' name='question10' value='wrong'> False<br>";
         
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($question10 == "correct"){
            $correct += 1;
         }
         
      }
      echo"<div style='text-align:center;'>";
      echo"<br><br>";
      echo'<input type="submit" value="Submit Answers" name="submit"/>';
      echo"</div>";
      
      $score = $correct/$total;
     
      $percentScore = $score * 100;
      
      
      
      function displayScore(){
      //if(isset($_GET["submit"])){
         
         echo"<br><br><br>";
         echo "DEBUG Correct: " .$correct;
         echo"<div style='text-align: center;'>";
         echo"<h3> You got " . $correct . " out of " . $total . " questions correct<h3>";
         echo"<h2> Your percentage score is: " . number_format((float)$percentScore, 2, '.', '') . "%"; 
         echo"<br>";
         if($percentScore == 100){
            echo"Outstanding Work!! You got an A with perfect score on the quiz!";
         }
         else if($percentScore < 100 and $percentScore >= 90){
            echo"Excellent Job! You got an A on the quiz";
         }
         else if($percentScore <= 89 and $percentScore >= 80){
            echo"Good work. You got an B on the quiz";
         }
         else if($percentScore <= 79 and $percentScore >= 70){
            echo"Just good enough. You got an C on the quiz";
         }
         else if($percentScore <= 69 and $percentScore >= 60){
            echo"Sorry, not quite good enough. You got an D on the quiz";
         }
         else if($percentScore < 59){
            echo"Doh! You got an F on the quiz";
         }
         echo"</div>";
         
         
         echo"<div style='text-align:center;'>";
         echo"<br><br>";
         
         echo"<h3><a href='index.php' style='color:white';> Try Again <a><h3>";
         
        //   echo'<form method="GET" action="index.php">';
        //   echo"<br><br>";
        //   echo'<input type="submit" value="Try Again?" name="submit"/>';
        //   echo'</form>'; 
          echo"</div>";
      }
      
?>

<!DOCTYPE html>
<html>
   <head>
        <title>Homework 3</title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
   <body>
       <?php
          if(isset($_GET["submit"])){
             displayScore();
          }
       ?>
   </body>
</html>