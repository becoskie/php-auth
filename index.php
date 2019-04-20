<?php include("includes/connections.php")?>
<?php include("includes/header.php"); ?>
<?php 
    $conn = dbConnect();
    if ($conn) {
        $message = "Good Job!!!";
    } else {
        $message = "Try again";
    }
?>

    <h1><?php echo($message); ?></h1>

<?php include("includes/footer.php"); ?>
