<?php
/*require_once("function.php");
var_dump ($_POST);

if ($_POST) {
    $m_d_p = $_POST ['code'];
    if (empty($m_d_p)) {
        echo"<br>Le champ est vide";
    } 
    else {
        echo"<br>Mon code est : ".$m_d_p;
        echo "<br> Votre mot de passe fonctionne";
    }
    $codeIsValid = codeIsValid($m_d_p);
    echo '<br>';
    var_dump($codeIsValid);
    if(!$codeIsValid['isvalid']) {
        //Prend en compte si le code n'est pas valide 
        echo "<br>Votre code n'est pas valide";
    }
}

echo '<br>';
$saltedCode = addSalt($m_d_p);
var_dump($saltedCode);

echo '<br>';
$encodedCode = encodeCode($m_d_p);
var_dump($encodedCode);
*/


require_once("function.php");
var_dump ($_POST);

if ($_POST) {
    $m_d_p = $_POST['code'];
    $codeIsValid = codeIsValid($m_d_p);

    if ($codeIsValid['isvalid']) {
        $saltedCode = addSalt($m_d_p);
        $encodedCode = encodeCode($m_d_p);

        echo "<br> Bienvenue <br>"; 
        echo "<br>Le code est : " . $m_d_p;
        echo "<br> Votre mot de passe fonctionne";
        echo '<br>';
        var_dump($codeIsValid);
        echo '<br>';
        echo "<br> Ceci est votre code en mode 'SALT'";
        var_dump($saltedCode);
        echo '<br>';
        echo"<br> Ceci est votre mot de passe encrypte";
        var_dump($encodedCode);
    } else {
        echo "<br>Votre mot de passe n'est pas valide: " . $codeIsValid['msg'];
    }
} else {
    echo "Form not submitted.";
    echo '<br>';
    //pour eviter tout bug 
}

?>
<br>
<br> 
<a href = "./index.php">Retour</a>