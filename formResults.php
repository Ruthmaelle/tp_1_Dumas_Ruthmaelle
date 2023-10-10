<?php
/*require_once("function.php"); //fonctionne pas assez detailler
var_dump ($_POST);

if ($_POST) {
    $m_d_p = $_POST ['code'];
    $verif = $_POST['verif'];
    $codeIsValid = codeIsValid($m_d_p);
    $verifIsValid = verifIsValid($verif, $m_d_p);

    if (empty($m_d_p) || empty($verif)) {
        echo"<br>Le champ est vide";
    } 
    elseif ($codeIsValid['isvalid'] && $verifIsValid['isvalid']) {
        echo"<br>Mon code est : ".$m_d_p;
        echo "<br> Votre mot de passe est verifie et fonctionne";
    } else {
        if (!$verifIsValid['isvalid']) {
            echo"<br> Verification invalide : ".$verifIsValid['msg'];
        }
        if(!$codeIsValid['isvalid']) {
            //Prend en compte si le code n'est pas valide 
            echo "<br>Votre code n'est pas valide";
        }
    }
    echo '<br>';
    var_dump($codeIsValid);
   
}
*/



require_once("function.php"); //fonctionne
var_dump ($_POST);

if ($_POST) {
    $m_d_p = $_POST['code'];
    $verif = $_POST['verif'];
    $codeIsValid = codeIsValid($m_d_p);
    $verifIsValid = verifIsValid($verif, $m_d_p);

    if (empty($m_d_p) || empty($verif)) {
        echo"<br>Certains champs peuvent etre vides";
    } elseif ($codeIsValid['isvalid'] && $verifIsValid['isvalid']) {  //verifiation des deux codes) 
        $saltedCode = addSalt($m_d_p);
        $encodedCode = encodeCode($m_d_p);

        echo "<br> Bienvenue <br> Mot de passe et Verification valide"; 
        echo "<br>Le code est : " . $m_d_p;
        echo '<br>';
        var_dump($codeIsValid);
        echo '<br>';
        echo "<br> Ceci est votre code en mode 'SALT'";
        var_dump($saltedCode);
        echo '<br>';
        echo"<br> Ceci est votre mot de passe encrypte";
        var_dump($encodedCode);
    }  else {
        if(!$codeIsValid['isvalid']){
            echo "<br>Votre mot de passe n'est pas valide: " . $codeIsValid['msg'];
        }
        if (!$verifIsValid['isvalid']){
            echo "<br> Verification invalide <br>".$verifIsValid['msg'];
        }
    } 

}
else { //pour eviter tout bug 
    echo "Form not submitted.";
    echo '<br>';
}

echo '<br>';
$saltedCode = addSalt($m_d_p);

echo '<br>';
$encodedCode = encodeCode($m_d_p);



?>
<br>
<br> 
<a href = "./index.php">Retour</a> 