<?php


$id = $_GET['id'] ?? "";
$name = $_GET['name'] ?? "";
$cv = $_GET['cv'] ?? "";


$requestID = $_REQUEST['id'] ?? "";
$requestName = $_REQUEST['name'] ?? "";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Result</title>
</head>

<body>

<h2>=================================</h2>
<h2> APPLICATION SUCCESSFUL </h2>
<h2>=================================</h2>

Applicant ID: <?php echo htmlspecialchars($id); ?>
<br><br>

Name: <?php echo htmlspecialchars($name); ?>
<br><br>

Uploaded CV: <?php echo htmlspecialchars($cv); ?>
<br><br>

Application submitted successfully

<hr>

<h3>Using PHP Superglobals</h3>

GET Applicant ID:
<?php echo htmlspecialchars($_GET['id'] ?? ""); ?>
<br>

GET Name:
<?php echo htmlspecialchars($_GET['name'] ?? ""); ?>
<br>

REQUEST Applicant ID:
<?php echo htmlspecialchars($requestID); ?>
<br>

REQUEST Name:
<?php echo htmlspecialchars($requestName); ?>
<br>

SERVER NAME:
<?php echo htmlspecialchars($_SERVER['SERVER_NAME'] ?? ""); ?>
<br>

REQUEST METHOD:
<?php echo htmlspecialchars($_SERVER['REQUEST_METHOD'] ?? ""); ?>

</body>
</html>
