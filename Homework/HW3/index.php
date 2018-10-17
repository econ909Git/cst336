<?php

    session_start();
   
    
    
    if(isset($_GET['quiz']))// and isset($_GET['total']))
    {
        
        $topic = $_GET['quiz'];
        $_SESSION["questions"] = $_GET['total'];
        $_SESSION["cheat"] = $_GET['noCheating'];
        $cheat = $_GET['noCheating'];
        header("Location:" . $topic);
        //exit();
        
       
    }
    
    // if(!isset($_GET['quiz'])){
    //   echo'<h3>You must Select the topic from php or html!<h3>';
    // }
    
   
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Homework 3</title>
        <style>
            @import url("css/styles.css");
            body {
                text-align: center;
            }
            .formbox {
                background-color: lightgrey;
                color:black;
                width: 50%;
                margin-left: auto;
                margin-right: auto;
                padding: 2%;
                border-radius: 40px;
               
            }
        </style>
    </head>
    <body>
        <br><br><br><br>
        <div class="formbox">
            <h1>=====Quiz on php or html=====</h1>
            <form  method="GET">
                <h3>How many questions (4 min. and 10 max): <input type="text" name="total" placeholder="Enter Total Questions!" size="15"/></h3>
                <h3>Make questions about php or html? (Please choose 1)</h3>
                <?php
                    // if(!isset($_GET['total'])){
                    //     echo'<br>';
                    //     echo'<h3 style="color: red";>You must Select the topic from php or html!<h3>';
                    //     echo'<br>';
                    // }
                
                ?> 
                <input type="radio" id="php" name="quiz" value="php_quiz.php">
                    <label for="php">php Questions</label>
           
           
                <input type="radio" id="html" name="quiz" value="html_quiz.php">
                    <label for="html">html Questions</label>
                <?php
                    // if(!isset($_GET['quiz'])){
                    //     echo'<h3 style="color: red";>You must Select the topic from php or html!<h3>';
                    // }
                
                ?> 
                <br>
                <br>
                <input type="checkbox" name="noCheating" value="check"> By checking this box you vow to not look up answers<br>
                <br>
 
            
             
                <input type="submit" value="Take Quiz!" name="submitButton"/>
            </form>
        
    </body>
</html>