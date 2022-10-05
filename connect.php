<?php

$username = filter_input(INPUT_POST, 'username5');
$password = filter_input(INPUT_POST, 'password5');
if (!empty($username)){
  if (!empty($password)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "Password";
    $dbname = "database_app";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    $sql = "INSERT INTO tabella (nome2, cognome2) values ('$username', '$password')";
  }
  else {
    echo "Password should not be empty";
    die();
  }
}
else{
  echo "Username should not be empty";
  die();
}
?>