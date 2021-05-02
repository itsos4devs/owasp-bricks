<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>OWASP Bricks Configuration</title>
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="../stylesheets/foundation.css">
  -->
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="../stylesheets/foundation.min.css">
  <link rel="stylesheet" href="../stylesheets/app.css">
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <script src="../javascripts/modernizr.foundation.js"></script>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="row">
	<div class="four columns centered">
		<br/><br/><a href="../index.php"><img src="../images/bricks.jpg" /></a><br/><br/>
		<?php
			$dir = dirname( dirname(__FILE__) );
			if(@include_once($dir . '/LocalSettings.php')) 
			{
			echo '<fieldset>
				<legend>Configuration</legend>
				<p><a class="small button" href="setup.php">Setup/reset database</a><br/><a href="../">Back to home page</a></p>
			 </fieldset>';
			
			
			} else {
			echo '<form method="POST" action="config.php" enctype="application/x-www-form-urlencoded">
			<fieldset>
				<legend>Configuration</legend>
				<p>Database username: <input type="text" name="username" id="username" size="25"  placeholder="root" required/></p>
				<p>Database password: <input type="text" name="passwd" id="passwd" size="25" /></p>
				<p>Database name: <input type="text" name="db" id="passwd" size="25"  placeholder="bricks" required/></p>
				<p>Database host: <input type="text" name="host" id="passwd" size="25"  placeholder="localhost" required/></p>
				<p><label for="checkbox3"><input type="checkbox" CHECKED id="checkbox3" name="hints" value="true">Show executed commands</label></p>
				<p><input type="submit" class="small button" name="submit" id="submit" value="Submit"/><br/></p>
			 </fieldset>
		</form>
				<p>After submitting this form you will get a <b>LocalSettings.php</b> file.<br/><br/>Place it in the Bricks install directory: <b>'.$dir.'</b> and refresh this page.</p>';
			}


?>
		
		
		
		
		
	</div>
</div>


  <!-- Included JS Files (Uncompressed) -->
  <!--
  <script src="../javascripts/jquery.js"></script>
  <script src="../javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  <script src="../javascripts/jquery.foundation.forms.js"></script>
  <script src="../javascripts/jquery.foundation.reveal.js"></script>
  <script src="../javascripts/jquery.foundation.orbit.js"></script>
  <script src="../javascripts/jquery.foundation.navigation.js"></script>
  <script src="../javascripts/jquery.foundation.buttons.js"></script>
  <script src="../javascripts/jquery.foundation.tabs.js"></script>
  <script src="../javascripts/jquery.foundation.tooltips.js"></script>
  <script src="../javascripts/jquery.foundation.accordion.js"></script>
  <script src="../javascripts/jquery.placeholder.js"></script>
  <script src="../javascripts/jquery.foundation.alerts.js"></script>
  <script src="../javascripts/jquery.foundation.topbar.js"></script>
  <script src="../javascripts/jquery.foundation.joyride.js"></script>
  <script src="../javascripts/jquery.foundation.clearing.js"></script>
  <script src="../javascripts/jquery.foundation.magellan.js"></script>
  -->
  <!-- Included JS Files (Compressed) -->
  <script src="../javascripts/jquery.js"></script>
  <script src="../javascripts/foundation.min.js"></script>
  <!-- Initialize JS Plugins -->
  <script src="../javascripts/app.js"></script>
</body>
</html>