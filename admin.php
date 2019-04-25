<?php ob_start( );?>
<?php session_start(); ?>
<?php include("includes/connections.php")?>
<?php include('includes/functions.php');?>
<?php confirm_login();?>
<?php admin_only(); ?>

<?php 
  $page_title = "Admin Page";
  
  ?>
<?php include("includes/header.php"); ?>
<section class="col-4">
<h1>Admin Page</h1>
<p>good job.</p>
<ul>
  <li class="menu_item"><a href="logout.php" class="logout">Log Out</a></li>
</ul>
</section>
<?php include("includes/footer.php"); ?>