<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Tyler Hunt" />
    <meta name="description" content="CS 2623 Server Side Programming" />
    <meta name="keywords" content="...." /> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en-us" /> 

    <link rel="stylesheet" href="../css/W3C.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <title>CS 2623 - Week 4 - Similar Names</title>
</head>
     <body>
        <!--Begin of Right twothird panel(s)-->
        <div class="w3-container">

            <!-- Card #1-->
            <div class="w3-panel">
                <div class="w3-container w3-card-2 w3-blue">
                    <h6>Similar Names</h6>
                </div>

                <div class="w3-container">
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

                        echo "<p>The levenstein() function has determined that &quot;" . $levenshteinWord1 . "&quot;" . 
                                                " and &quot;" . $levenshteinWord2  ."&quot; are the most similar names!</p>\n";

                        echo "<p>The similar_text() function has determined that &quot;" . $similarTextWord1 . "&quot;".
                                                " and &quot;" . $similarTextWord2  . "&quot; are the most similar names!</p>\n";
                        ?>
                </div>
            </div>
            <!--/ Card #1-->

            <br/><br/><br/> 
            <br/><br/><br/>

        </div>

        <!-- / Main Content-->
    </body>
</html>

   