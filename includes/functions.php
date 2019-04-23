<?php 

function mysqli_prep($string) {
    $conn = dbConnect();		
    $escaped_string = $conn->real_escape_string($string);
    return $escaped_string;
}

function confirm_query($result_set) {
    if (!$result_set) {
        die("Database query failed.");
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function password_encrypt($password) {
    $hash_format = "$2y$10$";
    $salt_length = 22;
    $salt = generate_salt($salt_length);
    $format_and_salt = $hash_format . $salt;
    $hash = crypt($password, $format_and_salt);
    return $hash;
}
    
function generate_salt($length) {
    $unique_random_string = md5(uniqid(mt_rand(), true));
    $base64_string = base64_encode($unique_random_string);
    $modified_base64_string = str_replace('+', '.', $base64_string);
    $salt = substr($modified_base64_string, 0, $length);
    return $salt;
}

function find_user_by_username($username) {
    $conn = dbConnect();
    $safe_username = mysqli_real_escape_string($conn, $username);
    $sql = "SELECT * FROM dev_users WHERE username = '$safe_username' LIMIT 1";
    $user_set = $conn->query($sql);
    confirm_query($user_set);
    if($user = $user_set->fetch_assoc()) {
        return $user;
    } else {
        return null;
    }

}

function attempt_login($username, $password) {
    $user = find_user_by_username($username);
    if ($user) {
        if (password_check($password, $user['hashed_password'])) {
        return $user;
        } else {
            return false;
        }
    } else {
        return false;
    }
    
}

function password_check($password, $existing_hash) {
    $hash = crypt($password, $existing_hash);
    if ($hash === $existing_hash) {
        return true;
    } else {
        return false;
    }
}
?>