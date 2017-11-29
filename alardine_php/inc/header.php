<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Alardine | AMF certification Formation Recrutement Digital</title>
    <meta name="author" content="">
    <meta name="description" content="Formation Recrutement certification AMF ">
    <meta name="keywords" content="Formation certification AMF">
    <meta name="viewport" content="width=device-width,initial=scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Caudex|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link href="css/trouverUnTalent.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="backG"></div>
    <header>
        <div id="logo-button">
            <div>
                <a href="index.php">
                <img id="logo_alardine" src="img/alardin3d.gif" alt="alardine_logo"></a>
            </div>
            <nav id="navigation">
                <ul>
                    <li id="menu1" class="menu">
                        <a href="nous.php">Qui Sommmes Nous ?</a>
                    </li>
                </ul>
                <ul>
                    <li id="menu2" class="menu">
                        <a href="#" id="co">Candidat</a>
                    </li>
                </ul>
                <ul>
                    <li id="menu3" class="menu">
                        <a href="trouver_un_talent.php">Recrutement</a>
                    </li>
                </ul>
                <ul>
                    <li id="menu4" class="menu">
                        <a href="#">Actualités</a>
                    </li>
                </ul>
                <ul>
                    <li id="menu4" class="menu">
                        <a href="#" id="addModal">Contacter-nous</a>
                    </li>
                </ul>
            </nav> 

<!-- lien   -->

        <section id="lien">
        <a href="https://www.facebook.com/Alardine.recrutement.formation/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="https://twitter.com/alardine" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/company/alardine?" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        </section>
        </div>
       

    </header>
    <main>

        <div id="modal" class="modal">
            <div class="header-modal">
                <h2>contact@alardine.fr</h2>
                <div class="close-modal">
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </div>
            </div>
            <div class="body-modal">
                <form action="mail.php" method="post">
                    <select  class="form-control">
                        <option value="emploi">Vous chercher un emploi</option>
                        <option value="recruter">Vous recrutez</option>
                    </select>

                    <input type="text" name="nom" id="nom"  class="form-control" placeholder="Nom" autofocus required>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email" required>
                    <input type="objet" name="objet" id="objet" class="form-control" placeholder="Objet" required>
                    <textarea rows="7" name="msg" id="msg" class="form-control" required></textarea>

                    <button type="submit" name="envoi" id="modalBtn">Envoyer</button>
                </form>
                <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.5462691962543!2d2.515932315735679!3d48.866861979288274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6126ec978bd47%3A0x3f593d305e723bf8!2sAlardine+Formation+%26+Recrutement!5e0!3m2!1sfr!2sfr!4v1511880494238" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                <p>87 - 95  rue  Louis Ampère<br>93330, Neuilly sur Marne, France</p>
                <a href="tel:+33149449916"><i class="fa fa-phone-square" aria-hidden="true"></i>  01 49 44 99 16 </a> 
            </section>
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