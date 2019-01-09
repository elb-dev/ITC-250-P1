<?php
//index.php

require 'functions.php';


if(isset($_POST["InitTemp"]) && isset($_POST["StartTempScale"]) && isset($_POST["EndTempScale"])){
    //Conversions
    $inputTemp = $_POST["InitTemp"];
    
    echo '<div>';
    
    //F to C
    $outputTemp = myFToC($inputTemp);
    echo "$inputTemp F to $outputTemp C";
    echo "<br />";
    
    //C to F
    $outputTemp = myCToF($inputTemp);
    echo "$inputTemp C to $outputTemp F";
    echo "<br />";
    
    //C to K
    $outputTemp = myCToK($inputTemp);
    echo "$inputTemp C to $outputTemp K";
    echo "<br />";
    
    //K to C
    $outputTemp = myKToC($inputTemp);
    echo "$inputTemp K to $outputTemp C";
    echo "<br />";

    //F to K
    $outputTemp = myFToK($inputTemp);
    echo "$inputTemp F to $outputTemp K";
    echo "<br />";
    
    //K to F
    $outputTemp = myKToF($inputTemp);
    echo "$inputTemp K to $outputTemp F";
    echo "<br />";
    
    echo '</div>';
}else{
    echo'
    <div>
    <form action="" method="post">
    Start Temperature Scale: 
    F<input type="radio" name="StartTempScale" value=0 />
    C<input type="radio" name="StartTempScale" value=1 />
    K<input type="radio" name="StartTempScale" value=2 />
    <br />
    Temperature: <input type="number" name="InitTemp" />
    <br />
    End Temperature Scale: 
    F<input type="radio" name="EndTempScale" value=0 />
    C<input type="radio" name="EndTempScale" value=1 />
    K<input type="radio" name="EndTempScale" value=2 />
    <br/ >
    <input type="submit" />
    </form>
    </div>
    ';
}