<?php

function codeIsValid ($code) {
    $length_code = strlen ($code);
    $renvoi = [
        'isvalid' => true,
        'msg' =>''
    ];
    if ($length_code < 6) {
        $renvoi = [
            'isvalid' = false,
            'msg' => 'ERREUR: Votre mot de passe est trop court'
        ]; //minimum 6 caracteres

    }elseif ($length_code >10) {
        $renvoi = [
            'isvalid' => false,
            'msg' => 'EEREUR: Votre mot de passe est trop long'
        ]; //minimum 10 caracteres 

    }else {
        $salt = '_ABC!';
        $saltedCode = $code.$salt;
        $encodeCode = sha1($code);
        return [
            'isvalid' => true,
            'msg' => 'Votre mot de passe est valide',
            'saltedCode' => $saltedCode // Add the salted code to the result
            'encodeCODE' => $encodeCode // Ajoute l'encode au nouveau code 
        ];

    }
    
return $renvoi;
}

/*function encodeCode($code) {
    $encodeCode = Sha1($code);
    return $encodeCode;
}
*/
?>
