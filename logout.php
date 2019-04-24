<?php ob_start(); ?>
<?php session_start();?>
<?php include('includes/functions.php');?>
<?php
	$_SESSION['user_id'] = null;
    $_SESSION['username'] = null;
    $_SESSION['user_type'] = null;
	admin_redirect_to('index.php');
?>

<?php ob_end_flush(); ?>