<?php
  function erreur($err='')
  {
    $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
    exit('<p>'.$mess.'</p>''<p class="error-log">Cliquez <a href="../administration-panel/admin-panel.php">ici</a> pour revenir à la page d\'administration</p></div>')
  }
?>
