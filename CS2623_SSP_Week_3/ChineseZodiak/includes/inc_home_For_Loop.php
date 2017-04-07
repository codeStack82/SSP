
<!--Begin of Right panel(s)-->
    <div class="w3-container w3-rest">

    <!-- Card #1-->
    <div class="w3-panel ">
        <div class="w3-container w3-card-2 w3-blue">
            <h5>Chinese Zodiak - Year Distribution Table</h5>
        </div>

        <div class="w3-container w3-center">

            <?php //For loop version - Ex. 2-4
                $i = 0;
                $signs = array("Rat","Ox","Tiger","Rabbit","Dragon","Snake","Horse","Sheep","Monkey","Rooster","Dog","Bear");

                //Build table
                echo "<table class='w3-table w3-striped w3-centered'>";

                    //Create header row and populate
                    echo "<tr>";
                        for($i=0; $i < 12; $i++){
                            echo "<th>";
                                echo $signs[$i];
                                echo "<img src='../img/" . $signs[$i] . ".png' alt='" . $signs[$i] . "' />";
                            echo "</th>";
                        }
                    echo "</tr>";

                    //Build dynamic table
                    $maxYear = date("Y");
                    $year=1912;
                    for($i=$year; $year < $maxYear; $i++){
                        echo"<tr>";
                        for($j = 0;$j < 12; $j++){
                            if($year <= $maxYear){
                                echo "<td>";
                                    echo $year++;
                                echo "</td>";
                            }else{
                                echo "<td>&nbsp;</td>";
                            }
                        }
                        echo"</tr>";
                    }
                echo "</table>";
            ?>
        </div>
        </div><!--/ Card #1-->

        <br/><br/><br/>

    </div> 
