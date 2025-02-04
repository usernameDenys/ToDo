<?php

$host = "localhost";
$user = "root";
$password = "";
$dbName = "todo";

$conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
