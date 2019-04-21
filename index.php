<?php include("includes/connections.php")?>
<?php include('includes/functions.php');?>
<?php 
  $page_title = "Add New User";
  $username = $password = $company = $admin = "";
  $errNum = 0;
  $check_empty = [];
  $message = "";
  if(isset($_POST['submit'])) {
    $username = test_input($_POST['user_name']);
    $password = test_input($_POST['hashed_password']);
    $company = test_input($_POST['company']);
    $admin = test_input($_POST['admin']);
    array_push($check_empty, $username, $password, $company, $admin);
    foreach($check_empty as $check) {
      if(empty($check)) {
        $errNum++;
      }
    }
    if($errNum == 0) {
      $clean_username = mysqli_prep($username);
      $hashed_password = password_encrypt($password);
      if($admin == "yes") {
        $user_type = "admin";
      } else {
        $user_type = "user";
      }
      $conn = dbConnect();
      $stmt = $conn->stmt_init();
      $sql = 'INSERT INTO dev_users (username, hashed_password, user_type, company) 
        VALUES(?, ?, ?, ?)';
        $stmt->prepare($sql);
        $stmt->bind_param('ssss', $clean_username, $hashed_password, $user_type, $company);
        // execute and get number of affected rows
        $stmt->execute();
        $result = $stmt->affected_rows;
        if($result) {
          $message = "YEP";
        } else {
          $message = "nope";
        }
    }
  }
?>
<?php include("includes/header.php"); ?>
<section class="col-4">
    <pre><?php print_r($check_empty); ?></pre>
    <h1><?php echo($message); ?></h1>
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
