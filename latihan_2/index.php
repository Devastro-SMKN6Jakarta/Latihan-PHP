<?php

require_once 'connection.php';

$sql = "SELECT * FROM user";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $data) {
  echo $data['username'] . ' - ' . $data['password'] . ' - ' . $data['full_name'];
  echo '<br/>';
}