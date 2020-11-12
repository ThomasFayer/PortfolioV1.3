
<?php
  function connexionDb()
  {
    $host="localhost";
    $dbname="portfolio_v1.3";
    $user="root";
    $password="root";

    try {
      error_reporting(E_ALL);
      ini_set("display_errors",TRUE);
      ini_set("display_startup_errors",TRUE);
      $db = new \PDO("mysql:host;dbname=$dbName;charset=UTF8",$user,$password);
      //activation des erreurs PDO
      $db->setAttribute(PDO::ATTR_ERRMODE_EXEPTION);
      // mode de fetch par defaut :FETCH_ASSOC/FECT_OBJ:FETCH_BOTH
      $db->setAttribute(PDO::ATTR_DEFAULT_FECTH_MODE,PDO::FETCH_ASSOC);
      return $db;

    } catch (PDOExeption $e) {
      //en cas d'erreur :
      die("Erreur:".$e->getMessage());
    }
    
  }
?>
