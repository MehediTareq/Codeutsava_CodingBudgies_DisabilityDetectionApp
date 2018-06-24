
<!DOCTYPE HTML>


<html>
    <head>
        <title>Disability Detection</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <style>
    .inv {
    display: none;
    }
    </style>
    <body class="subpage">
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <!-- Header -->
            <header id="header">
                <div class="logo"><a href="index.html">Transitive <span>by TEMPLATED</span></a></div>
                <a href="#menu" class="toggle"><span>Menu</span></a>
            </header>

        <!-- Nav -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="generic.html">Generic</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </nav>


        <!-- Footer -->
            <footer id="footer1" class="ffooter wrapper">
                <div class="inner">
                    <section>
                        <div class="box">
                            <div class="content">
                                <h2 class="align-center">Result</h2>
                                <hr />
                                    <form action="index.html" method="post">
                                    <div class="field">
                                        <h3>
                                          
                                          <?php
 if(isset($_POST['submit1']))
 {
 $q1= $_POST['radioI1']; 
 $q2= $_POST['radioI2']; 
 $q3= $_POST['radioI3']; 
 $q4= $_POST['radioI4']; 
 $q5= $_POST['radioI5']; 
 $q6= $_POST['radioI6']; 
 $q7= $_POST['radioI7']; 
 $q8= $_POST['radioI8']; 
 $QI=$q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8;
 $total1=($QI/40)*100;
 if ($total1==100) {

      $d1=0;
  }
elseif (75<$total1 && $total1<=99) {

    $d1=1;
}
elseif (50<$total1 && $total1<=75) {

    $d1=2;
}
elseif (25<$total1 && $total1<=50) {

    $d1=3;
}
elseif (0<=$total1 && $total1<=25) {

    $d1=4;
}
$qq1= $_POST['radioII1']; 
$qq2= $_POST['radioII2']; 
$qq3= $_POST['radioII3']; 
$qq4= $_POST['radioII4']; 
$qq5= $_POST['radioII5']; 
$qq6= $_POST['radioII6']; 
$qq7= $_POST['radioII7']; 
$qq8= $_POST['radioII8']; 
$QII=$qq1+$qq2+$qq3+$qq4+$qq5+$qq6+$qq7+$qq8;
$total2=($QII/40)*100;
 if ($total2==100) {

     $d2=0;
 }
elseif (75<$total2 && $total2<=99) {

    $d2=1;
}
elseif (50<$total2 && $total2<=75) {

    $d2=2;
}
elseif (25<$total2 && $total2<=50) {

    $d2=3;
}
elseif (0<=$total2 && $total2<=25) {

    $d2=4;
}
$qqq1= $_POST['radioIII1']; 
$qqq2= $_POST['radioIII2']; 
$qqq3= $_POST['radioIII3']; 
$qqq4= $_POST['radioIII4']; 
$qqq5= $_POST['radioIII5']; 
$qqq6= $_POST['radioIII6']; 
$qqq7= $_POST['radioIII7'];  
$QIII=$qqq1+$qqq2+$qqq3+$qqq4+$qqq5+$qqq6+$qqq7;
$total3=($QIII/35)*100;
 if ($total3==100) {

     $d3=0;
 }
elseif (75<$total3 && $total3<=99) {

    $d3=1;
}
elseif (50<$total3 && $total3<=75) {

    $d3=2;
}
elseif (25<$total2 && $total2<=50) {

    $d3=3;
}
elseif (0<=$total2 && $total2<=25) {

    $d3=4;
}
$Q1= $_POST['radioIV1']; 
$Q2= $_POST['radioIV2']; 
$Q3= $_POST['radioIV3']; 
$Q4= $_POST['radioIV4'];   
$QQ4=$Q1+$Q2+$Q3+$Q4;
$total4=($QQ4/20)*100;
 if ($total4==100) {

     $d4=0;
 }
elseif (75<$total4 && $total4<=99) {

    $d4=1;
}
elseif (50<$total4 && $total4<=75) {

    $d4= 2;
}
elseif (25<$total4 && $total4<=50) {

    $d4= 3;
}
elseif (0<=$total4 && $total4<=25) {

    $d4= 4;
}
$doi=$_POST['doi'];
$totall=$d1+$d2+$d3+$d4;
$totalscore=$totall+$doi;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "disability";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
$username111=$_SESSION["username"];
$sql = "INSERT INTO mental (usern,self, inter, commun, work, total, doi, global)
VALUES ('$username111',$d1,$d2,$d3,$d4,$totall,$doi,$totalscore)";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


                                           if ($totalscore==0) {
                                            $perdisability='0 % ';
                                           }
                                         elseif (1<=$totalscore && $totalscore<=6) {
                                      $perdisability='=<40 %'; 
                                       }
                                      elseif (7<=$totalscore && $totalscore<=13) {
                                             $perdisability='=40-70 %'; 
                                        }
                                     elseif (14<=$totalscore && $totalscore<=19) {
                                          $perdisability='=71-99 %'; 
                                       }
                                     elseif ($totalscore==20) {
                                        $perdisability='100 %'; 
                                         }
                                      if ($totalscore<7) {
                                         $message="you are mentally fit!";
                                           }
                                           else
                                      {
                                    $message="you should consult doctors as soon as possible";
                                     }
                                     echo $perdisability;
                                     echo $message;
                                     $conn->close();
                                 }
                                           ?>
                                        </h3>
                                    </div>
                                
                               <div class="12u$">
                                                <ul class="actions">
                                                    
                                                    <li><input type="submit" value="proceed to Home" class="alt" /></li>
                                                
                                                </ul>
                                            </form>
                                            </div>
                                            </div>     
                </div>
            </div>
        </section>
    </div>
            </footer>

            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>