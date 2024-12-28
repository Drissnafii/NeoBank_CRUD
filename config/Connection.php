<?php
$host = 'localhost';
$db = 'drissdb';
$user = 'root';
$passw = '';

try {
  //code...
  echo '<!DOCTYPE html>';
  echo '<html lang="en">';
  echo '<head>';
  echo '<meta charset="UTF-8">';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
  echo '<title>Database Connection Status</title>';
  echo '</head>';
  echo '<body>';

  echo "<div style=\"background-color: #dcfce7;
                    padding: 1rem;
                    text-align: center;
                    font-weight: bold;
                    border-radius: 0.25rem;
                    border: 1px solid #86efac;
                    color: #166534;
                   \">You Are Connected to $db !</div>";

  echo '</body>';
  echo '</html>';

  $dsn = "mysql:host=" .  $host. 
  ";dbname=" . $db;
  $pdo = new PDO($dsn, $user, $passw);
} catch (PDOException $e) {
  die("conection failded". $e->getMessage());
}

?>