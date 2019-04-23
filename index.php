<?php include("includes/connections.php")?>
<?php include('includes/functions.php');?>
<?php 
  $page_title = "Login Page";
  $message = "";
  $user = [];
  if(isset($_POST['submit'])) {
    $user = attempt_login($_POST["username_input"], $_POST["password"]);
    if($user) {
      $message = "User info here";
    } else {
      $message = "No info here";
    }
  }
  ?>
<?php include("includes/header.php"); ?>
<section class="col-4">
  <?php print_r($user); ?>
<form id="login_user" method="post" action="" name="login_form"> 
  <h1><?php echo($message); ?></h1>
  <div class="form-group" id="username">
    <label for="username_input">User Name</label>
    <input type="text" class="form-control" id="username_input" aria-describedby="name" name="username_input" value="" placeholder="Enter User Name">
  </div>
  <div class="form-group" id="user_password">
    <label for="password_input">Password</label>
    <input type="password" class="form-control" id="password_input" name="password"  value="" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
</form>
</section>
<?php include("includes/footer.php"); ?>
