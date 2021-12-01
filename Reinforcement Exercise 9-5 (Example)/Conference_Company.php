<?php
session_start();
if (!empty($_POST['firstName']))
	$_SESSION['firstName'] = $_POST['firstName'];
if (!empty($_POST['lastName']))
	$_SESSION['lastName'] = $_POST['lastName'];
if (!empty($_POST['address']))
	$_SESSION['address'] = $_POST['address'];
if (!empty($_POST['city']))
	$_SESSION['city'] = $_POST['city'];
if (!empty($_POST['state']))
	$_SESSION['state'] = $_POST['state'];
if (!empty($_POST['zip']))
	$_SESSION['zip'] = $_POST['zip'];
if (!empty($_POST['phone']))
	$_SESSION['phone'] = $_POST['phone'];
if (!empty($_POST['email']))
	$_SESSION['email'] = $_POST['email'];
$Company = "";
$Address = "";
$City = "";
$State = "";
$Zip = "";
$Phone = "";
if (isset($_SESSION['company']))
	$Company = $_SESSION['company'];
if (isset($_SESSION['co_address']))
	$Address = $_SESSION['co_address'];
if (isset($_SESSION['co_city']))
	$City = $_SESSION['co_city'];
if (isset($_SESSION['co_state']))
	$State = $_SESSION['co_state'];
if (isset($_SESSION['co_zip']))
	$Zip = $_SESSION['co_zip'];
if (isset($_SESSION['co_phone']))
	$Phone = $_SESSION['co_phone'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Professional Conference</title>
</head>
<body>
<h1>Professional Conference</h1>
<h2>Company Information</h2>
<form action="Conference_Seminars.php" method="post">
<p>Company Name <input type="text" name="company" value='<?= $Company ?>' /></p>
<p>Address <input type="text" name="co_address" value='<?= $Address ?>' />&nbsp;City
<input type="text" name="co_city" value='<?= $City ?>' /></p>
<p>State <input type="text" name="co_state" value='<?= $State ?>' />&nbsp;Zip
<input type="text" name="co_zip" value='<?= $Zip ?>' /></p>
<p>Phone Number <input type="text" name="co_phone" value='<?= $Phone ?>' /></p>
<p><input type="hidden" name="PHPSESSID" value='<?php echo session_id() ?>' />
<input type="submit" value="Next" /></p>
</form>
<form action="Conference_Start.php" method="post">
<p><input type="submit" value="Back" /></p>
</form>
<form action="Conference_Restart.php" method="post">
<p><input type="submit" value="Start Over" /></p>
</form>
</body>
</html>
