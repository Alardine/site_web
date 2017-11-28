<?php 
require_once 'inc/function.php';
reconnect_from_cookie();
logged_only();
require 'inc/header.php';
unset($_SESSION['flash']); 
?>
<?php if(!empty($_SESSION['auth']->photo)): ?>
<figure>
    <img src="users/img/<?php echo $_SESSION['auth']->photo; ?>" alt="photo">
</figure>
<?php endif; ?>
<h1>
    <?= $_SESSION['auth']->username; ?>
</h1>

<?php require 'inc/footer.php'; ?>