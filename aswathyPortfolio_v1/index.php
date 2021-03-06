<?php
 	

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: Personal Portfolio of Aswathy';
	$to = 'aswathyd@gmail.com';
	$subject = 'Hello';

	$body = "From: $name\n E-Mail: $email\n Message: $message\n";
	
//	echo $to;
//	mail($to, $subject, $body, $from);
	
//	if($_POST['submit']){
//		if(mail($to, $subject, $body, $from)){
//			echo '<p>Your message has been sent!</p>';
//		}
//		else{
//			echo '<p>Something went wrong, go back and try again!</p>';
//		}
//			
//		}
//		
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Personal Portfolio of Aswathy - Full Stack Web Developer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/spinner.css">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type='text/css'>
	<!-- Scripts -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="js/menu.js"></script>
	
	
</head>
	<body>
		<i class="fa fa-bars toggle_menu"></i>
		
		<div class="sidebar_menu">
			<i class="fa fa-times"></i>
			<center>
				<a href="index.html"><h1 class="boxed_item">ASWATHY<span class="logo_bold">DINESH</span></h1></a>
				<h2 class="logo_title">Professional Web Developer</h2>
			</center>
			<ul class="navigation_selection">
				<a href="#about"><li class="navigation_item">ABOUT</li></a>
				<li class="navigation_item">EDUCATION</li>
				<a href="#work"><li class="navigation_item">WORK EXPERIENCE</li></a>
				<a href="#skill"><li class="navigation_item">SKILLS</li></a>
				<a href="#contact"><li class="navigation_item">CONTACTS</li></a>
			</ul>
			
			
		</div>
		<header>
		
		<h1><span>ASWATHY DINESH</span></h1>
		<P class="kicker">FULL STACK DEVELOPER | BOSTON, US</P></div>
			
		</header>
		

<!--About section-->
	<section id="about">
		<h3>About Myself</h3>
		<div class="face-lockup">
			<div class="face-img"></div>
			<div class="icon-pencil"></div>
			<div class="icon-mouse"></div>
			<div class="icon-browser"></div>
			<div class="icon-video"></div>
		</div>
		
		<div class='blurb'>
			<p>I am an alumnus of Tufts University and SCMS school of engineering and technology, graduating with a Master of Science with a major in Computer Science. Originally from Keerala,India but now residing in Boston, US. 
			I want to be involved in projects that I can be proud of, join an amazing team and advance my development career. Take some time to look at my work, credential and if you're interested in helping me take this happen, <a href="#contact">let's get in touch</a></p>
		</div>
		
		<div class="resume-git">
			<div class="resume">
				<i class="fa fa-file-o fa-4x"></i>
				<p>RESUME</p>		
			</div>
			<div class="linkedin">
				<a href=https://www.linkedin.com/in/aswathydinesh><i class="fa fa-linkedin-square fa-4x"></i>
				</a>
			</div>
			<div class="github">
				<a href=https://github.com/aswathyd><i class="fa fa-github fa-4x"></i></a>
			</div>
			
		</div>
	
		<div id="skill" class="skill-lockup">
			<div class="skill-unit">
				<div class="skill-label">Communication</div>
				<div class="skill-icons skill-8">
					<span></span><span></span<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
				</div>
				
			</div>
			<div class="skill-unit">
				<div class="skill-label">Learning</div>
				<div class="skill-icons skill-10">
					<span></span><span></span<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
				</div>
				
			</div>
			<div class="skill-unit">
				<div class="skill-label">Planning</div>
				<div class="skill-icons skill-8">
					<span></span><span></span<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
				</div>
				
			</div>
			<div class="skill-unit">
				<div class="skill-label">UX Design</div>
				<div class="skill-icons skill-6">
					<span></span><span></span<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
				</div>
				
			</div>
			<div class="skill-unit">
				<div class="skill-label">Organization</div>
				<div class="skill-icons skill-10">
					<span></span><span></span<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
				</div>
				
			</div>
			<div class="skill-unit">
				<div class="skill-label">Teaching</div>
				<div class="skill-icons skill-6">
					<span></span><span></span<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
				</div>
				
			</div>
			<div class="skill-unit">
				<div class="skill-label">Visual Design</div>
				<div class="skill-icons skill-6">
					<span></span><span></span<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
				</div>
				
			</div>
			<div class="skill-unit">
				<div class="skill-label">Programming</div>
				<div class="skill-icons skill-9">
					<span></span><span></span<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
				</div>
				
			</div>
			
		</div>
		
	</section>

<!--work section	-->
	
<section id="work" class="alt-section section-work clearfix ">
		<h3 id="#work">Work</h3>
<div class="work-slider">
	<div class="project-wrap">
		<div class="clearfix">
		  	<div class="project-container ">
			<div class="project-unit ">
				<div class="project-overlay">
					
					<strong>Ovia-Health</strong>
					<i class="fa fa-search-plus fa-2x aria-hidden="true"></i>
				</div>
				
			</div>
			<a class="project-unit">
				<div class="project-overlay">
										
					<strong>Session-M</strong>
					<i class="fa fa-search-plus fa-2x aria-hidden="true"></i>

				</div>
				
			</a>
			<a  class="project-unit">
				<div class="project-overlay">
					<strong>CourseWork</strong>
					<i class="fa fa-search-plus fa-2x aria-hidden="true"></i>

				</div>
				
			</a>
			<a  class="project-unit">
				<div class="project-overlay">
					<strong>Aryans-Infoway</strong>
					<i class="fa fa-search-plus fa-2x aria-hidden="true"></i>


				</div>
				
			</a>
		</div>
		</div>
	</div>
	<div class="work-wrap">
	 <div class="work-container">
		<div class="work-return fa fa-chevron-left "></div>
		<h4 class="project-title">Ovia Health</h4>
		 <div class="project-load"></div>
<!--		<div style="width:600px; height:500px; background:#ccc;"></div>-->

	</div>
</div>
	
</div>
		
	</section>

<!--	contact section-->
	
<section class="section-contact">
	<h3 id="contact">Contact</h3>
	
	
<!--	<hr class="bar">-->
	
	
	<form method="post" action="index.php">
		
		<div class="info-group">
		<label><span>Your Name</span>
		<input type="text" name="name" placeholder="Your name"></label>
		
		<label><span>Your Email</span>
		<input name="email" type="email" placeholder="Your email"></label>
		
		</div>

		<label><span>Tell me about your project</span>
		<textarea name="message"  placeholder="Your message"></textarea></label>
		
		<div class="submit-wrap">
		<input id="submit"  name="submit" type="submit" value="Send">
		</div>
		
	</form>
	
	<div class="social-links">
		<a href=https://github.com/aswathyd><i class="fa fa-github"></i></a>
		<a href="https://www.linkedin.com/in/aswathydinesh"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
		<a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
		<a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
		<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>		
	</div>
	
	
	
</section>
	
	


<footer class="lockup">

	<p class="copyright">&#169 Copyright 2016 Aswathy personal portfolio<p>
</footer>	
		
	</body>
</html>