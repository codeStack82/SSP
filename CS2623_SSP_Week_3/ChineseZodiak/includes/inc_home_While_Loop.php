
<!--Begin of Right panel(s)-->
    <div class="w3-container w3-rest">

    <!-- Card #1-->
    <div class="w3-panel ">
        <div class="w3-container w3-card-2 w3-blue">
            <h5>Chinese Zodiak - Year Distribution Table</h5>
        </div>

        <div class="w3-container w3-center">

        <?php //While loop version 2-5
            $i = 0;
            $signs = array("Rat","Ox","Tiger","Rabbit","Dragon","Snake","Horse","Sheep","Monkey","Rooster","Dog","Bear");

            //Build table
            echo "<table class='w3-table w3-striped w3-centered'>";
                //Create header row
                echo "<tr>";
                    while($i < 12){
                        echo "<th>";
                            echo $signs[$i];
                            echo "<img src='../img/" . $signs[$i] . ".png' alt='" . $signs[$i] . "' />";
                        echo "</th>";
                        $i++;
                    }
                echo "</tr>";

                //Build dynamic table
                $year = 1912;
                $maxYear = date("Y");
                while($year < $maxYear){
                    $i=0;
                    echo"<tr>";
                    while($i < 12){
                        if($year <= $maxYear){
                            echo "<td>";
                                echo $year++;
                            echo "</td>";
                        }else{
                            echo "<td>&nbsp;</td>";
                        }
                        $i++;
                    }
                    echo"</tr>";
                }
            echo "</table>";
        ?>

        </div>
        </div><!--/ Card #1-->

        <br/><br/><br/>

    </div> 
    <!-- / Main Content-->

