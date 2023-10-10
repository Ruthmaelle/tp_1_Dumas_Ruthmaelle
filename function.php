<?php

function codeIsValid ($codeToValid) {
    $length_code = strlen ($codeToValid);
    $renvoi = [
        'isvalid' => true,
        'msg' =>''
    ];

    if ($length_code < 6) {
        $renvoi = [
            'isvalid' => false,
            'msg' => 'ERREUR: Votre mot de passe est trop court (min : 6 caracteres)'
           
        ]; //minimum 6 caracteres

    }elseif ($length_code > 10) {
        $renvoi = [
            'isvalid' => false,
            'msg' => 'EEREUR: Votre mot de passe est trop long (max : 10 caracteres)'
            
        ]; //minimum 10 caracteres 

    }else {
        $saltedCode = addSalt($codeToValid);
        $encodeCode = encodeCode($codeToValid);
        return [
            'isvalid' => true,
            'msg' => 'Votre mot de passe est valide',
            'saltedCode' => $saltedCode, // Add the salted code to the result et appel la fonction addSalt
            'encodeCode' => $encodeCode // Ajoute l'encodage au nouveau code et appel la fonction encodeCode
        ];

    }
    
return $renvoi;
}

function verifIsValid($verifToValid, $codeToValid) {
    $length_verif = strlen($verifToValid);
    $length_code = strlen ($codeToValid);
    $reponse = [
        'isvalid' => true,
        'msg' =>''
    ];
    if ($length_verif != $length_code & $codeToValid !== $verifToValid ) {
        $reponse=[
            'isvalid'=>false,
            'msg'=>'Vos mot de passe ne sont pas similaires'
        ];
    } 
return $reponse; 
}

function addSalt($code) {
    $salt = '_ABC!';
    $saltedCode = $code.$salt;
    return $saltedCode;
}

function encodeCode($code) {
    $encodeCode = Sha1($code);
    return $encodeCode;
}

?>
