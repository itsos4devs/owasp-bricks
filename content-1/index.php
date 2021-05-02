<?php
	require_once(dirname(dirname(__FILE__)) . '/includes/MySQLHandler.php');
	$id=$_GET['id'];
	if(isset($_GET['id'])) {
		$sql = "SELECT * FROM users WHERE idusers=$id LIMIT 1";
		$result=mysql_query($sql);
	} else {
		header("Location: index.php?id=0");
		exit;
	 }
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>OWASP Bricks Content Page #1</title>  
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
		<br/><br/><a href="../index.php"><img src="../images/bricks.jpg" /></a><p>
		<fieldset>
			<legend>Details</legend>
				<?php 
					if ($content = mysql_fetch_array($result)) {
						echo '<br/>User ID: <b>'. $content['idusers'].'</b><br/><br/>';
						echo 'User name: <b>'. $content['name'].'</b><br/><br/>';
						echo 'E-mail: <b>'. $content['email'].'</b><br/><br/>';
					} else if (!$result) {
						echo("Database query failed: " . mysql_error());
						} else {		
							echo 'Error! User does not exists';
					}
				?><br/>
		</fieldset></p><br/>
	</div><br/><br/><br/>
	<center>
		<?php 
			if($showhint === true && isset($sql)) { 
				echo '<div class="eight columns centered"><div class="alert-box secondary">SQL Query: ';
				echo $sql; 
				echo '<a href="" class="close">&times;</a></div></div>';			
									} 
		?>
	</center>
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