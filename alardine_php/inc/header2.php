<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Alardine | AMF certification Formation Recrutement Digital</title>
    <meta name="author" content="">
    <meta name="description" content="Formation Recrutement certification AMF ">
    <meta name="keywords" content="Formation certification AMF">
    <meta name="viewport" content="width=device-width,initial=scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Caudex|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link href="css/trouverUnTalent.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body>
    <div class="backG"></div>
    <header>
        <div id="logo-button">
            <div>
                <a href="index.php"><img id="logo_alardine" src="img/logo2.png" alt="alardine_logo"></a>
            </div>
            <nav id="navigation">
                <div id="menu">
                    <a href="nous.php" class="menu">Qui Sommmes Nous ?</a>

                    <a href="#" class="menu">Candidat</a>

                    <a href="trouver_un_talent.php">Recrutement</a>

                    <a href="#" class="menu">Actualités</a>

                    <a href="#" id="addModal" class="menu">Contacter-nous</a>

                    <a href="#" id="co" class="menu">Connexion</a>
                </div>
                <div id="sous-menu">
                    <ul id="sous-menu1" class="sous-menu">
                        <li>
                            <a href="nous.php#v">Notre Vision</a>
                        </li>
                        <li>
                            <a href="nous.php#e">Notre Équipe</a>
                        </li>
                        <li>
                            <a href="nous.php#t">Témoignages</a>
                        </li>
                    </ul>
                    <ul id="sous-menu2" class="sous-menu">
                        <li>
                            <a href="#">Se former</a>
                        </li>
                        <li>
                            <a href="#">Espace Apprenants</a>
                        </li>
                        <li>
                            <a href="#">Ressources formation <abbr title="Autorité des Marchés Financiers">AMF</abbr></a>
                        </li>
                        <li>
                            <a href="#">Accompagnement vers un retour à l'emploi</a>
                        </li>
                        <li>
                            <a href="#">Classes virtuelles enregistrées</a>
                        </li>
                        <li>
                            <a href="#">Envoyer mon cv à jour</a>
                        </li>
                    </ul>
                    <ul id="sous-menu3" class="sous-menu">
                    </ul>
                    <ul id="sous-menu4" class="sous-menu">
                    </ul>
                    <ul id="sous-menu5" class="sous-menu">
                    </ul>
                    <ul id="sous-menu6" class="sous-menu">
                    </ul>
                </div>
            </nav>

            <!-- lien   -->

            <section id="lien">
                <p>Retrouvez-nous</p>
                <a href="https://www.facebook.com/Alardine.recrutement.formation/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="https://twitter.com/alardine" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/company/alardine?" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            </section>
        </div>


    </header>
    <main>

        <div id="modal" class="modal">
            <div class="header-modal">
                <h2>Contact</h2>
                <div class="close-modal">
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </div>
            </div>
            <div class="body-modal">
                <form action="mail.php" method="post">
                    <select class="form-control">
                        <option value="emploi">Vous chercher un emploi</option>
                        <option value="recruter">Vous recrutez</option>
                    </select>

                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" autofocus required>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email" required>
                    <input type="objet" name="objet" id="objet" class="form-control" placeholder="Objet" required>
                    <textarea rows="7" name="msg" id="msg" class="form-control" required></textarea>

                    <button type="submit" name="envoi" id="modalBtn">Envoyer</button>
                </form>
            </div>
        </div>
        <div id="logmodal" class="modal">
            <div class="header-modal">
                <h2>connexion</h2>
                <div class="close-modal">
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </div>
            </div>
            <div class="body-modal">
                <form action="co/login.php" method="post">
                    <label for="">Prenom ou email</label>
                    <input type="text" class="form-control" name="username">
                    <label for="">Mot de passe</label>
                    <input type="password" class="form-control" name="password">
                    <label>
                            <a href="forget.php">(mot de passe oublié)</a>   
                        </label>
                    <label class="checkbox-inline"><input type="checkbox" name="remember" value="1">Se souvenir de moi</label>
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                    <button type="" class="btn btn-primary">S'inscrire</button>
                </form>
            </div>
        </div>
