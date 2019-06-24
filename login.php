<?php
$host = 'localhost';
$username = 'root';
$motdepasse = '';
$db = 'footDB';
$connect = mysqli_connect($host, $username, $motdepasse, $db);
if (isset($_POST['connexion'])) {
    $login = "";
    $pwd = "";
    $pwdCrypte = "";
    $log = $_POST['login'];
    $passe = $_POST['password'];

    $login = htmlspecialchars($log);
    $pwd = trim(htmlspecialchars($passe));


  //  $pwdCrypte = password_hash($pwd, PASSWORD_DEFAULT);
    $sqlLogin = "SELECT pseudo"
            . " FROM utilisateur"
            . " WHERE Pseudo ='" . $login . "' AND Password = '" . $pwd . "';";
    $requete = mysqli_query($connect, $sqlLogin);

    echo "<script>console.log('" . $login . "');</script>";
    //echo "<script>console.log('" . $pwdCrypte . "');</script>";
    echo $requete;
} else {
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Tournoi 3000</title>
            <meta charset = "UTF-8">
            <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
            <link rel = "stylesheet" type = "text/css" href = "semantic.min.css">
            <style>
                .main.container {
                    margin-top: 4em;
                }
            </style>
        </head>
        <body>
          <div class="ui inverted fixed blue menu">
              <div class="ui item">Tournoi 3000</div>
              <div class="item right"></div>
              <div class="ui buttons">
                  <button onclick="location.href='login.php'" class="ui red button">Se connecter</button>
                  <button onclick="location.href='inscription_formulaire.html'" class="ui green button">Créer un compte</button>
              </div>
            </div>
            <div class="ui main text container">
                <div class="ui segment">
                    <h1 class="ui header">Connexion</h1>
                    <div class="ui divider"></div>
                    <form class="ui form" method="POST" action="login.php">
                        <div class="field">
                            <label>Login</label>
                            <input type="text" name="login" placeholder="Votre pseudo">
                        </div>
                        <div class="field">
                            <label>Mot de passe</label>
                            <input type="password" name="password" placeholder="Votre mot de passe">
                        </div>
                        <button class="ui button" type="submit" name="connexion"> Se connecter </button>
                    </form>
                </div>
            </div>
        </body>
    </html>

<?php }
?>
