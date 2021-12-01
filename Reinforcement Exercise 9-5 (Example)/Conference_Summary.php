<?php
session_start();
if (isset($_POST['javascript']))
	$_SESSION['javascript_seminar'] = TRUE;
else
	$_SESSION['javascript_seminar'] = FALSE;
if (isset($_POST['php']))
	$_SESSION['php_seminar'] = TRUE;
else
	$_SESSION['php_seminar'] = FALSE;
if (isset($_POST['mysql']))
	$_SESSION['mysql_seminar'] = TRUE;
else
	$_SESSION['mysql_seminar'] = FALSE;

if (isset($_POST['apache']))
	$_SESSION['apache_seminar'] = TRUE;
else
	$_SESSION['apache_seminar'] = FALSE;

if (isset($_POST['web_services']))
	$_SESSION['web_services_seminar'] = TRUE;
else
	$_SESSION['web_services_seminar'] = FALSE;
$Required = "<span style='color:red'>**REQUIRED**</span>";
$Missing = FALSE;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Professional Conference</title>
</head>
<body>
<h1>Summary</h1>
<p>You entered the following information.</p>
<table border="1" cellpadding="5">
<tr valign="top"><td>
<h2><a href="Conference_Start.php">Personal Information</a></h2>
<?php
if (isset($_SESSION['firstName']))
	echo "<p>First name: {$_SESSION['firstName']}<br />";
else {
	echo "<p>First name: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['lastName']))
	echo "Last name: {$_SESSION['lastName']}<br />";
else {
	echo "Last name: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['address']))
	echo "Address: {$_SESSION['address']}<br />";
else {
	echo "Address: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['city']))
	echo "City: {$_SESSION['city']}<br />";
else {
	echo "City: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['state']))
	echo "State: {$_SESSION['state']}<br />";
else {
	echo "State: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['zip']))
	echo "Zip: {$_SESSION['zip']}<br />";
else {
	echo "Zip: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['phone']))
	echo "Phone: {$_SESSION['phone']}<br />";
else {
	echo "Phone: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['email']))
	echo "E-mail: {$_SESSION['email']}<br />";
else {
	echo "E-mail: $Required</p>";
	$Missing = TRUE;
}
?>
</td>
<td><h2><a href="Conference_Company.php">Company Information</a></h2>
<?php
if (isset($_SESSION['company']))
	echo "<p>Company: {$_SESSION['company']}<br />";
else {
	echo "<p>Company: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['co_address']))
	echo "Address: {$_SESSION['co_address']}<br />";
else {
	echo "Address: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['co_city']))
	echo "City: {$_SESSION['co_city']}<br />";
else {
	echo "City: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['co_state']))
	echo "State: {$_SESSION['co_state']}<br />";
else {
	echo "State: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['co_zip']))
	echo "Zip: {$_SESSION['co_zip']}<br />";
else {
	echo "Zip: $Required<br />";
	$Missing = TRUE;
}
if (isset($_SESSION['co_phone']))
	echo "Phone: {$_SESSION['co_phone']}<br />";
else {
	echo "Phone: $Required<br />";
	$Missing = TRUE;
}
?>
</td>
<td><h2><a href="Conference_Seminars.php">Seminars</a></h2>
<?php
if ($_SESSION['javascript_seminar'] == TRUE)
	echo "<p>JavaScript seminar: yes<br />";
else
	echo "<p>JavaScript seminar: no<br />";
if ($_SESSION['php_seminar'] == TRUE)
	echo "PHP seminar: yes<br />";
else
	echo "PHP seminar: no<br />";
if ($_SESSION['mysql_seminar'] == TRUE)
	echo "MySQL seminar: yes<br />";
else
	echo "MySQL seminar: no<br />";
if ($_SESSION['apache_seminar'] == TRUE)
	echo "Apache seminar: yes<br />";
else
	echo "Apache seminar: no<br />";
if ($_SESSION['web_services_seminar'] == TRUE)
	echo "Web services seminar: yes</p>";
else
	echo "Web services seminar: no</p>";
?>
</td></tr></table>
<?php
if ($Missing)
	echo "<p><span style='color:red'>You cannot register for the conference until you fill out all **REQUIRED** fields!</span></p>";
else
	echo "<form action='Conference_Register.php' method='post'>
	<p><input type='submit' value='Register' /></p></form>";
?>
<form action="Conference_Seminars.php" method="post">
<p><input type="submit" value="Back" /></p>
</form>
<form action="Conference_Restart.php" method="post">
<p><input type="submit" value="Start Over" /></p>
</form>
</body>
</html>
