<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Tournoi 3000</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="semantic.min.css">
    </head>
    <body>
      <div class="ui inverted blue menu">
          <div class="item right"></div>
          <div class="ui buttons">
              <button onclick="location.href='creationTournoi.php'" class="ui green button">Créer tournoi!</button>
              <button onclick="location.href='inscription_formulaire.html'" class="ui red button">Disconnect</button>
          </div>
        </div>
        <div class="ui main text container">
          <div class="ui segment">
            <h1 class="ui header">Connexion</h1>
            <div class="ui divider"></div>
            <form class="ui form" method="POST" action="">
              <div class="field">
                <label>Equipes</label>
                <input type="text" name="login" placeholder="Votre pseudo">
              </div>
              <button class="ui button" type="submit" name="connexion"> Se connecter </button>
            </form>
          </div>
        </div>
    </body>
</html>
