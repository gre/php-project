<?php
$this->setLayoutVar('pageTitle', 'Administration - Authentification');
$this->setLayoutVar('nav', array("/admin/auth" => "Connexion administration"));
?>

<form action="/admin" method="POST">
  <p>
    <label for="identifiant">Identifiant</label>
    <input id="identifiant" type="text" name="login" />
  </p>
  <p>
    <label for="password">Mot de passe</label>
    <input id="password" type="password" name="password" />
  </p>
  <p class="buttons">
    <button type="submit">Se connecter</button>
  </p>
</form>
