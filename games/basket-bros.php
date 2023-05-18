<?php
session_start();
// Redirect to login page if not logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Display the dashboard content
$username = $_SESSION['username'];
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>New Tab</title>
	  <link rel="icon" type="image/png" href="/images/google.png">
  </head>
  <style>
    body {
      margin: 0px 0px;
    }
  </style>
  <body>
    <iframe width="100%" height="100%" src="https://basketbros.io/">
  </body>
</html>