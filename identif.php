<?php require 'header.php'; ?>

<div class="auth-second">
    <h1>Eskai</h1>
    <h2>Votre identifiant Eskai !</h2>

    <div class="container">
        <form action="">
            <div class="user-details">
                <div class="input-box">
                    <input type="email" placeholder="Adresse e-mail">
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Mot de passe">
                </div>
            </div>
        </form>

        <div class="session-mdp">
            <p>
            <a href="#"><i class="far fa-check-square"></i>Garder ma<br>sessions ouverte</a>
            <a href="#" class="mdp">Mot de passe oublié ?</a>
            </p>
        </div>

        <p>
        En vous connectant, vous acceptez de vous
        conformer à la Politque de confidentialité et aux 
        Conditions générales de l'Eskai. 
        </p>

        <div class="identif-end">
        <button class="btn-second">Connexion</button>
        <p>
            Vous n'êtes pas encore membre ? <a href="inscrit.php">Rejoignez-nous.</a>
        </p>
        </div>

<?php require 'footer.php'; ?>