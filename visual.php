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
if(isset($_POST['submit5']))
 {
$r1= $_POST['input1r'];
if($r1 == NULL)
{
	$r1 = 95;
}
$r2= $_POST['input2r'];
if($r2 == NULL)
{
	$r2 = 95;
}
$r3= $_POST['input3r'];
if($r3 == NULL)
{
	$r3 = 95;
}
$r4= $_POST['input4r'];
if($r4 == NULL)
{
	$r4 = 95;
}


$l1= $_POST['input1l'];
if($l1 == NULL)
{
	$l1 = 95;
}
$l2= $_POST['input2l'];
if($l2 == NULL)
{
	$l2 = 95;
}
$l3= $_POST['input3l'];
if($l3 == NULL)
{
	$l3 = 95;
}
$l4= $_POST['input4l'];
if($l4 == NULL)
{
	$l4 = 95;
}

$R=$r1+$r2+$r3+$r4;
$tr=$R/4;
$tre=abs($tr);

$L=$l1+$l2+$l3+$l4;
$tl=$L/4;
$tle=abs($tl);




if($tre>=0 && $tre<=25)
{
	$dr=0;
}
elseif($tre>=26 && $tre<=33)
{
	$dr=1;
}
else
{
	switch($tre)
	{
		case 34: 
				$dr=2;
				break;

		case 35: 
				$dr=3;
				break;

		case 36: 
				$dr=4;
				break;

		case 37: 
				$dr=5;
				break;

		case 38: 
				$dr=6;
				break;

		case 39: 
				$dr=7;
				break;

		case 40: 
				$dr=8;
				break;

		case 41: 
				$dr=9;
				break;

		case 42: 
				$dr=10;
				break;

		case 43: 
				$dr=11;
				break;

		case 44: 
				$dr=12;
				break;

		case 45: 
				$dr=13;
				break;

		case 46: 
				$dr=14;
				break;

		case 47: 
				$dr=15;
				break;

		case 48: 
				$dr=16;
				break;

		case 49: 
				$dr=17;
				break;

		case 50: 
				$dr=18;
				break;

		case 51: 
				$dr=19;
				break;

		case 52: 
				$dr=20;
				break;

		case 53: 
				$dr=21;
				break;

		case 54: 
				$dr=22;
				break;

		case 55: 
				$dr=23;
				break;

		case 56: 
				$dr=24;
				break;

		case 57: 
				$dr=25;
				break;

		case 58: 
				$dr=26;
				break;

		case 59: 
				$dr=27;
				break;

		case 60: 
				$dr=40;
				break;

		case 61: 
				$dr=41.71;
				break;

		case 62: 
				$dr=43.42;
				break;

		case 63: 
				$dr=45.13;
				break;

		case 64: 
				$dr=46.84;
				break;

		case 65: 
				$dr=48.55;
				break;

		case 66: 
				$dr=50.26;
				break;

		case 67: 
				$dr=51.97;
				break;

		case 68: 
				$dr=53.68;
				break;

		case 69: 
				$dr=55.39;
				break;

		case 70: 
				$dr=57.1;
				break;

		case 71: 
				$dr=58.81;
				break;

		case 72: 
				$dr=60.52;
				break;

		case 73: 
				$dr=62.23;
				break;

		case 74: 
				$dr=63.94;
				break;

		case 75: 
				$dr=65.65;
				break;

		case 76: 
				$dr=67.36;
				break;

		case 77: 
				$dr=69.07;
				break;

		case 78: 
				$dr=70.78;
				break;

		case 79: 
				$dr=72.49;
				break;

		case 80: 
				$dr=74.2;
				break;

		case 81: 
				$dr=75.91;
				break;

		case 82: 
				$dr=77.62;
				break;

		case 83: 
				$dr=79.33;
				break;

		case 84: 
				$dr=81.04;
				break;

		case 85: 
				$dr=82.75;
				break;

		case 86: 
				$dr=84.46;
				break;

		case 87: 
				$dr=86.17;
				break;

		case 88: 
				$dr=87.88;
				break;

		case 89: 
				$dr=89.59;
				break;

		case 90: 
				$dr=91.3;
				break;

		case 91: 
				$dr=93.01;
				break;

		case 92: 
				$dr=94.72;
				break;

		case 93: 
				$dr=96.43;
				break;

		case 94: 
				$dr=98.14;
				break;

		case 95: 
				$dr=100;
				break;
	}
}




if($tle>=0 && $tle<=25)
{
	$dl=0;
}
elseif($tle>=26 && $tle<=33)
{
	$dl=1;
}
else
{
	switch($tle)
	{
		case 34: 
				$dl=2;
				break;

		case 35: 
				$dl=3;
				break;

		case 36: 
				$dl=4;
				break;

		case 37: 
				$dl=5;
				break;

		case 38: 
				$dl=6;
				break;

		case 39: 
				$dl=7;
				break;

		case 40: 
				$dl=8;
				break;

		case 41: 
				$dl=9;
				break;

		case 42: 
				$dl=10;
				break;

		case 43: 
				$dl=11;
				break;

		case 44: 
				$dl=12;
				break;

		case 45: 
				$dl=13;
				break;

		case 46: 
				$dl=14;
				break;

		case 47: 
				$dl=15;
				break;

		case 48: 
				$dl=16;
				break;

		case 49: 
				$dl=17;
				break;

		case 50: 
				$dl=18;
				break;

		case 51: 
				$dl=19;
				break;

		case 52: 
				$dl=20;
				break;

		case 53: 
				$dl=21;
				break;

		case 54: 
				$dl=22;
				break;

		case 55: 
				$dl=23;
				break;

		case 56: 
				$dl=24;
				break;

		case 57: 
				$dl=25;
				break;

		case 58: 
				$dl=26;
				break;

		case 59: 
				$dl=27;
				break;

		case 60: 
				$dl=40;
				break;

		case 61: 
				$dl=41.71;
				break;

		case 62: 
				$dl=43.42;
				break;

		case 63: 
				$dl=45.13;
				break;

		case 64: 
				$dl=46.84;
				break;

		case 65: 
				$dl=48.55;
				break;

		case 66: 
				$dl=50.26;
				break;

		case 67: 
				$dl=51.97;
				break;

		case 68: 
				$dl=53.68;
				break;

		case 69: 
				$dl=55.39;
				break;

		case 70: 
				$dl=57.1;
				break;

		case 71: 
				$dl=58.81;
				break;

		case 72: 
				$dl=60.52;
				break;

		case 73: 
				$dl=62.23;
				break;

		case 74: 
				$dl=63.94;
				break;

		case 75: 
				$dl=65.65;
				break;

		case 76: 
				$dl=67.36;
				break;

		case 77: 
				$dl=69.07;
				break;

		case 78: 
				$dl=70.78;
				break;

		case 79: 
				$dl=72.49;
				break;

		case 80: 
				$dl=74.2;
				break;

		case 81: 
				$dl=75.91;
				break;

		case 82: 
				$dl=77.62;
				break;

		case 83: 
				$dl=79.33;
				break;

		case 84: 
				$dl=81.04;
				break;

		case 85: 
				$dl=82.75;
				break;

		case 86: 
				$dl=84.46;
				break;

		case 87: 
				$dl=86.17;
				break;

		case 88: 
				$dl=87.88;
				break;

		case 89: 
				$dl=89.59;
				break;

		case 90: 
				$dl=91.3;
				break;

		case 91: 
				$dl=93.01;
				break;

		case 92: 
				$dl=94.72;
				break;

		case 93: 
				$dl=96.43;
				break;

		case 94: 
				$dl=98.14;
				break;

		case 95: 
				$dl=100;
				break;
	}
}
if($dr<$dl) {
	$poor=$dl;
	$better=$dr;
}
else
{
	$poor=$dr;
	$better=$dl;
}
$per=(($better*5)+$poor)/6;
echo $per;
echo " % disability";
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
$userna=$_SESSION["username"];
$sql = "INSERT INTO visual (usern,leftp,rightp,per)
VALUES ('$userna',$dr,$dl,$per)";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

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
