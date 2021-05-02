<?php
	require_once(dirname(dirname(__FILE__)) . '/includes/MySQLHandler.php');
	
	session_start();
	if (isset($_POST["username"])) { $_SESSION['username'] = $_POST["username"]; }
	if (isset($_POST["passwd"])) { $_SESSION['passwd'] = $_POST["passwd"]; }
	if(isset($_POST['submit']))  {
	$username=$_POST['username'];
	$pwd=$_POST['passwd'];
	$sql="SELECT * FROM users WHERE name='$username' and password='$pwd'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count>0){
		$_SESSION['valid'] = "1";
	} 	} else {
		$_SESSION['valid'] = "0";
		if ($_GET["p"] !== "login") { header("Location: index.php?p=login"); }
	}
	global $page; $page = "index";
	if (isset($_GET["p"])) {
		// redirect on invalid page attempts
		if (!in_array(strtolower($_GET["p"]), array(
			"index","login","logout"
		))) {
			header("Location: index.php");
			exit("Invalid parameter. <a href='index.php'>Continue</a>.");
		}
		$page = $_GET["p"];
		if ($_GET["p"] == "login") {$pagetitle = "Log In"; }
	if ($_GET["p"] == "logout") {$pagetitle = "Log Out"; $_SESSION['valid'] = "0"; session_destroy(); }
	}
	
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Bricks Login Form #6</title>  
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
			<?php
				if ($page == "login") { ?><br/>
					<form method="post" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">
						<fieldset>
						<legend>Login</legend>
							<p><label for="username">Username:</label>
							<input type="text" name="username" id="username" 
							class="textinput" /></p>
							<p><label for="password">Password:</label><input 
							type="password" name="passwd" id="passwd" 
							class="textinput" /></p>
							<p><input type="submit" name="submit" class="button" value="Enter" /></p>
						</fieldset>
					</form>
			<?php };
			if ($page == "index") { ?><br/>
				<p>You are succesfully logged in. | <a  class="small button" href="index.php?p=logout">Log Out</a></p>		
			<?php };
			if ($page == "logout") { ?><br/>
				<p>You have successfully been logged out and will be redirected shortly to the login page.</p>
			<?php }; ?>
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