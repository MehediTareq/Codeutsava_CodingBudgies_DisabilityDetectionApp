<!DOCTYPE HTML>

<html>
	<head>
		<title>Mental Illness</title>
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

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">Disability Detection</a></div>
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
								<h2 class="align-center">Rules</h2>
								<div class="field">
									<ul>
										<li>Rate 1 for most negative respose/worst case/lowest frequency.</li>
										<li>Rate 2 for negative respose/bad case/low frequency.</li>
										<li>Rate 3 for mediocre respose/average case/average frequency.</li>
										<li>Rate 4 for positive respose/good case/high frequency.</li>
										<li>Rate 5 for most positive respose/best case/highest frequency.</li>
									</ul>
								</div>
								<hr />
								<h2 class="align-center">Self Care</h2>
								<hr />
								<form action="disability.php" method="post">
									<div class="field">
										<label for="radioI1">Maintenance of personal hygiene and physical health.</label>
										<input id="radioI1.1" type="radio" name="radioI1" value="1"> 
										<label for="radioI1.1">1</label>
									    <input id="radioI1.2" type="radio" name="radioI1" value="2"> 
									    <label for="radioI1.2">2</label>
										<input id="radioI1.3" type="radio" name="radioI1" value="3"> 
										<label for="radioI1.3">3</label>  
										<input id="radioI1.4" type="radio" name="radioI1" value="4"> 
										<label for="radioI1.4">4</label> 
										<input id="radioI1.5" type="radio" name="radioI1" value="5"> 
										<label for="radioI1.5">5</label> 
									</div>
									<div class="field">
										<label for="radioI2">Eating habits.</label>
										<input id="radioI2.1" type="radio" name="radioI2" value="1"> 
										<label for="radioI2.1">1</label>
									    <input id="radioI2.2" type="radio" name="radioI2" value="2"> 
									    <label for="radioI2.2">2</label>
										<input id="radioI2.3" type="radio" name="radioI2" value="3"> 
										<label for="radioI2.3">3</label>  
										<input id="radioI2.4" type="radio" name="radioI2" value="4"> 
										<label for="radioI2.4">4</label> 
										<input id="radioI2.5" type="radio" name="radioI2" value="5"> 
										<label for="radioI2.5">5</label> 
									</div>
									<div class="field">
										<label for="radioI3">Maintenance of personal belongings and living space.</label>
										<input id="radioI3.1" type="radio" name="radioI3" value="1"> 
										<label for="radioI3.1">1</label>
									    <input id="radioI3.2" type="radio" name="radioI3" value="2"> 
									    <label for="radioI3.2">2</label>
										<input id="radioI3.3" type="radio" name="radioI3" value="3"> 
										<label for="radioI3.3">3</label>  
										<input id="radioI3.4" type="radio" name="radioI3" value="4"> 
										<label for="radioI3.4">4</label> 
										<input id="radioI3.5" type="radio" name="radioI3" value="5"> 
										<label for="radioI3.5">5</label> 
									</div>
									<div class="field">
										<label for="radioI4">Do you look after yourself, wash your clothes regularly, take a bath and brush your teeth?</label>
										<input id="radioI4.1" type="radio" name="radioI4" value="1"> 
										<label for="radioI4.1">1</label>
									    <input id="radioI4.2" type="radio" name="radioI4" value="2"> 
									    <label for="radioI4.2">2</label>
										<input id="radioI4.3" type="radio" name="radioI4" value="3"> 
										<label for="radioI4.3">3</label>  
										<input id="radioI4.4" type="radio" name="radioI4" value="4"> 
										<label for="radioI4.4">4</label> 
										<input id="radioI4.5" type="radio" name="radioI4" value="5"> 
										<label for="radioI4.5">5</label> 
									</div>
									<div class="field">
										<label for="radioI5">Do you have regular meals? </label>
										<input id="radioI5.1" type="radio" name="radioI5" value="1"> 
										<label for="radioI5.1">1</label>
									    <input id="radioI5.2" type="radio" name="radioI5" value="2"> 
									    <label for="radioI5.2">2</label>
										<input id="radioI5.3" type="radio" name="radioI5" value="3"> 
										<label for="radioI5.3">3</label>  
										<input id="radioI5.4" type="radio" name="radioI5" value="4"> 
										<label for="radioI5.4">4</label> 
										<input id="radioI5.5" type="radio" name="radioI5" value="5"> 
										<label for="radioI5.5">5</label> 
									</div>
									<div class="field">
										<label for="radioI6">Do you take food of right quality and quantity?</label>
										<input id="radioI6.1" type="radio" name="radioI6" value="1"> 
										<label for="radioI6.1">1</label>
									    <input id="radioI6.2" type="radio" name="radioI6" value="2"> 
									    <label for="radioI6.2">2</label>
										<input id="radioI6.3" type="radio" name="radioI6" value="3"> 
										<label for="radioI6.3">3</label>  
										<input id="radioI6.4" type="radio" name="radioI6" value="4"> 
										<label for="radioI6.4">4</label> 
										<input id="radioI6.5" type="radio" name="radioI6" value="5"> 
										<label for="radioI6.5">5</label> 
									</div>
									<div class="field">
										<label for="radioI7">What about your table manners? </label>
										<input id="radioI7.1" type="radio" name="radioI7" value="1"> 
										<label for="radioI7.1">1</label>
									    <input id="radioI7.2" type="radio" name="radioI7" value="2"> 
									    <label for="radioI7.2">2</label>
										<input id="radioI7.3" type="radio" name="radioI7" value="3"> 
										<label for="radioI7.3">3</label>  
										<input id="radioI7.4" type="radio" name="radioI7" value="4"> 
										<label for="radioI7.4">4</label> 
										<input id="radioI7.5" type="radio" name="radioI7" value="5"> 
										<label for="radioI7.5">5</label> 
									</div>
									<div class="field">
										<label for="radioI8">Do you take care of personal belongings with reasonable standard of cleanliness and orderliness?</label>
										<input id="radioI8.1" type="radio" name="radioI8" value="1"> 
										<label for="radioI8.1">1</label>
									    <input id="radioI8.2" type="radio" name="radioI8" value="2"> 
									    <label for="radioI8.2">2</label>
										<input id="radioI8.3" type="radio" name="radioI8" value="3"> 
										<label for="radioI8.3">3</label>  
										<input id="radioI8.4" type="radio" name="radioI8" value="4"> 
										<label for="radioI8.4">4</label> 
										<input id="radioI8.5" type="radio" name="radioI8" value="5"> 
										<label for="radioI8.5">5</label> 
									</div>
									<br>
									<h2 class="align-center">Inter Personal Activities</h2>
								    <hr />
								    <div class="field">
										<label for="radioII1"> Rate your behaviour with others? </label>
										<input id="radioII1.1" type="radio" name="radioII1" value="1"> 
										<label for="radioII1.1">1</label>
									    <input id="radioII1.2" type="radio" name="radioII1" value="2"> 
									    <label for="radioII1.2">2</label>
										<input id="radioII1.3" type="radio" name="radioII1" value="3"> 
										<label for="radioII1.3">3</label>  
										<input id="radioII1.4" type="radio" name="radioII1" value="4"> 
										<label for="radioII1.4">4</label> 
										<input id="radioII1.5" type="radio" name="radioII1" value="5"> 
										<label for="radioII1.5">5</label> 
									</div>
									<div class="field">
										<label for="radioII2"> Are you polite? </label>
										<input id="radioII2.1" type="radio" name="radioII2" value="1"> 
										<label for="radioII2.1">1</label>
									    <input id="radioII2.2" type="radio" name="radioII2" value="2"> 
									    <label for="radioII2.2">2</label>
										<input id="radioII2.3" type="radio" name="radioII2" value="3"> 
										<label for="radioII2.3">3</label>  
										<input id="radioII2.4" type="radio" name="radioII2" value="4"> 
										<label for="radioII2.4">4</label> 
										<input id="radioII2.5" type="radio" name="radioII2" value="5"> 
										<label for="radioII2.5">5</label> 
									</div>
									<div class="field">
										<label for="radioII3"> Do you respond to questions? Rate you interaction with others. </label>
										<input id="radioII3.1" type="radio" name="radioII3" value="1"> 
										<label for="radioII3.1">1</label>
									    <input id="radioII3.2" type="radio" name="radioII3" value="2"> 
									    <label for="radioII3.2">2</label>
										<input id="radioII3.3" type="radio" name="radioII3" value="3"> 
										<label for="radioII3.3">3</label>  
										<input id="radioII3.4" type="radio" name="radioII3" value="4"> 
										<label for="radioII3.4">4</label> 
										<input id="radioII3.5" type="radio" name="radioII3" value="5"> 
										<label for="radioII3.5">5</label> 
									</div>
									<div class="field">
										<label for="radioII4"> Are you able to regulate verbal and physical aggression? </label>
										<input id="radioII4.1" type="radio" name="radioII4" value="1"> 
										<label for="radioII4.1">1</label>
									    <input id="radioII4.2" type="radio" name="radioII4" value="2"> 
									    <label for="radioII4.2">2</label>
										<input id="radioII4.3" type="radio" name="radioII4" value="3"> 
										<label for="radioII4.3">3</label>  
										<input id="radioII4.4" type="radio" name="radioII4" value="4"> 
										<label for="radioII4.4">4</label> 
										<input id="radioII4.5" type="radio" name="radioII4" value="5"> 
										<label for="radioII4.5">5</label> 
									</div>
									<div class="field">
										<label for="radioII5"> Are you able to act independently in social interactions? </label>
										<input id="radioII5.1" type="radio" name="radioII5" value="1"> 
										<label for="radioII5.1">1</label>
									    <input id="radioII5.2" type="radio" name="radioII5" value="2"> 
									    <label for="radioII5.2">2</label>
										<input id="radioII5.3" type="radio" name="radioII5" value="3"> 
										<label for="radioII5.3">3</label>  
										<input id="radioII5.4" type="radio" name="radioII5" value="4"> 
										<label for="radioII5.4">4</label> 
										<input id="radioII5.5" type="radio" name="radioII5" value="5"> 
										<label for="radioII5.5">5</label> 
									</div>
									<div class="field">
										<label for="radioII6"> Rate your behaviour with strangers? </label>
										<input id="radioII6.1" type="radio" name="radioII6" value="1"> 
										<label for="radioII6.1">1</label>
									    <input id="radioII6.2" type="radio" name="radioII6" value="2"> 
									    <label for="radioII6.2">2</label>
										<input id="radioII6.3" type="radio" name="radioII6" value="3"> 
										<label for="radioII6.3">3</label>  
										<input id="radioII6.4" type="radio" name="radioII6" value="4"> 
										<label for="radioII6.4">4</label> 
										<input id="radioII6.5" type="radio" name="radioII6" value="5"> 
										<label for="radioII6.5">5</label> 
									</div>
									<div class="field">
										<label for="radioII7"> Are you able to maintain friendship? </label>
										<input id="radioII7.1" type="radio" name="radioII7" value="1"> 
										<label for="radioII7.1">1</label>
									    <input id="radioII7.2" type="radio" name="radioII7" value="2"> 
									    <label for="radioII7.2">2</label>
										<input id="radioII7.3" type="radio" name="radioII7" value="3"> 
										<label for="radioII7.3">3</label>  
										<input id="radioII7.4" type="radio" name="radioII7" value="4"> 
										<label for="radioII7.4">4</label> 
										<input id="radioII7.5" type="radio" name="radioII7" value="5"> 
										<label for="radioII7.5">5</label> 
									</div>
									<div class="field">
										<label for="radioII8"> Do you show physical expression of affection and desire? </label>
										<input id="radioII8.1" type="radio" name="radioII8" value="1"> 
										<label for="radioII8.1">1</label>
									    <input id="radioII8.2" type="radio" name="radioII8" value="2"> 
									    <label for="radioII8.2">2</label>
										<input id="radioII8.3" type="radio" name="radioII8" value="3"> 
										<label for="radioII8.3">3</label>  
										<input id="radioII8.4" type="radio" name="radioII8" value="4"> 
										<label for="radioII8.4">4</label> 
										<input id="radioII8.5" type="radio" name="radioII8" value="5"> 
										<label for="radioII8.5">5</label> 
									</div>
									<h2 class="align-center">Communication and Understanding</h2>
								    <hr />
								    <div class="field">
										<label for="radioIII1"> Do you avoid talking to people? </label>
										<input id="radioIII1.1" type="radio" name="radioIII1" value="1"> 
										<label for="radioIII1.1">1</label>
									    <input id="radioIII1.2" type="radio" name="radioIII1" value="2"> 
									    <label for="radioIII1.2">2</label>
										<input id="radioIII1.3" type="radio" name="radioIII1" value="3"> 
										<label for="radioIII1.3">3</label>  
										<input id="radioIII1.4" type="radio" name="radioIII1" value="4"> 
										<label for="radioIII1.4">4</label> 
										<input id="radioIII1.5" type="radio" name="radioIII1" value="5"> 
										<label for="radioIII1.5">5</label> 
									</div>
									<div class="field">
										<label for="radioIII2"> When people come home how well do you respond and react? Rate. </label>
										<input id="radioIII2.1" type="radio" name="radioIII2" value="1"> 
										<label for="radioIII2.1">1</label>
									    <input id="radioIII2.2" type="radio" name="radioIII2" value="2"> 
									    <label for="radioIII2.2">2</label>
										<input id="radioIII2.3" type="radio" name="radioIII2" value="3"> 
										<label for="radioIII2.3">3</label>  
										<input id="radioIII2.4" type="radio" name="radioIII2" value="4"> 
										<label for="radioIII2.4">4</label> 
										<input id="radioIII2.5" type="radio" name="radioIII2" value="5"> 
										<label for="radioIII2.5">5</label> 
									</div>
									<div class="field">
										<label for="radioIII3"> Do you ever visit others? Rate on the basis of frequency. </label>
										<input id="radioIII3.1" type="radio" name="radioIII3" value="1"> 
										<label for="radioIII3.1">1</label>
									    <input id="radioIII3.2" type="radio" name="radioIII3" value="2"> 
									    <label for="radioIII3.2">2</label>
										<input id="radioIII3.3" type="radio" name="radioIII3" value="3"> 
										<label for="radioIII3.3">3</label>  
										<input id="radioIII3.4" type="radio" name="radioIII3" value="4"> 
										<label for="radioIII3.4">4</label> 
										<input id="radioIII3.5" type="radio" name="radioIII3" value="5"> 
										<label for="radioIII3.5">5</label> 
									</div>
									<div class="field">
										<label for="radioIII4"> Are you able to start, maintain and end a conversation? </label>
										<input id="radioIII4.1" type="radio" name="radioIII4" value="1"> 
										<label for="radioIII4.1">1</label>
									    <input id="radioIII4.2" type="radio" name="radioIII4" value="2"> 
									    <label for="radioIII4.2">2</label>
										<input id="radioIII4.3" type="radio" name="radioIII4" value="3"> 
										<label for="radioIII4.3">3</label>  
										<input id="radioIII4.4" type="radio" name="radioIII4" value="4"> 
										<label for="radioIII4.4">4</label> 
										<input id="radioIII4.5" type="radio" name="radioIII4" value="5"> 
										<label for="radioIII4.5">5</label> 
									</div>
									<div class="field">
										<label for="radioIII5"> Do you understand body language and emotions of others such as smiling, crying, screaming, etc.? </label>
										<input id="radioIII5.1" type="radio" name="radioIII5" value="1"> 
										<label for="radioIII5.1">1</label>
									    <input id="radioIII5.2" type="radio" name="radioIII5" value="2"> 
									    <label for="radioIII5.2">2</label>
										<input id="radioIII5.3" type="radio" name="radioIII5" value="3"> 
										<label for="radioIII5.3">3</label>  
										<input id="radioIII5.4" type="radio" name="radioIII5" value="4"> 
										<label for="radioIII5.4">4</label> 
										<input id="radioIII5.5" type="radio" name="radioIII5" value="5"> 
										<label for="radioIII5.5">5</label> 
									</div>
									<div class="field">
										<label for="radioIII6"> Do you indulge in reading and writing? How often? Rate on the basis of frequency. </label>
										<input id="radioIII6.1" type="radio" name="radioIII6" value="1"> 
										<label for="radioIII6.1">1</label>
									    <input id="radioIII6.2" type="radio" name="radioIII6" value="2"> 
									    <label for="radioIII6.2">2</label>
										<input id="radioIII6.3" type="radio" name="radioIII6" value="3"> 
										<label for="radioIII6.3">3</label>  
										<input id="radioIII6.4" type="radio" name="radioIII6" value="4"> 
										<label for="radioIII6.4">4</label> 
										<input id="radioIII6.5" type="radio" name="radioIII6" value="5"> 
										<label for="radioIII6.5">5</label> 
									</div>
									<div class="field">
										<label for="radioIII7"> Does someone encourage you to be more sociable? </label>
										<input id="radioIII7.1" type="radio" name="radioIII7" value="1"> 
										<label for="radioIII7.1">1</label>
									    <input id="radioIII7.2" type="radio" name="radioIII7" value="2"> 
									    <label for="radioIII7.2">2</label>
										<input id="radioIII7.3" type="radio" name="radioIII7" value="3"> 
										<label for="radioIII7.3">3</label>  
										<input id="radioIII7.4" type="radio" name="radioIII7" value="4"> 
										<label for="radioIII7.4">4</label> 
										<input id="radioIII7.5" type="radio" name="radioIII7" value="5"> 
										<label for="radioIII7.5">5</label> 
									</div>
									<h2 class="align-center">Work</h2>
								    <hr />
								    <select id="target">
							            <option value="">Select...</option>
							            <option value="content_1">Employed</option>
							            <option value="content_2">Housewife</option>
							            <option value="content_3">Student</option>
								    </select>
								<div id="content_1" class="inv">
									<div class="field">
										<label for="radioIV1"> Do you go to work regularly? </label>
										<input id="radioIV1.1.1" type="radio" name="radioIV1" value="1"> 
										<label for="radioIV1.1.1">1</label>
									    <input id="radioIV1.2.1" type="radio" name="radioIV1" value="2"> 
									    <label for="radioIV1.2.1">2</label>
										<input id="radioIV1.3.1" type="radio" name="radioIV1" value="3"> 
										<label for="radioIV1.3.1">3</label>  
										<input id="radioIV1.4.1" type="radio" name="radioIV1" value="4"> 
										<label for="radioIV1.4.1">4</label> 
										<input id="radioIV1.5.1" type="radio" name="radioIV1" value="5"> 
										<label for="radioIV1.5.1">5</label> 
									</div>
									<div class="field">
										<label for="radioIV2"> Do you like your job and are you coping well with it? </label>
										<input id="radioIV2.1.1" type="radio" name="radioIV2" value="1"> 
										<label for="radioIV2.1.1">1</label>
									    <input id="radioIV2.2.1" type="radio" name="radioIV2" value="2"> 
									    <label for="radioIV2.2.1">2</label>
										<input id="radioIV2.3.1" type="radio" name="radioIV2" value="3"> 
										<label for="radioIV2.3.1">3</label>  
										<input id="radioIV2.4.1" type="radio" name="radioIV2" value="4"> 
										<label for="radioIV2.4.1">4</label> 
										<input id="radioIV2.5.1" type="radio" name="radioIV2" value="5"> 
										<label for="radioIV2.5.1">5</label> 
									</div>
									<div class="field">
										<label for="radioIV3"> Can anyone rely on you financially? How well can you support others (like family)? </label>
										<input id="radioIV3.1.1" type="radio" name="radioIV3" value="1"> 
										<label for="radioIV3.1.1">1</label>
									    <input id="radioIV3.2.1" type="radio" name="radioIV3" value="2"> 
									    <label for="radioIV3.2.1">2</label>
										<input id="radioIV3.3.1" type="radio" name="radioIV3" value="3"> 
										<label for="radioIV3.3.1">3</label>  
										<input id="radioIV3.4.1" type="radio" name="radioIV3" value="4"> 
										<label for="radioIV3.4.1">4</label> 
										<input id="radioIV3.5.1" type="radio" name="radioIV3" value="5"> 
										<label for="radioIV3.5.1">5</label> 
									</div>
									<div class="field">
										<label for="radioIV4"> Do you make efforts to get promoted? </label>
										<input id="radioIV4.1.1" type="radio" name="radioIV4" value="1"> 
										<label for="radioIV4.1.1">1</label>
									    <input id="radioIV4.2.1" type="radio" name="radioIV4" value="2"> 
									    <label for="radioIV4.2.1">2</label>
										<input id="radioIV4.3.1" type="radio" name="radioIV4" value="3"> 
										<label for="radioIV4.3.1">3</label>  
										<input id="radioIV4.4.1" type="radio" name="radioIV4" value="4"> 
										<label for="radioIV4.4.1">4</label> 
										<input id="radioIV4.5.1" type="radio" name="radioIV4" value="5"> 
										<label for="radioIV4.5.1">5</label> 
									</div>
								</div>
								<div id="content_2" class="inv">
									<div class="field">
										<label for="radioIV1"> Do you work regularly? </label>
										<input id="radioIV1.1.2" type="radio" name="radioIV1" value="1"> 
										<label for="radioIV1.1.2">1</label>
									    <input id="radioIV1.2.2" type="radio" name="radioIV1" value="2"> 
									    <label for="radioIV1.2.2">2</label>
										<input id="radioIV1.3.2" type="radio" name="radioIV1" value="3"> 
										<label for="radioIV1.3.2">3</label>  
										<input id="radioIV1.4.2" type="radio" name="radioIV1" value="4"> 
										<label for="radioIV1.4.2">4</label> 
										<input id="radioIV1.5.2" type="radio" name="radioIV1" value="5"> 
										<label for="radioIV1.5.2">5</label> 
									</div>
									<div class="field">
										<label for="radioIV2"> Do you like doing household works and are you coping well with it? </label>
										<input id="radioIV2.1.2" type="radio" name="radioIV2" value="1"> 
										<label for="radioIV2.1.2">1</label>
									    <input id="radioIV2.2.2" type="radio" name="radioIV2" value="2"> 
									    <label for="radioIV2.2.2">2</label>
										<input id="radioIV2.3.2" type="radio" name="radioIV2" value="3"> 
										<label for="radioIV2.3.2">3</label>  
										<input id="radioIV2.4.2" type="radio" name="radioIV2" value="4"> 
										<label for="radioIV2.4.2">4</label> 
										<input id="radioIV2.5.2" type="radio" name="radioIV2" value="5"> 
										<label for="radioIV2.5.2">5</label> 
									</div>
									<div class="field">
										<label for="radioIV3"> How well can you support others (like family)? </label>
										<input id="radioIV3.1.2" type="radio" name="radioIV3" value="1"> 
										<label for="radioIV3.1.2">1</label>
									    <input id="radioIV3.2.2" type="radio" name="radioIV3" value="2"> 
									    <label for="radioIV3.2.2">2</label>
										<input id="radioIV3.3.2" type="radio" name="radioIV3" value="3"> 
										<label for="radioIV3.3.2">3</label>  
										<input id="radioIV3.4.2" type="radio" name="radioIV3" value="4"> 
										<label for="radioIV3.4.2">4</label> 
										<input id="radioIV3.5.2" type="radio" name="radioIV3" value="5"> 
										<label for="radioIV3.5.2">5</label> 
									</div>
									<div class="field">
										<label for="radioIV4"> Do you make efforts to improve yourself? </label>
										<input id="radioIV4.1.2" type="radio" name="radioIV4" value="1"> 
										<label for="radioIV4.1.2">1</label>
									    <input id="radioIV4.2.2" type="radio" name="radioIV4" value="2"> 
									    <label for="radioIV4.2.2">2</label>
										<input id="radioIV4.3.2" type="radio" name="radioIV4" value="3"> 
										<label for="radioIV4.3.2">3</label>  
										<input id="radioIV4.4.2" type="radio" name="radioIV4" value="4"> 
										<label for="radioIV4.4.2">4</label> 
										<input id="radioIV4.5.2" type="radio" name="radioIV4" value="5"> 
										<label for="radioIV4.5.2">5</label> 
									</div>
								</div>
								<div id="content_3" class="inv">
									<div class="field">
										<label for="radioIV1"> Do you study regularly? </label>
										<input id="radioIV1.1.3" type="radio" name="radioIV1" value="1"> 
										<label for="radioIV1.1.3">1</label>
									    <input id="radioIV1.2.3" type="radio" name="radioIV1" value="2"> 
									    <label for="radioIV1.2.3">2</label>
										<input id="radioIV1.3.3" type="radio" name="radioIV1" value="3"> 
										<label for="radioIV1.3.3">3</label>  
										<input id="radioIV1.4.3" type="radio" name="radioIV1" value="4"> 
										<label for="radioIV1.4.3">4</label> 
										<input id="radioIV1.5.3" type="radio" name="radioIV1" value="5"> 
										<label for="radioIV1.5.3">5</label> 
									</div>
									<div class="field">
										<label for="radioIV2"> Do you like your subjects and are you coping well with your studies? </label>
										<input id="radioIV2.1.3" type="radio" name="radioIV2" value="1"> 
										<label for="radioIV2.1.3">1</label>
									    <input id="radioIV2.2.3" type="radio" name="radioIV2" value="2"> 
									    <label for="radioIV2.2.3">2</label>
										<input id="radioIV2.3.3" type="radio" name="radioIV2" value="3"> 
										<label for="radioIV2.3.3">3</label>  
										<input id="radioIV2.4.3" type="radio" name="radioIV2" value="4"> 
										<label for="radioIV2.4.3">4</label> 
										<input id="radioIV2.5.3" type="radio" name="radioIV2" value="5"> 
										<label for="radioIV2.5.3">5</label> 
									</div>
									<div class="field">
										<label for="radioIV3"> Do you rely on anyone financially? How much support do you require from others (like family)? </label>
										<input id="radioIV3.1.3" type="radio" name="radioIV3" value="1"> 
										<label for="radioIV3.1.3">1</label>
									    <input id="radioIV3.2.3" type="radio" name="radioIV3" value="2"> 
									    <label for="radioIV3.2.3">2</label>
										<input id="radioIV3.3.3" type="radio" name="radioIV3" value="3"> 
										<label for="radioIV3.3.3">3</label>  
										<input id="radioIV3.4.3" type="radio" name="radioIV3" value="4"> 
										<label for="radioIV3.4.3">4</label> 
										<input id="radioIV3.5.3" type="radio" name="radioIV3" value="5"> 
										<label for="radioIV3.5.3">5</label> 
									</div>
									<div class="field">
										<label for="radioIV4"> Do you make efforts to get better grades? </label>
										<input id="radioIV4.1.3" type="radio" name="radioIV4" value="1"> 
										<label for="radioIV4.1.3">1</label>
									    <input id="radioIV4.2.3" type="radio" name="radioIV4" value="2"> 
									    <label for="radioIV4.2.3">2</label>
										<input id="radioIV4.3.3" type="radio" name="radioIV4" value="3"> 
										<label for="radioIV4.3.3">3</label>  
										<input id="radioIV4.4.3" type="radio" name="radioIV4" value="4"> 
										<label for="radioIV4.4.3">4</label> 
										<input id="radioIV4.5.3" type="radio" name="radioIV4" value="5"> 
										<label for="radioIV4.5.3">5</label> 
									</div>
								</div>	
									<br>	
								    <h2 class="align-center">Duration</h2>
								    <hr />
								    <label>  </label>
								    <div class="field">
										<label for="radioV1"> Please select duration of illness. </label>
										<input id="radioV1.1" type="radio" name="doi" value="1"> 
										<label for="radioV1.1">< 2 years</label>
									    <input id="radioV1.2" type="radio" name="doi" value="2"> 
									    <label for="radioV1.2">2-5 years</label>
										<input id="radioV1.3" type="radio" name="doi" value="3"> 
										<label for="radioV1.3">6-10 years</label>  
										<input id="radioV1.4" type="radio" name="doi" value="4"> 
										<label for="radioV1.4">> 10 years</label>  
									</div>
									<br>
									<ul class="actions align-center">
										<li><input value="Submit & Proceed" name="submit1" class="button special" type="submit"
										></li>
									</ul>
								</form>
							</div>
						</div>
					</section>
				</div>
			</footer>

	
		<script>
            document
                .getElementById('target')
                .addEventListener('change', function () {
                    'use strict';
                    var vis = document.querySelector('.vis'),   
                        target = document.getElementById(this.value);
                    if (vis !== null) {
                        vis.className = 'inv';
                    }
                    if (target !== null ) {
                        target.className = 'vis';
                    }
            });
        </script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	</body>
</html>