<?php
//index.php

require 'functions.php';


if(isset($_POST["InitTemp"])){
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
    Temperature: <input type="number" name="InitTemp" />
    <br />
    <input type="submit" />
    </form>
    </div>
    ';
}