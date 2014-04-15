<?PHP
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();
$formproc->AddRecipient('bailey-ann@practic.ly');
$formproc->SetFormRandomKey('GXrGOWCDR2bsruX');
 
if(isset($_POST['submitted'])) {
   if($formproc->ProcessForm()) {
   	$formproc->RedirectToURL("thank-you.html#contact");
   }
}
?>
<!DOCTYPE HTML>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Portfolio | Bailey-Ann Slaughter</title>
		
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-wide.css" />
		
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<script src='scripts/gen_validatorv31.js' type='text/javascript'></script>
		
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
</head>
<body>

	<div id="header" class="skel-panels-fixed">
		<div class="top">
			<div id="logo">
				<span class="image avatar200"><img src="images/avatar.jpg" alt="" /></span><br>
				<h1 id="name">Bailey-Ann Slaughter</h1>
				<span class="byline">Academic: SAP<br>Self-Driven: Web Design</span>
			</div>

			<nav id="nav">
				<ul>
					<li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="fa fa-home">Intro</span></a></li>
					<li><a href="#portfolio" id="portfolio-link" class="skel-panels-ignoreHref"><span class="fa fa-th">Portfolio</span></a></li>
					<li><a href="#about" id="about-link" class="skel-panels-ignoreHref"><span class="fa fa-user">About Me</span></a></li>
					<li><a href="#contact" id="contact-link" class="skel-panels-ignoreHref"><span class="fa fa-envelope">Contact</span></a></li>
				</ul>
			</nav>
				
		</div>
		<div class="bottom">

			<ul class="icons">
				<li><a href="https://www.linkedin.com/in/baileyanns" class="fa fa-linkedin solo" target="_blank"><span>LinkedIn</span></a></li>
				<li><a href="https://www.facebook.com/baileyanns" class="fa fa-facebook solo" target="_blank"><span>Facebook</span></a></li>
				<li><a href="http://instagram.com/baileyanns" class="fa fa-instagram solo" target="_blank"><span>Instagram</span></a></li>
				<li><a href="http://www.pinterest.com/baileyannsl" class="fa fa-pinterest solo" target="_blank"><span>Pinterest</span></a></li>
				<li><a href="https://www.github.com/bailey-ann/" class="fa fa-github solo" target="_blank"><span>Pinterest</span></a></li>
			</ul>
		</div>
	</div>

	<div id="main">
		<section id="top" class="one">
			<div class="container">

				<a class="image featured"><img src="images/header.png" alt="" /></a>

				<header>
					<h2 class="alt"><strong><u>Alpha Phase</u></strong><br><br>
						My name is <strong>Bailey-Ann</strong>.<br>I seek to destroy the boundaries of Computational Creativity.</h2>
					<p>Like a <strong>Ninja</strong>. A Self-Motivated, Innovative <strong>Ninja</strong>.</p>
				</header>
				
				<footer><a href="http://www.scribd.com/doc/215273385/Resume?secret_password=18gxxb0kv675bbe799mw" target="_blank" class="button scrolly">Résumé (Scribd)</a></footer>
			</div>
		</section>
			
		<section id="portfolio" class="two">
			<div class="container">
		
				<header><h2 id="portfolioTitle">Portfolio</h2></header>
				
				<p>
					<strong>University:</strong> Programming theory, functional programming in Scheme/Racket, Python, and Java<br>
					<strong>Work:</strong> Data acquisition and equipment automation in MATLAB<br>
					<strong>Personal:</strong> 100 % self-taught in web design and development, graphic design, CS6 experience
				</p>
			
				<div class="row">
					<div class="4u">
						<article class="item">
							<a href="#" target="_blank" class="image full"><img src="images/drawings.png" alt="" /></a>
							<header><h3>Drawings</h3></header>
						</article>
						
						<article class="item">
							<a href="#" target="_blank" class="image full"><img src="images/htmlcss.png" alt="" /></a>
							<header>
								<h3>HTML/CSS</h3>
							</header>
						</article>
					</div>
					
					<div class="4u">
						<article class="item">
							<a href="http://www.flickr.com/photos/bailey-ann" target="_blank" class="image full"><img src="images/flickr.png" alt="" /></a>
							<header>
								<h3>Photography										</h3>
							</header>
						</article>
						
						<article class="item">
							<a href="https://github.com/bailey-ann" target="_blank" class="image full"><img src="images/github.png" alt="" /></a>
							<header>
								<h3>Github</h3>
							</header>
						</article>
					</div>
					
					<div class="4u">
						<article class="item">
							<a href="#" target="_blank" class="image full"><img src="images/python.png" alt="" /></a>
							<header>
								<h3>Python Work</h3>
							</header>
						</article>
						
						<article class="item">
							<a href="http://bailey-ann-practicly.tumblr.com/" target="_blank" class="image full"><img src="images/tumblr.png" alt="" /></a>
							<header>
								<h3>Blog</h3>
							</header>
						</article>
					</div>
				</div>
			</div>
		</section>

		<section id="about" class="three">
			<div class="container">

				<header><h2 id="aboutmeTitle">About Me</h2></header>

				<a class="image featured"><img src="images/about-me.jpg" alt="" /></a>
				
				<p>
					Pursuing a <strong>BSIT</strong> in <strong>Software Application Programming</strong>.<br>
					Strong personal interest in <strong>Web Design &amp; Development</strong>,<br>
					Also love ice cream, stand-up comedy, traveling, music festivals, and knowing the unknown.<br><br>
					<i><strong>"I don't want to write articles; I want to do things people write articles about."</strong> - Mike Birbiglia</i>
				</p>

			</div>
		</section>
	
		<section id="contact" class="four">
			<div class="container">
	
				<header><h2 id="contactTitle">Contact</h2></header>
	
	
				<form id='contactme' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
				<fieldset>	
				
				<input type='hidden' name='submitted' id='submitted' value='1'/>
				<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
				<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>	
				
				<div class='short_explanation'>Say Hi, I also love jokes!<br>(All fields are required to submit).</div>
				
				<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
					
				<div class="row half">
					<div class="6u container">
						<input type='text' class='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="Name" /><br>
						<span id='contactme_name_errorloc' class='error'></span>
					</div>
					
					<div class="6u container">
						<input type='text' class='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="Email" /><br>
						<span id='contactme_email_errorloc' class='error'></span>
					</div>
				</div>
				
				<div class="row half">
					<div class="12u container">
						<span id='contactme_message_errorloc' class='error'></span>
						<textarea name='message' id='message' placeholder="Message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
					</div>
				</div>
				
				<div class="row">
					<div class="12u container">
						<input type='submit' class='button submit' name='Submit' value='Submit' />
					</div>
				</div>
					
				</fieldset>
				</form>
				
				<script type='text/javascript'>
					var frmvalidator  = new Validator("contactme");
					frmvalidator.EnableOnPageErrorDisplay();
					frmvalidator.EnableMsgsTogether();
					frmvalidator.addValidation("name","req","Please provide your Name.");
 
					frmvalidator.addValidation("email","req", "Please provide your Email Address.");
				 
					frmvalidator.addValidation("email","email", "Please provide a Valid Email Address.");
				 
					frmvalidator.addValidation("message","maxlen=2048", "The message cannot exceed 2KB.");
				</script>
				</div>
			</section>
		</div>

		<div id="footer">				
			<div class="copyright"><p>Bailey-Ann Slaughter</p></div>
			<ul class="menu">
					<li>Updated: <time datetime="2014-04-08">8 April 2014</time></li>
			</ul>
		</div>
	</div>

</body>
</html>