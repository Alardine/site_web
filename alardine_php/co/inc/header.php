<?php 
if(session_status() == PHP_SESSION_NONE){
	session_start();
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="author" content="Camara Enrique">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width,initial=scale=1.0">
	
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>

<body>
<header>
<ul class="nav nav-tabs" >
<?php if(isset($_SESSION['auth'])): ?>
		<li class="nav-item">
			<a class="nav-link active" href="logout.php">Se déconnecter</a>
			<li class="nav-item">
			<a class="nav-link active" href="account.php">Compte</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="index.php">Page Principal</a>
		</li>
		</li>
<?php else: ?>
		<li class="nav-item">
			<a class="nav-link active" href="register.php">S'inscrire</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="login.php">Se connecter</a>
		</li>
<?php endif; ?>
</ul>
</header>
<div class="container">

<?php if(isset($_SESSION['flash'])): ?>
<?php foreach($_SESSION['flash'] as $type => $message): ?>
<div class="alert alert-<?= $type; ?>">
	<?= $message; ?>
</div>
<?php endforeach; ?>
<?php unset($_SESSION['flash']); ?>
<?php endif; ?>