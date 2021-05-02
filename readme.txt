==About==
OWASP Bricks - 2.2 Tuivai
==Installation==

Copy this folder into the www directory.

Start running the server.

Create a new database for Bricks:
	Click on the PHPMyAdmin button or go to http://<your_ip>/mysql/ on browser.
	Any name can be used for database. For example: bricks. Fill up the name and click on Create button.
	
Go to http://<your_ip>/bricks/ on browser.

Bricks will redirect automatically to http://<your_ip>/bricks/config/.

Fill in the configuration details:
	Database username: root
	Database password: root in uWAMP. Keep it blank in the case of XAMPP
	Database name: bricks
	Database host: localhost
	Show executed commands: checked by default
	
Click on Submit button and a file, LocalSettings.php, will get downloaded. Place this file in the www directory.

Refresh http://<your_ip>/bricks/config/ page

Click on Setup/reset database

Installation finished. Bricks will be ready at http://<your_ip>/bricks/

==Upgrading==

Copy the contents of this directory on to the existing Bricks installation directory.


==Websites==
http://sechow.com/bricks/
https://www.owasp.org/index.php/OWASP_Bricks