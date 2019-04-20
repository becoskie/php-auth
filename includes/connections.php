<?php
	function dbConnect($connectionType = 'mysqli') {
		$host = 'localhost';
		$user = 'root';
		$pwd = 'root';
		$db = 'auth_test';
		
		if($connectionType == 'mysqli') {
			$conn = new mysqli($host, $user, $pwd, $db);
			
			if ($conn->connect_errno) {
				die('cannot open database' . $conn->connect_errno . $conn->connection_error);
			}
		}
		return $conn;
	}
?>