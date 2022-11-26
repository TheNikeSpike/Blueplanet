<?php

$serverName = "sql305.epizy.com";
$dBUsername = "epiz_32105669";
$dBPassword = "LiCJq0n8uYzZu";
$dBName = "epiz_32105669_loginsystem";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection Failed: " .mysqli_connect_error());
}