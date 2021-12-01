<?php
session_start();
if (!empty($_POST['company']))
	$_SESSION['company'] = $_POST['company'];
if (!empty($_POST['co_address']))
	$_SESSION['co_address'] = $_POST['co_address'];
if (!empty($_POST['co_city']))
	$_SESSION['co_city'] = $_POST['co_city'];
if (!empty($_POST['co_state']))
	$_SESSION['co_state'] = $_POST['co_state'];
if (!empty($_POST['co_zip']))
	$_SESSION['co_zip'] = $_POST['co_zip'];
if (!empty($_POST['co_phone']))
	$_SESSION['co_phone'] = $_POST['co_phone'];
$JavaScriptSeminar = FALSE;
$PHPSeminar = FALSE;
$ApacheSeminar = FALSE;
$MySQLSeminar = FALSE;
$WebServicesSeminar = FALSE;
if (isset($_SESSION['javascript_seminar']) && $_SESSION['javascript_seminar'] == TRUE)
	$JavaScriptSeminar = TRUE;
if (isset($_SESSION['php_seminar']) && $_SESSION['php_seminar'] == TRUE)
	$PHPSeminar = TRUE;
if (isset($_SESSION['apache_seminar']) && $_SESSION['apache_seminar'] == TRUE)
	$ApacheSeminar = TRUE;
if (isset($_SESSION['mysql_seminar']) && $_SESSION['mysql_seminar'] == TRUE)
	$MySQLSeminar = TRUE;
if (isset($_SESSION['web_services_seminar']) && $_SESSION['web_services_seminar'] == TRUE)
	$WebServicesSeminar = TRUE;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Professional Conference</title>
</head>
<body>
<h1>Professional Conference</h1>
<h2>Seminars</h2>
<form action="Conference_Summary.php" method="post">
<p><input type="checkbox" name="javascript" <?php if ($JavaScriptSeminar) echo "checked='checked'" ?> />&nbsp;JavaScript<br />
<input type="checkbox" name="php" <?php if ($PHPSeminar) echo "checked='checked'" ?> />&nbsp;PHP<br />
<input type="checkbox" name="mysql" <?php if ($MySQLSeminar) echo "checked='checked'" ?> />&nbsp;MySQL<br />
<input type="checkbox" name="apache" <?php if ($ApacheSeminar) echo "checked='checked'" ?> />&nbsp;Apache<br />
<input type="checkbox" name="web_services" <?php if ($WebServicesSeminar) echo "checked='checked'" ?> />&nbsp;Web Services</p>
<p><input type="hidden" name="PHPSESSID" value='<?php echo session_id() ?>' />
<input type="submit" value="Next" /></p>
</form>
<form action="Conference_Company.php" method="post">
<p><input type="submit" value="Back" /></p>
</form>
<form action="Conference_Restart.php" method="post">
<p><input type="submit" value="Start Over" /></p>
</form>
</body>
</html>
