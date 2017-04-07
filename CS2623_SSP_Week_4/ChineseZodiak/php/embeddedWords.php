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
                            echo "<hr/>\n";

                            echo "<p>The following words can not be made from the phrase &quot;$Phrase&quot;:";
                                foreach($BadWords as $Word){
                                    echo " $Word";
                                }
                            echo "</p>\n";
                            echo "<hr/>\n";

                        }

                        
                        ?>