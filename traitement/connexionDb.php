
  <?php
    if(!isset($_SESSION)){
      session_start();
    }


    //On établit la connexion
    function connexionBdd()
    {
        $servername = 'localhost';
        $dbname = 'portfolio';
        $username = 'root';
        $password = '';

      try
      {
          return new PDO('mysql:host='.$servername.';dbname='.$dbname.'; charset=utf8', $username, $password);
      }
      catch (Exception $e)
      {
          return 'Erreur : ' . $e->getMessage();
      }
    }

