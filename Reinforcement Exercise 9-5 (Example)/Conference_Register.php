<?php
session_start();
if (!isset($_SESSION['firstName']) ||
	!isset($_SESSION['lastName']) ||
	!isset($_SESSION['address']) ||
	!isset($_SESSION['city']) ||
	!isset($_SESSION['state']) ||
	!isset($_SESSION['zip']) ||
	!isset($_SESSION['phone']) ||
	!isset($_SESSION['email']) ||
	!isset($_SESSION['company']) ||
	!isset($_SESSION['co_address']) ||
	!isset($_SESSION['co_city']) ||
	!isset($_SESSION['co_state']) ||
	!isset($_SESSION['co_zip']) ||
	!isset($_SESSION['co_phone']) ||
	!isset($_SESSION['javascript_seminar']) ||
	!isset($_SESSION['php_seminar']) ||
	!isset($_SESSION['mysql_seminar']) ||
	!isset($_SESSION['apache_seminar']) ||
	!isset($_SESSION['web_services_seminar']))
	header("location:Conference_Start.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Professional Conference</title>
</head>
<body>
<h1>Conference Registration</h1>
<?php
$DBConnect = @mysqli_connect("localhost", "dongosselin", "rosebud")
	Or die("<p>Unable to connect to the database server.</p>"
	. "<p>Error code " . mysqli_connect_errno()
	. ": " . mysqli_connect_error()) . "</p>";
$DBName = "conference_registration";
if (!@mysqli_select_db($DBConnect, $DBName)) {
	$SQLstring = "CREATE DATABASE $DBName";
	$QueryResult = @mysqli_query($DBConnect, $SQLstring)
		Or die("<p>Unable to execute the query.</p>"
		. "<p>Error code " . mysqli_errno($DBConnect)
		. ": " . mysqli_error($DBConnect)) . "</p>";
	echo "<p>Successfully created the database.</p>";
	mysqli_select_db($DBConnect, $DBName);
}
$TableName = "attendees";
$SQLstring = "SELECT * FROM $TableName";
$QueryResult = @mysqli_query($DBConnect, $SQLstring);
if (!$QueryResult) {
 	$SQLstring = "CREATE TABLE $TableName (attendeeID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY, first VARCHAR(40), last VARCHAR(40), address VARCHAR(40), city VARCHAR(40), state VARCHAR(2), zip VARCHAR(10), phone VARCHAR(40), email VARCHAR(40),
 	company VARCHAR(40), co_address VARCHAR(40), co_city VARCHAR(40), co_state VARCHAR(2), co_zip VARCHAR(10), co_phone VARCHAR(40),
 	javascript_seminar VARCHAR(10),php_seminar VARCHAR(10),mysql_seminar VARCHAR(10),apache_seminar VARCHAR(10),web_services_seminar VARCHAR(10))";
 	$QueryResult = @mysqli_query($DBConnect, $SQLstring)
 		Or die("<p>Unable to create the $TableName table.</p>"
 		. "<p>Error code " . mysqli_errno($DBConnect)
 		. ": " . mysqli_error($DBConnect)) . "</p>";
 	echo "<p>Successfully created the $TableName table.</p>";
}
$SQLstring = "SELECT * FROM $TableName WHERE email='{$_SESSION['email']}'";
$QueryResult = @mysqli_query($DBConnect, $SQLstring)
	Or die("<p>Unable to execute the query.</p>"
 		. "<p>Error code " . mysqli_errno($DBConnect)
 		. ": " . mysqli_error($DBConnect)) . "</p>";
$NumRows = mysqli_num_rows($QueryResult);
if ($NumRows > 0)
	exit("<p>The e-mail address you entered is already registered for the conference!</p>
		<form action='Conference_Summary.php' method='post'>
		<p><input type='submit' value='Back' /></p>
		</form>");
$FirstName = addslashes($_SESSION['firstName']);
$LastName = addslashes($_SESSION['lastName']);
$Address = addslashes($_SESSION['address']);
$City = addslashes($_SESSION['city']);
$State = addslashes($_SESSION['state']);
$Zip = addslashes($_SESSION['zip']);
$Phone = addslashes($_SESSION['phone']);
$Email = addslashes($_SESSION['email']);
$Company = addslashes($_SESSION['company']);
$co_address = addslashes($_SESSION['co_address']);
$co_city = addslashes($_SESSION['co_city']);
$co_state = addslashes($_SESSION['co_state']);
$co_zip = addslashes($_SESSION['co_zip']);
$co_phone = addslashes($_SESSION['co_phone']);
$javascript_seminar = addslashes($_SESSION['javascript_seminar']);
$php_seminar = addslashes($_SESSION['php_seminar']);
$mysql_seminar = addslashes($_SESSION['mysql_seminar']);
$apache_seminar = addslashes($_SESSION['apache_seminar']);
$web_services_seminar = addslashes($_SESSION['web_services_seminar']);
$SQLstring = "INSERT INTO $TableName VALUES(NULL,
	'$FirstName',
	'$LastName',
	'$Address',
	'$City',
	'$State',
	'$Zip',
	'$Phone',
	'$Email',
	'$Company',
	'$co_address',
	'$co_city',
	'$co_state',
	'$co_zip',
	'$co_phone',
	'$javascript_seminar',
	'$php_seminar',
	'$mysql_seminar',
	'$apache_seminar',
	'$')";
$QueryResult = @mysqli_query($DBConnect, $SQLstring)
	Or die("<p>Unable to execute the query.</p>"
 		. "<p>Error code " . mysqli_errno($DBConnect)
 		. ": " . mysqli_error($DBConnect)) . "</p>";

mysqli_close($DBConnect);
?>
<p>You have successfully registered for the conference.</p>
</body>
</html>

