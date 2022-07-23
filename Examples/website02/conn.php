<?php
	//check if the database file exists and create a new if not
	if(!is_file('database.db')){
		file_put_contents('database.db', null);
	}
	// connecting the database
	$conn = new PDO('sqlite:database.db');
	//Setting connection attributes
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//Query for creating reating the member table in the database if not exist yet.
	$query = "CREATE TABLE IF NOT EXISTS member(mem_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username TEXT, password1 TEXT, firstname TEXT, lastname TEXT)";
	//Executing the query
	$conn->exec($query);
?>