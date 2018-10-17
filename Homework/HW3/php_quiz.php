<?php

   session_start();    
   
   $correct = 0;
   $line ='\n';
   $function = '$function';
   $sessCorrect = '$_SESSION["name"]';  // JUST TO PRINT CORRECT $_SESSION Bc the $ caused probelms
   
   $numQuestions =  $_SESSION["questions"];
       
   $cheat = $_SESSION["cheat"];
   
   if(isset($_GET["phpQuestion01"])){
      $phpQuestion01 = $_GET["phpQuestion01"];
   }
   
   if(isset($_GET["phpQuestion02"])){
      $phpQuestion02 = $_GET["phpQuestion02"];
   }
   if(isset($_GET["phpQuestion03"])){
      $phpQuestion03 = $_GET["phpQuestion03"];
   }
   if(isset($_GET["phpQuestion04"])){
      $phpQuestion04 = $_GET["phpQuestion04"];
   }
   if(isset($_GET["phpQuestion05"])){
      $phpQuestion05 = $_GET["phpQuestion05"];
   }
   if(isset($_GET["phpQuestion06"])){
      $phpQuestion06 = $_GET["phpQuestion06"];
   }
   if(isset($_GET["phpQuestion07"])){
      $phpQuestion07 = $_GET["phpQuestion07"];
   }
   if(isset($_GET["phpQuestion08"])){
      $phpQuestion08 = $_GET["phpQuestion08"];
   }
   if(isset($_GET["phpQuestion09"])){
      $phpQuestion09 = $_GET["phpQuestion09"];
   }
   if(isset($_GET["phpQuestion10"])){
      $phpQuestion10 = $_GET["phpQuestion10"];
   }
    
  
  
  
   
   $total = $numQuestions;
   
   echo"<br>";
   if($cheat == "check"){
   echo " <div class='pageTitle' sytle='width:100%; display: block; padding-top:10px;'>";
       echo"<marquee class='marquee1' width='35%' bgcolor='darkgrey' direction='down' scrollamount='4'><h1>PHP Quiz (Remember no Cheating)</h1></marquee>";
       echo"</div> ";
   }
   if($numQuestions < 4 or $numQuestions > 10){
      echo"<h1 style= 'color:red;'> You Must Choose Between 4 - 10 Questions Only!<h1>";
   }
   
   if($numQuestions !=0){  
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;' >";
         echo"<br> <br>";
         echo"<p>1. Which choice is best to display an array?<br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='phpQuestion01' value='wrong'> echo <br>";
         echo"<input type='radio' name='phpQuestion01' value='wrong'> magic_display_function v.21.3.7 <br>";
         echo"<input type='radio' name='phpQuestion01' value='correct'> print_r()<br>";
         echo"<input type='radio' name='phpQuestion01' value='wrong'> System.out.print()<br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($phpQuestion01 == "correct"){
            $correct += 1;
         }
         
      // }
      // if($numQuestions !=0){ 
      //    echo"<div class='questionBox' style='font-size:1.2em;' >";
      //    echo"<br> <br>";
      //    echo"<p>1. Type in the opening tag (then 1 space) followed by closing tag for a block of php.<br>";
      //    echo" <form  method='GET'>";
      //       echo'<br>';
      //       echo'<input type="text" name="phpQuestion01" placeholder="Type Answer Here" size="15"/></h3>';
            
      //       echo"</p>";
      //    echo"<br>";
      //    echo"<hr>";
      //    echo"</div>";
         
      //    $numQuestions--;
         
      
      }
      
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         //echo"<br>";
         echo"<p>2. What symbol must be infront of a every varriable declared?<br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='phpQuestion02' value='wrong'> :)<br>";
         echo"<input type='radio' name='phpQuestion02' value='wrong'> @<br>";
         echo"<input type='radio' name='phpQuestion02' value='wrong'> #<br>";
         echo"<input type='radio' name='phpQuestion02' value='correct'> $<br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($phpQuestion02 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p> 3. Which one of the following is used to make a newline?<br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='phpQuestion03' value='wrong'> /n <br>";
         echo"<input type='radio' name='phpQuestion03' value='wrong'> /n\<br>";
         echo nl2br("<input type='radio' name='phpQuestion03' value='correct'> ". " " .$line . "<br>");
         echo"<input type='radio' name='phpQuestion03' value='wrong'> nL <br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($phpQuestion03 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p>4. Which will comment out code in PHP? <br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='phpQuestion04' value='wrong'> /\ <br>";
         echo"<input type='radio' name='phpQuestion04' value='correct'> // <br>";
         echo"<input type='radio' name='phpQuestion04' value='wrong'> <--  --> <br>";
         echo"<input type='radio' name='phpQuestion04' value='wrong'> **hide code** <br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($phpQuestion04 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo" <br>";
         echo"<p>5. PHP stand for  PHP: Hypertext Preprocessor. <br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='phpQuestion04' value='correct'> True<br>";
         echo"<input type='radio' name='phpQuestion04' value='wrong'>False<br>";
        
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($phpQuestion05 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p>6. Which choice is the correct way to define a function?<br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='phpQuestion06' value='wrong'> function{ body }<br>";
         echo"<input type='radio' name='phpQuestion06' value='correct'> function functionName(parameters) { body }<br>";
         echo"<input type='radio' name='phpQuestion06' value='wrong'> function then nothing<br>";
         echo"<input type='radio' name='phpQuestion06' value='wrong'> dataType function(parameters) { body }<br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($phpQuestion06 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p>7. Which of the following is a valid function name?<br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='phpQuestion07' value='correct'> function()<br>";
         echo"<input type='radio' name='phpQuestion07' value='wrong'> $%^*@#<br>";
         echo"<input type='radio' name='phpQuestion07' value='wrong'> .function()<br>";
         echo"<input type='radio' name='phpQuestion07' value='wrong'>" . " " .$function . "()<br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($phpQuestion07 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;' >";
         echo"<br>";
         echo"<p>8. Type Hinting was first inroduced in what version of PHP?<br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='phpQuestion08' value='correct'> PHP 5<br>";
         echo"<input type='radio' name='phpQuestion08' value='wrong'> PHP 6 <br>";
         echo"<input type='radio' name='phpQuestion08' value='wrong'> PHP 5.3<br>";
         echo"<input type='radio' name='phpQuestion08' value='wrong'> PHP 7284.67<br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($phpQuestion08 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p>9. Which is used to store a variable to be used in a new page?<br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='phpQuestion09' value='wrong'> $" . "_session_['name']" . "<br>";
         echo"<input type='radio' name='phpQuestion09' value='wrong'> #_SESSIONS<br>";
         echo"<input type='radio' name='phpQuestion09' value='wrong'> **_SKATE_SESSION_**<br>";
         echo"<input type='radio' name='phpQuestion09' value='correct'>" . " " .$sessCorrect . "<br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($phpQuestion09 == "correct"){
            $correct += 1;
         }
         
      }
      if($numQuestions > 0){
         echo"<br>";
         echo"<div class='questionBox' style='font-size:1.2em;'>";
         echo"<br>";
         echo"<p>10. What must you have first to make a seesion?<br><br>";
         echo" <form  method='GET'>";
         echo"<input type='radio' name='phpQuestion10' value='wrong'> sessionBegin()<br>";
         echo"<input type='radio' name='phpQuestion10' value='wrong'> start_session[]<br>";
         echo"<input type='radio' name='phpQuestion10' value='correct'> session" . "_" . "start()" . "<br>";
         echo"<input type='radio' name='phpQuestion10' value='wrong'> Dude, let start a session<br>";
         
         echo"</p>";
         echo"<br>";
         echo"<hr>";
         echo"</div>";
         
         $numQuestions--;
         
         if($phpQuestion10 == "correct"){
            $correct += 1;
         }
         
     }
   }
      echo"<div style='text-align:center;'>";
      echo"<br><br>";
      echo'<input type="submit" value="Submit Answers" name="submit"/>';
      echo"</div>";
      
      $score = $correct/$total;
      echo "Correct: " .$correct;
      $percentScore = $score * 100;
      
      
      function displayScore(){
         global $correct, $total, $percentScore;
         
         echo"<br><br><br>";
         echo "DEBUG Correct = " .$correct;
         echo"<div style='text-align: center;'>";
         echo"<h3> You got " . $correct . " out of " . $total . " questions correct<h3>";
         echo"<h2> Your percentage score is: " . number_format((float)$percentScore, 2, '.', '') . "%"; 
         echo"<br>";
         if($percentScore == 100){
            echo"Outstanding Work!! You got an A with perfect score on the quiz!";
         }
         else if($percentScore <= 100 and $percentScore >= 90){
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