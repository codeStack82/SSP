<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Tyler Hunt" />
    <meta name="description" content="CS 2623 Server Side Programming" />
    <meta name="keywords" content="...." /> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en-us" /> 

    <link rel="stylesheet" href="../css/W3C.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <title>CS 2623 - Week 4 - Embedded Words</title>
</head>
     <body>
        <!--Begin of Right twothird panel(s)-->
        <div class="w3-container">

            <!-- Card #1-->
            <div class="w3-panel">
                <div class="w3-container w3-card-2 w3-blue">
                    <h6>Embedded Words</h6>
                </div>

                <div class="w3-container">
                 <?php
                        $Phrases = array("Your Chinese Zodiak tells a lot about your personality.", "Embed PHP scripts within an XHTML document" );
                        $SignNames = array("Rat","Ox","Tiger","Rabbit","Dragon","Snake","Horse","Goat","Monkey","Rooster","Dog","Pig");

                        function BuildLetterCounts($text){
                            $text = strtoupper($text);
                            $letter_Counts = count_chars($text);
                            return $letter_Counts;
                        }

                        function AContainsB($A, $B){
                            $retVal = TRUE;
                            $first_letter_index = ord('A');
                            $last_letter_index = ord('Z');
                            for($letter_index = $first_letter_index; $letter_index <= $last_letter_index; ++$letter_index){
                                if($A[$letter_index] < $B[$letter_index]){
                                    $retVal = FALSE;
                                }
                            }
                            return $retVal;
                        }

                        foreach($Phrases as $Phrase){
                            $PhraseArray = BuildLetterCounts($Phrase);
                            $GoodWords = array();
                            $BadWords = array();

                                foreach($SignNames as $Word){
                                    $WordArray = BuildLetterCounts($Word);
                                    if(AContainsB($PhraseArray, $WordArray)){
                                        $GoodWords[] = $Word; 
                                    }else{
                                        $BadWords[] = $Word;
                                    }
                                };
                            //Print output    
                            echo "<p>The following words can be made from the phrase &quot;$Phrase&quot;:";
                                foreach($GoodWords as $Word){
                                    echo " $Word";
                                }
                            echo "</p>\n";

                            echo "<p>The following words can not be made from the phrase &quot;$Phrase&quot;:";
                                foreach($BadWords as $Word){
                                    echo " $Word";
                                }
                            echo "</p>\n";
                            echo "<hr/>\n";

                        }

                        
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

   