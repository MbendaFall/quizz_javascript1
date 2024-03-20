<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inscription Joueur !</title>
</head>
<body>
    <div class="Connexion">
        <form action="traitement.php" method="post" class="form">
            <h1>M'inscrire comme Joueur !</h1>
            <div class="input-box">
                <input type="text" name="nom" placeholder="Nom" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="text" name="prenom" placeholder="Prenom" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="text" name="login" placeholder="Login" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Mot de passe" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <a href="index.php"> <button type="submit" class="btn">M'inscrire !</button></a>
        </form>
    </div> 
</body>
</html>
