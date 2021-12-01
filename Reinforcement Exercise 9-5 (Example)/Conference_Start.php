<?php
session_start();
$FirstName = "";
$LastName = "";
$Address = "";
$City = "";
$State = "";
$Zip = "";
$Phone = "";
$Email = "";
if (isset($_SESSION['firstName']))
	$FirstName = $_SESSION['firstName'];
if (isset($_SESSION['lastName']))
	$LastName = $_SESSION['lastName'];
if (isset($_SESSION['address']))
	$Address = $_SESSION['address'];
if (isset($_SESSION['city']))
	$City = $_SESSION['city'];
if (isset($_SESSION['state']))
	$State = $_SESSION['state'];
if (isset($_SESSION['zip']))
	$Zip = $_SESSION['zip'];
if (isset($_SESSION['phone']))
	$Phone = $_SESSION['phone'];
if (isset($_SESSION['email']))
	$Email = $_SESSION['email'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Professional Conference</title>
</head>
<body>
<h1>Professional Conference</h1>
<h2>Personal Information</h2>
<form action="Conference_Company.php" method="post">
<p>First Name <input type="text" name="firstName" value='<?= $FirstName  ?>' />
&nbsp;Last Name <input type="text" name="lastName" value='<?= $LastName  ?>' /></p>
<p>Address <input type="text" name="address" value='<?= $Address  ?>' />&nbsp;City
<input type="text" name="city" value='<?= $City ?>' /></p>
<p>State <input type="text" name="state" value='<?= $State  ?>' />&nbsp;Zip
<input type="text" name="zip" value='<?= $Zip ?>' /></p>
<p>Phone Number <input type="text" name="phone" value='<?= $Phone  ?>' /></p>
<p>E-mail <input type="text" name="email" value='<?= $Email  ?>' /></p>
<p><input type="hidden" name="PHPSESSID" value='<?php echo session_id() ?>' />
<input type="submit" value="Next" /></p>
</form>
<form action="Conference_Restart.php" method="post">
<p><input type="submit" value="Start Over" /></p>
</form>
</body>
</html>
