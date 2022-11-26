<?php
require_once = "dbh.inc.php";
$points =  $_POST['points'];         
  $sql = "INSERT INTO pointsGiven (pointsTotal) VALUES (?);";
