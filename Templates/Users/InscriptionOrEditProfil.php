<link rel="stylesheet" href="CSS/inscription&Connexion.css">
<div class="page">
<h1><?php if(isset($_SESSION["user"])) :?>Modifier le profil<?php else : ?>Page d'inscription<?php endif ?></h1>
<form method="post" action="">
            <fieldset>
                <div class="inscription_connexion">
                    <div class="mb-3">
                        <label for="Nom" class="form-label">Nom :</label>
                        <input class="in" type="text" placeholder="Nom" class="form-control" id="Nom" name="nom" value="<?php if(isset($_SESSION["user"])) :?><?= $_SESSION["user"]->userNom ?><?php endif ?>">
                            <?php if(isset($messageError["nom"])) :?><small><?= $messageError["nom"] ?></small><?php endif ?>
                    </div>
                    <div class="mb-3">  
                        <label for="Prenom" class="form-label">Prénom :</label>
                        <input class="put" type="text" placeholder="Prénom" class="form-control" id="Prenom" name="prenom" value="<?php if(isset($_SESSION["user"])) :?><?= $_SESSION["user"]->userPrenom ?><?php endif ?>">
                        <?php if(isset($messageError['prenom'])) :?><small><?= $messageError['prenom'] ?></small><?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input class="input" type="email" placeholder="Email" class="form-control" id="email" pattern="+@" name="email" value="<?php if(isset($_SESSION["user"])) :?><?= $_SESSION["user"]->userEmail ?><?php endif ?>">
                        <?php if(isset($messageError['email'])) :?><small><?= $messageError['mail'] ?></small><?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="Login" class="form-label">Login :</label>
                        <input class="inpute" type="text" placeholder="Login" class="form-control" id="Login" name="login" <?php if(isset($_SESSION["user"])) :?>disabled<?php endif ?>value="<?php if(isset($_SESSION["user"])) :?><?= $_SESSION["user"]->userLogin ?><?php endif ?>">
                        <?php if(isset($messageError['login'])) :?><small><?= $messageError['login'] ?></small><?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Mot de passe :</label>
                        <input class="pute" type="<?php if(isset($_SESSION['user'])) :?>text<?php else : ?>password<?php endif ?>"placeholder="Mot de passe" class="form-control" id="Password" name="mp"value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->userPassWord ?><?php endif ?>">
                        <?php if(isset($messageError['mot_de_passe'])) : ?><small><?= str_replace('_', ' ',$messageError['mp']) ?><small><?php endif ?>  
                    </div>
                </div>
                <div class="link">
                    <a href="/connexion" class="btn btn-secondary">déjà inscrit ?</a>
                </div>
                <button name="btnEnvoi" class="btn btn-primary" value ="envoyer"><?php if(isset($_SESSION["user"])) :?>Modifier<?php else : ?>S'inscrire<?php endif ?></button>
            </fieldset>
        </form>
</div>
