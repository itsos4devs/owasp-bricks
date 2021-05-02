<?php
	require_once(dirname(dirname(__FILE__)) . '/includes/MySQLHandler.php');	
	$sSuccessMsg = "<div class=\"alert-box\">  You are not logged in.  <a href=\"\" class=\"close\">&times;</a></div>";
	if(isset($_POST['submit'])) {
		$username=$_POST['username'];
		$pwd=$_POST['passwd'];
		$sql="SELECT * FROM users WHERE name='$username' and password='$pwd'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		$sSuccessMsg = ($count>0?
			"<div class=\"alert-box success\">Succesfully logged in.<a href=\"\" class=\"close\">&times;</a></div>":
			"<div class=\"alert-box alert\">Wrong user name or password.<a href=\"\" class=\"close\">&times;</a></div>");
								}
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>OWASP Bricks Login Form #2</title>
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="../stylesheets/foundation.css">
  -->
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="../stylesheets/foundation.min.css">
  <link rel="stylesheet" href="../stylesheets/app.css">
  <script src="../javascripts/modernizr.foundation.js"></script>
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'></head>
<body>
<div class="row">
	<div class="four columns centered">
		<br/><br/><a href="../index.php"><img src="../images/bricks.jpg" /></a><br/><br/>
		<form method="POST" action="index.php" enctype="application/x-www-form-urlencoded" onsubmit="return onSubmitOfLoginForm(this);"	id="idLoginForm">
			<fieldset>
				<legend>Login</legend>
				<p><?php echo $sSuccessMsg;?></p>
				<p>Username: <input type="text" name="username" id="username" size="25" required/></p>
				<p>Password: <input type="password" name="passwd" id="passwd" size="25" required/></p>
				<p><input type="submit" class="small button" name="submit" id="submit" value="Submit"/></p>
			</fieldset>
		</form>
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
	<script type="text/javascript">
	<!--
		function onSubmitOfLoginForm(/*HTMLFormElement*/ theForm){
			try{
				var lUnsafeCharacters = /[`~!@#$%^&*()-_=+\[\]{}\\|;':",./<>?]/;
					if (theForm.username.value.length > 15 || 
						theForm.passwd.value.length > 15){
							alert('Too long.');
							return false;
					}// end if
					if (theForm.username.value.search(lUnsafeCharacters) > -1 || 
						theForm.passwd.value.search(lUnsafeCharacters) > -1){
							alert('Special characters are not allowed.');
							return false;
					}// end if
				return true;
			}catch(e){
				alert("Error: " + e.message);
			}// end catch
		}// end function onSubmitOfLoginForm(/*HTMLFormElement*/ theForm)
	//-->
	</script>
</body>
</html>