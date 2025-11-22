<?php

$username = getenv('MYSQL_USER') ?: "wackopicko";
$pass = getenv('MYSQL_PASSWORD') ?: "webvuln!@#";
$database = getenv('MYSQL_DATABASE') ?: "wackopicko";
$host = getenv('MYSQL_HOST') ?: "localhost";

require_once("database.php");
$db = new DB($host, $username, $pass, $database);

// Include MySQL compatibility layer for deprecated mysql_* functions
require_once("mysql_compat.php");

?>