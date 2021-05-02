<?php
	require_once(dirname(dirname(__FILE__)) . '/includes/MySQLHandler.php');
	if(isset($_POST['submit'])) {
		$username=mysql_real_escape_string($_POST['username']);
		$pwd=mysql_real_escape_string($_POST['passwd']);
		$sql1="SELECT * FROM users WHERE name='$username' and password='$pwd'";
		$result1=mysql_query($sql1);
		$count1=mysql_num_rows($result1);
		session_start();
		if($count1>0)
		{
			setcookie(User, $username);
			header("location: index.php");
		}
	 } 
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Bricks Content Page #5</title>  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="../stylesheets/foundation.css">
  -->  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="../stylesheets/foundation.min.css">
  <link rel="stylesheet" href="../stylesheets/app.css">
  <script src="../javascripts/modernizr.foundation.js"></script>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<div class="row">
	<div class="four columns centered">
		<br/><br/><a href="../index.php"><img src="../images/bricks.jpg" /></a><br/>
			<p>
			
				<?php 
					if(isset($_COOKIE['User']))
					{ 
						$cookie=$_COOKIE['User'];
						$sql="SELECT * FROM users WHERE name='$cookie' ";
						$result=mysql_query($sql);
						$count=mysql_num_rows($result);
						if ($content = mysql_fetch_array($result)) {
								echo '<fieldset><legend>Details</legend>';
								echo '<br/>User ID: <b>'. $content['idusers'].'</b><br/><br/>';
								echo 'User name: <b>'. $content['name'].'</b><br/><br/>';
								echo 'E-mail: <b>'. $content['email'].'</b><br/><br/></fieldset>';
								echo (mysql_error());
								echo '<a  class="small button" href="logout.php">Logout</a>';
							} else if (!$result) {
								echo("Database query failed: " . mysql_error());
								} else {		
									echo '<br/>User ID: <b></b><br/><br/>';
								echo 'User name: <b></b><br/><br/>';
								echo 'E-mail: <b></b><br/><br/>';
							}
					} else {
						echo '';
						echo '<form method="POST" action="index.php" enctype="application/x-www-form-urlencoded"><fieldset><legend>Login</legend>
					<p>Username: <input type="text" name="username" id="username" size="25" required/></p>
					<p>Password: <input type="password" name="passwd" id="passwd" size="25" required/></p>
					<p><input type="submit" class="small button" name="submit" id="submit" value="Submit"/></p>
				';
					}
				?>	
				
			</fieldset></form>
			</p>
</div><br/><br/><br/>
	<center>
		<?php 
			if($showhint === true && isset($sql)) { 
				echo '<div class="eight columns centered"><div class="alert-box secondary">SQL Query: ';
				echo $sql; 
				echo '<a href="" class="close">&times;</a></div></div>';			
									} 
		?>
	</center></div>
  
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
