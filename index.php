<!DOCTYPE html>
<head> 
    <title>Validation Mot de Passe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Formulaire pour valider votre mot de passe</h1>
    <p>Saisissez votre mot de passe</p>
    <form method="post" action="formResults.php" >
        <label for = 'nomComplet'>Nom et Prenom: </label>
        <input name = 'nom' type = 'text' id = 'nomComplet'> <br><br>
        <label for = 'code'>Mot de Passe: </label>
        <input name = 'code' type ='password' id = 'code'> <br> <br>
        <label for = 'verif'>confirmer votre mot de passe : </label>
        <input name = 'verif' type = 'password' id = 'verif'> <br><br>
        <input type = 'submit' value= 'Envoyer'>
    </form>
</body>
</html>