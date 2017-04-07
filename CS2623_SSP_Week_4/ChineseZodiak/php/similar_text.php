<?php 
$signNames = array("Rat","Ox","Tiger","Rabbit","Dragon","Snake","Horse","Goat","Monkey","Rooster","Dog","Pig");
$levenshteinSmallest = 999999;
$similarTextLargest = 0;
$levenshteinWord1 = "";
$levenshteinWord2 = "";
$similarTextWord1 = "";
$similarTextWord2 = "";
//Loop array and compare each respective value to the others with both functs
for($i = 0; $i < 11; ++$i){
    for($j = $i + 1; $j < 12; ++$j){
        $levenshteinValue = levenshtein($signNames[$i], $signNames[$j]);
            if($levenshteinValue < $levenshteinSmallest){
                    $levenshteinSmallest = $levenshteinValue;
                    $levenshteinWord1 = $signNames[$i];
                    $levenshteinWord2 = $signNames[$j];
            }
        $similarTextValue = similar_text($signNames[$i], $signNames[$j]);
            if($similarTextValue > $similarTextLargest){
                    $similarTextLargest = $similarTextValue;
                    $similarTextWord1 = $signNames[$i];
                    $similarTextWord2 = $signNames[$j];
            }
    }
}

 echo "<p>The levenstein function has determined that &quote;" . $levenshteinWord1 . "&quote;" . 
                        " and &quote;" . $levenshteinWord2  ."&quote; are the most similar words</p>\n";

 echo "<p>The similar text function has determined that &quote;" . $similarTextWord1 . "&quote;".
                        " and &quote;" . $similarTextWord2  . "&quote; are the most similar words</p>\n";

//add print out here
?>