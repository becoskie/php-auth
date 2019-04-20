<?php include("includes/connections.php")?>
<?php 
    $conn = dbConnect();
    if($conn) {
        $message = "Good job!!!!";
    } else {
        $message = "Try again!!!!";
    }
?>

<?php echo($message); ?>

