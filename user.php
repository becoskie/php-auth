<?php ob_start( );?>
<?php include("includes/connections.php")?>
<?php include('includes/functions.php');?>
<?php 
  session_start();
  $page_title = "User Page";
  
  ?>
<?php include("includes/header.php"); ?>
<section class="col-4">
<h1>User Page</h1>
<p>good job.</p>
</section>
<?php include("includes/footer.php"); ?>