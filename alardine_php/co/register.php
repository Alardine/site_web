<?php 

require_once 'inc/function.php';
session_start();

if(!empty($_POST)){
    $errors=array();
    require_once 'inc/db.php';

    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_-]+$/',$_POST['username'])){
        $errors['username']="Votre pseudo n'est pas valide";
    }else{
        $req=$pdo->prepare('SELECT id FROM users WHERE username = ?');
        $req->execute([$_POST['username']]);
        $user = $req->fetch();
        if($user){
            $errors['username']="Ce pseudo est deja pris";
        }
        
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $errors['email']="Votre email n'est pas valide";
    }
    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $errors['password']="Votre mot de passe ne correspond pas";
    }else{
        $req=$pdo->prepare('SELECT id FROM users WHERE email = ?');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();
        if($user){
            $errors['email']="Cet email est deja utilisé pour un autre compte";
        }
        
    }

    if(empty($errors)){
        
        $req = $pdo->prepare("INSERT INTO users SET username = ?,password = ?,email = ?,confirmation_token = ?");
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        $token = str_random(60);
        $req->execute([$_POST['username'],$password,$_POST['email'],$token]); 
        $user_id = $pdo->lastInsertId();

        mail($_POST['email'],'confirmation de votre compte',"Afin de valider votre compte merci de cliquer sur ce lien <a href='http://localhost/phptest/confirm.php?id=$user_id&token=$token'>Confirmation</a>");
        
        $_SESSION['flash']['success'] = "Un email de confirmation vous a été envoyé pour valider votre compte";
        header('Location: login.php');
        exit();
    }
    
}
?>
<?php require "inc/header.php"; ?>
<h1>S'inscrire</h1>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    <p>Vous n'avez pas rempli le formulaire correctement</p>
<ul>
<?php foreach($errors as $error):  ?>
    <li><?= $error; ?></li>
<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>

<form action="#" method="post">
	<div class="form-group">
		<label for="">Pseudo</label>
		<input type="text" class="form-control" name="username"  >
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input type="email" class="form-control" name="email"  >
	</div>
	<div class="form-group">
		<label for="">Mot de passe</label>
		<input type="password" class="form-control" name="password"  >
	</div>
	<div class="form-group">
		<label for="">Confirmez votre mot de passe</label>
		<input type="password" class="form-control" name="password_confirm"  >
	</div>
	<button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

<?php require "inc/footer.php"; ?>