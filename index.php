<?php 
// index.php

// add php here
// also add php in errors and results divs, 
//   current error/result text is dummy text for example

// ------------->  Dominick's formulas 
        // $FtoC = ($temp - 32) * (5 / 9); //Fahrenheit to Celsius formula
        // $CtoK = $temp + 273.15; //Celsius to Kelvin formula
        // $KtoF = ($temp - 273.15) * (9 / 5) + 32; //Kelvin to Fahrenheit formula

// -------------> Christopher's Formulas here




// ************* Variables *************

$tempConversion = "";
$errorMsg = "";
$userTemp = (float)"";
$userScale = "";
$endScale = "";
$newTemp = (float)"";




// ************* Error Checking *************

// Used .= to append each error to the variable, so one can see a "list" errors that apply.

// First checks if userTemp is an empty string. If so, appends msg to errorMsg.
if(empty($_POST['userTemp'])){
    $errorMsg .= "<p>Please enter a starting temperature.</p>";
}else{
    if (is_numeric($_POST['userTemp']) == FALSE) {
        $errorMsg .= "<p>Alphabetical characters are not allowed. <br>Please enter a number.</p>";
    }else {
        $userTemp = $_POST['userTemp'];
    }
}

// Checks if Starscel has been set. If not, appends msg to errorMsg.
if(isset($_POST['StartScale'])){
    $StartScale = $_POST['StartScale'];
}else{
    $errorMsg .= "<p>Please select a starting scale.</p>";
}

// ************* CONVERSIONS *************





?>


<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>IT 262 P2: Branch, Pull, Merge, Repeat - Group 2</title>
        <meta name="author" content="Kira Abell, Dominick Nelson, Robin VanGilder" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex,nofollow">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    
    <body>

        <div class="container">

            <div class="title">
                <h1>IT 262 P2: Branch, Pull, Merge, Repeat - Group 2</h1>
                <h2>Kira Abell, Dominick Nelson, Robin VanGilder</h2>
            </div>
    
            <form action="" method="POST">
    
                <label class="temp-num">
                    Temperature to convert: <input type="text" name="userTemp" value="" />
                </label>
    
                <div class="options">
                    <fieldset>
                        <legend>Starting Scale</legend>
    
                        <label><input type="radio" name="StartScale" value="StartF" /> Fahrenheit</label>
                        <label><input type="radio" name="StartScale" value="StartC" /> Celsius</label>
                        <label><input type="radio" name="StartScale" value="StartK" /> Kelvin</label>
                            
                    </fieldset>
    
                    <fieldset>
                        <legend>Conversion Scale</legend>
    
                        <label><input type="radio" name="ConvScale" value="ConvF" /> Fahrenheit</label>
                        <label><input type="radio" name="ConvScale" value="ConvC" /> Celsius</label>
                        <label><input type="radio" name="ConvScale" value="ConvK" /> Kelvin</label>
    
                    </fieldset>
                </div>

                <input type="submit" value="Convert" />

                <a href="">Reset</a>
        
            </form>
    


        </div> <!-- end container -->
    
    </body>
    
</html>