<?php
require_once("function.php");
var_dump ($_Afficher);

if ($_Afficher) {
    $m_d_p = $_Afficher ['Mot de passe'];
    if (empty($m_d_p)) {
        echo"<br>Le champ est vide";
    }else {
        echo"<br>Mon code est : ".$m_d_p;
    }
    $codeIsValid = codeIsValid($m_d_p);
    echo '<br>';
    var_dump($codeIsValid);
    if(!$codeIsValid['isValid']) {
        //Prend en compte si le code n'est pas valide 
        echo "<br>Votre code n'est pas valide";
    }
}

echo '<br>'
$addSalt = saltedCode($m_d_p);
var_dump($saltedCode);

echo '<br>'
$encodeCode = encodeCode($m_d_p);
var_dump($encodeCode);

?>