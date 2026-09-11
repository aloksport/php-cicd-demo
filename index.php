<?php
phpinfo();
echo "<h1>Hello from my PHP application!</h1>";
echo "<p>Version 1.0</p>";
echo "<p>Current date and time: " . date("Y-m-d H:i:s") . "</p>";
echo "<p>PHP version: " . phpversion() . "</p>";
echo "<p>Server software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>Client IP address: " . $_SERVER['REMOTE_ADDR'] . "</p>";
echo "<p>Request method: " . $_SERVER['REQUEST_METHOD'] . "</p>";
echo "<p>Request URI: " . $_SERVER['REQUEST_URI'] . "</p>"

?>