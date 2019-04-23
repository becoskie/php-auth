<?php ob_start( );?>
<?php include("includes/connections.php")?>
<?php include('includes/functions.php');?>
<?php 
  session_start();
  $page_title = "Login Page";
  $message = "";
  if(isset($_POST['submit'])) {
    $user = attempt_login($_POST["username_input"], $_POST["password"]);
    if($user) {
      $_SESSION['user_id'] = $user['user_id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['user_type'] = $user['user_type'];
      login_redirect($_SESSION['user_id'], $_SESSION['user_type']);
    } else {
      $message = "Username/password not found.";
    }
  }
  ?>
<?php include("includes/header.php"); ?>
<section class="col-4">
<form id="login_user" method="post" action="" name="login_form"> 
  <h5><?php echo($message); ?></h5>
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
