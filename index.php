<?php include("includes/connections.php")?>
<?php include('includes/functions.php');?>
<?php 
  $test = test();
  $username = $password = $company = $admin = "";
  $errNum = 0;
  $check_empty = [];

  if(isset($_POST['submit'])) {
    $username = test_input($_POST['user_name']);
    $password = test_input($_POST['hashed_password']);
    $company = test_input($_POST['company']);
    $admin = test_input($_POST['admin']);
    array_push($check_empty, $username, $password, $company, $admin);
    print_r($check_empty);
  }
?>
<?php include("includes/header.php"); ?>
<section class="col-4">
    <pre><?php print_r($check_empty); ?></pre>
<form id="create_user_form" method="post" action="" name="user_form" onsubmit="return validateFormInput()"> 
  <div class="form-group" id="name_input">
    <label for="user_name">User Name</label>
    <input type="text" class="form-control" id="user_name" aria-describedby="name" name="user_name" value="" placeholder="Enter User Name">
  </div>
  <div class="form-group" id="password_input">
    <label for="user_password">Password</label>
    <input type="password" class="form-control" id="user_password" name="hashed_password"  value="" placeholder="Password">
  </div>
  <div class="form-group" id="company_input">
    <label for="company">Company</label>
    <input type="text" class="form-control" id="user_company" name="company"  value="" placeholder="Affiliation, Company">
  </div>
  <div class="form-check">
  <input class="form-check-input admin_val" type="radio" name="admin" id="admin_no" value="no" checked>
  <label class="form-check-label" for="admin_no">
    Add as user
  </label>
</div>
<div class="form-check">
  <input class="form-check-input admin_val" type="radio" name="admin" id="admin_yes" value="yes">
  <label class="form-check-label" for="admin_yes">
  Add as admin
  </label>
</div>
  <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
</form>
</section>
<?php include("includes/footer.php"); ?>
