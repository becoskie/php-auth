<?php include("includes/connections.php")?>
<?php 
    $conn = dbConnect();
    $page_title = "Test Auth";
    
?>
<?php include("includes/header.php"); ?>

    <h1><?php echo($message); ?></h1>

<?php include("includes/footer.php"); ?>
