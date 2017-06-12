<?php

try {
  $bdd= new PDO ('mysql:host=localhost;dbname=journal', 'root', 'coda');

} catch (Exception $e) {
  die ('Erreur : '.$e->getMessage());
}

 ?>
