<!DOCTYPE HTML>

<html>
	<head>
		<title>Hearing Impairment</title>
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
				<div class="logo"><a href="index.html">Disability Detection</a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="index.html#one">About Us</a></li>
					<li><a href="index.html#two">Tests</a></li>
					<li><a href="index.html#four">Contact Us</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="box">
					<div class="content">

					<!-- Elements -->
						<div class="row 200%">
							<div class="12u$">

								<!-- Form -->
								<?php
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
$x=1;
$sql = "SELECT * FROM user ";
$sqll = "SELECT * FROM mental ";
$result = $conn->query($sql);
$resultt = $conn->query($sqll);								
if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) 
    if ($resultt->num_rows > 0) {
  while($roww = $resultt->fetch_assoc()) {
    	if($row['usern']==$roww['usern'])
    	{
        ?>
        
                                 <form method="post" action="#">

											<h3>User Details</h3>
											<hr>

										<div class="row uniform">
											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">First Name</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p> <?php echo $row['firstn']; ?></p>
											</div>

											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">Last Name</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p><?php echo $row['lastn'] ;?> </p>
											</div>
											
											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">Gender</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p><?php echo $row['gndr']; ?> </p>
											</div>

											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">Date of Birth</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p> <?php echo $row['dates']; ?></p>
											</div>

											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">Mobile Number</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p><?php echo $row['mobilen']; ?> </p>
											</div>

											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">E-Mail</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p> <?php echo $row['email'] ;?></p>
											</div>

											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">City</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p> <?php echo $row['city'] ;?></p>
											</div>

						                </div>

											<br>
											<br>

											<h3>User's Response</h3>
											<hr>

											<div class="row uniform">
												<div class="12u$">
													<table>
													  <tr>
													    <th>Self Care</th>
													    <th>Interpersonal Skills</th>
													    <th>Communication & Understanding</th>
													    <th>Work</th>
													    <th>A. Total Score</th>
													    <th>B. DoI Score</th>
													    <th>Global Score (A+B)</th>
													  </tr>
													  <tr>
													    <td><?php echo $roww['self'] ; ?></td>
													    <td><?php echo $roww['inter'] ; ?></td>
													    <td><?php echo $roww['commun'] ; ?></td>
													    <td><?php echo $roww['work'] ; ?></td>
													    <td><?php echo $roww['total'] ; ?></td>
													    <td><?php echo $roww['doi']; ?></td>
													    <td><?php echo $roww['global']; ?></td>
													  </tr>
													</table>
											    </div>
											</div>
									</form>

							</div>
						</div>
						
				
			
<?php
}
}
 }
}
$conn->close();
?>
                                     <form method="post" action="#">

											<h3>User Details</h3>
											<hr>

										<div class="row uniform">
											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">First Name</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p> <?php echo "annu"; ?></p>
											</div>

											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">Last Name</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p><?php echo "soni"; ?> </p>
											</div>
											
											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">Gender</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p><?php echo "female"; ?> </p>
											</div>

											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">Date of Birth</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p> <?php echo "22-09-1997"; ?></p>
											</div>

											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">Mobile Number</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p><?php echo "8962469267"; ?> </p>
											</div>

											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">E-Mail</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p> <?php echo "annu@gmail.com"; ?></p>
											</div>

											<div class="3u 12u$(xsmall)">
												<p class="black" style="text-align: center;">City</p>
											</div>
											<div class="9u$ 12u$(xsmall)">
												<p> <?php echo "raipur"; ?></p>
											</div>

						                </div>

											<br>
											<br>

											<h3>User's Response</h3>
											<hr>

											<div class="row uniform">
												<div class="12u$">
													<table>
													  <tr>
													    <th>Self Care</th>
													    <th>Interpersonal Skills</th>
													    <th>Communication & Understanding</th>
													    <th>Work</th>
													    <th>A. Total Score</th>
													    <th>B. DoI Score</th>
													    <th>Global Score (A+B)</th>
													  </tr>
													  <tr>
													    <td><?php echo "2"; ?></td>
													    <td><?php echo "2"; ?></td>
													    <td><?php echo "2"; ?></td>
													    <td><?php echo "3"; ?></td>
													    <td><?php echo "9"; ?></td>
													    <td><?php echo "2"; ?></td>
													    <td><?php echo "11"; ?></td>
													  </tr>
													</table>
											    </div>
											</div>
									</form>

							</div>
						</div>
						</div>
					</div>
				</div>
			</section>	

									


		

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
			<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	</body>
</html>