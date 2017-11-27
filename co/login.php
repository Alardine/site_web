<?php
require_once 'inc/function.php';
reconnect_from_cookie();

if(isset($_SESSION['auth'])){
    header('Location: ../index.php');
    exit();
}
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
    require_once 'inc/db.php';
   
    $req = $pdo->prepare('SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL');
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch();
    if($user && password_verify($_POST['password'],$user->password)){
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = "Vous êtes connecté";
        if($_POST['remember']){
            $remember_token = str_random(250);
            $pdo->prepare('UPDATE users SET remember_token = ? WHERE id = ?')->execute([$remember_token,$user->id]);
            setcookie('remember',$user->id.'=='.$remember_token.sha1($user->id.'tykrasta'),time()+60*60*24*7);
        }
        header('Location: index.php');
        exit();
    }else{    
        $_SESSION['flash']['danger'] = "Identifiant ou mot de passe incorrecte";
        
    }
}

?>
