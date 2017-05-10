<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Site Formulaire</title>
</head>
<body>
    <?php
        include ('header.html');
        exec ('cowsay "bonjour je suis une vache"');
    ?>    
    <p>Find the password</p>
    <input type="password" id="password" value=""/>
    <input type="button" id="test_pass" onclick="if(document.getElementById('password').value == 123)
    document.getElementById('demo').innerHTML='GG tu as trouvé le mdp';" value="Submit">
    <p id="demo"></p>
    <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800">
        <rect x="250" y="50" width="100" height="100" rx="100" style="fill:orange"></rect>
        <rect x="295" y="100" width="10" height="300" rx="0" style="fill:yellow"></rect>
        <rect x="150" y="200" width="300" height="10" rx="0" style="fill:green"></rect>
        <line x1="300" y1="400" x2="400" y2="500" style="stroke:white"></line>
        <line x1="300" y1="400" x2="200" y2="500" style="stroke:blue"></line>
    </svg>
</body></html>