<?php
$filterMail = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9]+)\.([a-zA-Z]{2,5})$/";
$sexe = $_POST["sexe"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$addrmail = $_POST["addrmail"];
$numeroTel = $_POST["numeroTel"];
$pseudo = $_POST["pseudo"];
$pwd = $_POST["pwd"];
$confirmpwd = $_POST["confirmpwd"];
$airetext = $_POST["airetext"];


if((empty($nom))||(strlen($nom)>100)){
    echo "<h1>ERREUR DE SAISIE DU NOM</h1>";
}else{
    if(!(preg_match("/^[a-zA-Z,]*$/", $nom))){
            echo "NOM CONTIENT DE(S) CARACTERE(S) INVALIDE(S)";
            $message = 'nom faux';
            echo '<script document.getElementByID("nom").value ='.$nom.';
            echo $nom;
          </script>';
            echo '<script type="text/javascript">window.alert("'.$message.'");window.location.href = "index.html";</script>';
    }else;
}
//prenom
if((empty($prenom))||(strlen($prenom))>100){
    echo "<h1>ERREUR DE SAISIE DU PRENOM</h1>";
}else{
     if(!(preg_match("/^[a-zA-Z,]*$/", $prenom))){
            echo "PRENOM CONTIENT DE(S) CARACTERE(S) INVALIDE(S)";
    }else;
}
//address mail
if((empty($addrmail))||(strlen($addrmail)>250)){
    echo "<h1>ERREUR DE SAISIE DE L'ADRESSE MAIL</h1>";
}else{
    if(!preg_match($filterMail, $addrmail)){
        echo "ADDR MAIL CONTIENT DE(S) CARACTERE(S) INVALIDE(S)";
    }else;
}
//numéro de téléphone
if(!empty($numeroTel)){
    if((strlen($numeroTel)!=10)){
        echo "<h1>LONGUEUR DU NUMERO DE TELEPHONE INVALIDE</h1>";
    }else;
}else
{echo "<h1>numero téléphone non saisi ou n'est pas numéric</h1>";}

//pseudo
if(!empty($pseudo)){
    if((strlen($pseudo)<6)||(strlen($pseudo)>10)){
    echo "<h1>ERREUR DE SAISIE DE pseudo,TROP LONG OU COURT</h1>";
    }
}else{
    echo "<h1>ERREUR DE SAISIE DE pseudo, EMPTY</h1>";
}

//password
if((empty($pwd))||(strlen($pwd)<8)){
    echo "<h1>ERREUR DE SAISIE DU MOT DE PASSE</h1>";
}else;
//confirmpassword
if((empty($confirmpwd))||(strlen($confirmpwd)<8)){
    echo "<h1>ERREUR DE SAISIE DUMOT DE PASSE DE CONFIRMATION</h1>";
}else;

if($pwd != $confirmpwd){
    echo "<h1>mot de passe =/= mot de passe de confirmation</h1>";
}else;

//checkbox
if(!isset($_POST['checkboite'])){
    echo "<h1>checkboite non coché</h1>";
}else;

//textbox
if(empty($airetext)){
    echo "<h1>text area nulle</h1>";
}else;

foreach($_POST as $key => $value){
    echo "$key : $value <br>";
};
?>
