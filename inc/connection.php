<?php
try{
  $db = new PDO(
        "mysql:host=localhost;
        dbname=taskApp;port=3306",
        "jblap","Otters!2");
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
      echo $e->getMessage();
      exit;
}




?>
