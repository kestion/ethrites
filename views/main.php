<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		
		<title>Ethrites</title>
		<meta name="keywords" lang="en" content="ethnic, rites, biopunk, steampunk, cyberpunk, community" />
		<meta name="description" content="this is a website where you can share your personal views on the cyberpunk/biopunk/steampunk philosophy" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="en" />
		<meta name="date-creation-ddmmyyyy" content="01012012" />
		<meta name="author" content="Calypso Skinner" />
		
		<script type="text/javascript">
			
			
		</script>
		
		<link rel="stylesheet" type="text/css" href="styles/main.css" />
		
	</head>

	<body>
	
		<div id="header">
			<?php include '/templates/header.php'?>
		</div>

		<div id="navigation">
			<?php include '/templates/navigation.php'?>
		</div>
		
		<div id="content">
			
			<?php 
				if (isset($template))
				{
					include 'templates/'.$template.'.php'; //Inclusion des templates selon l'action
				}
			?>
				
				<!-- Login -->
			<?php
				if (($page == 'member') && ($action == 'login' ) )
				{
					include '/templates/loginForm.php';
					include 'actionGroup/member.php'; 
				}
			?>
				
			<!-- Sign up -->
			<?php
				if (($page == 'member') && ($action == 'signUp' ) )
				{
					include '/templates/signUp.php';
					include 'actionGroup/member.php'; 
				}
			?>
				
		</div>
		<div class="clearFix"></div>
		<div id="footer">
			<?php include '/templates/footer.php'?> 
		</div>
		
	</body>

</html>