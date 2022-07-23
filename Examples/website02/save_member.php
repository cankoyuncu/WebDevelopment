<?php
	//starting the session
	session_start();
 
	//including the database connection
	require_once 'conn.php';
 
	if(ISSET($_POST['register'])){
		// Setting variables
		$name_surname = $_POST['name_surname'];
		$username = $_POST['username'];
		$password = $_POST['mail'];
		$lastname = $_POST['password1'];
 
		// Insertion Query
		$query = "INSERT INTO `member` (name_surname, username, mail, password1) VALUES (:name_surname, :username, :mail :password1)";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':name_surname', $name_surname);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':mail', $mail);
		$stmt->bindParam(':password1', $password1);
	
 
		// Check if the execution of query is success
		if($stmt->execute()){
			//setting a 'success' session to save our insertion success message.
			$_SESSION['success'] = "Successfully created an account";
 
			//redirecting to the index.php 
			header('location: index.php');
		}
 
	}
?>