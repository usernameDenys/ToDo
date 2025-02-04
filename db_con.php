<?php

$host = "localhost";
$user = "root";
$password = "root";
$dbName = "todo";

$conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
