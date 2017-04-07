<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Tyler Hunt" />
      <meta name="revised" content="1/27/17" />
    <meta name="description" content="CS 2623 Server Side Programming" />
    <meta name="keywords" content="...." /> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en-us" /> 
    <!-- icons from https://www.behance.net/gallery/3744045/12-Chinese-Zodiac-->

    <link rel="stylesheet" href="../css/W3C.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <title>CS 2623 - Example 1-6 - Number is even?</title>
</head>
    <body>          
         <!-- Main Content-->
         <!-- Top navbar -->
            <div class="w3-container w3-center w3-dark-grey">
                <h1>CS 2623 SSP - Exercise 1-6</h1>
            </div>

            <div class="w3-container  w3-center w3-grey">
               <a class="w3-btn w3-grey" href="index.html">Projects</a>
                <a class="w3-btn w3-grey" href="Exercise1_1.php">Exercise 1-1</a>
                <a class="w3-btn w3-grey" href="Exercise1_3.php">Exercise 1-3</a>
                <a class="w3-btn w3-grey" href="Exercise1_4.php">Exercise 1-4</a>
                <a class="w3-btn w3-grey" href="Exercise1_5.php">Exercise 1-5</a>
                <a class="w3-btn w3-grey" href="Exercise1_6.php">Exercise 1-6</a>
            </div>
         <!-- / Top navbar -->

         <!--Begin of left third panel-->
         <div class="w3-container w3-third">

              <!-- Left panel-->
            <div class="w3-panel w3-card-2">
                <div class="w3-container w3-red">
                    <h4>Server Side Programming</h4>
                </div>

                   <!-- Left panel-->
                <div class="w3-container">
                    <div class="w3-panel">
                        <a class="w3-btn w3-white" href="index.html">Projects</a><br/>
                        <a class="w3-btn w3-white" href="Exercise1_1.php">Exercise 1-1</a><br/>
                        <a class="w3-btn w3-white" href="Exercise1_3.php">Exercise 1-3</a><br/>
                        <a class="w3-btn w3-white" href="Exercise1_4.php">Exercise 1-4</a><br/>
                        <a class="w3-btn w3-white" href="Exercise1_5.php">Exercise 1-5</a><br/>
                        <a class="w3-btn w3-white" href="Exercise1_6.php">Exercise 1-6</a><br/>
                    </div>
                </div>
            </div>
            <!--/ Left panel-->
            
         </div><!--/ End of left third panel-->


         <!--Begin of Right twothird panel(s)-->
         <div class="w3-container w3-twothird">

            <!-- Card #1-->
            <div class="w3-panel ">
                <div class="w3-container w3-card-2 w3-red">
                    <h6>Number is Even?</h6>
                </div>

                <div class="w3-container">
                   <?php 
                        //isEven.php
                        $num1 = 12;
                        $num2 = 4559.88;
                        $y = "....?";

                        if(is_numeric($num1)){
                            $x = round($num1);
                            $y = $x % 2 == 0 ? " is even.":" is odd.";

                            echo "<p>The number: ", $x, $y, "</p>"; 
                        } 

                        if(is_numeric($num2)){
                            $x = $num2;
                            $y = $x % 2 === 0 ? " is even.":" is odd.";
                            
                            echo "<p>The number: ", $x, $y, "</p>"; 
                        } 
                    ?>
                </div>
            </div><!--/ Card #1-->

            
            <br/><br/><br/>
        
         </div> 

         <!-- / Main Content-->

       <!--Footer-->
         <div class="w3-container w3-bottom w3-center w3-dark-grey">
            <p class='w3-small'>Tyler Hunt - Server Side Programming - CS 2623 &copy;</p>
            <p class="w3-tiny">Oklahoma City Community College does not necessarily endorse the content or respective links of this page</p>
            <p> Contact: <a href="mailto:tyler.hunt@my.occc.edu">tyler.hunt@my.occc.edu</a>  -  Last modified: </p>
            <script type="text/javascript">
                document.write(document.lastModified);
            </script>
         </div>  
          <!--/Footer-->
    </body>
</html>