<?php

function sanitize($data) {
	global $con;
	// remove whitespaces (not a must though)
	$data = trim($data);
	 
	// apply stripslashes if magic_quotes_gpc is enabled
	if(get_magic_quotes_gpc())
		$data = stripslashes($data);
	 
	// a mySQL connection is required before using this function
	$data = mysqli_real_escape_string($con, $data);
	 
	return $data;
}

function get_all() {
	global $con;
	$query = "SELECT * ";
	$query .= "FROM testtable ";
	$query .= "ORDER BY rollno";
	if ($result = mysqli_query($con, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = array('rollno' => $row['rollno'],
							 'name' => $row['name'], 
							 'ds' => $row['ds'], 
							 'ada' => $row['ada'],
							 'java' => $row['java'],
							 'oose' => $row['oose']);
		}
	}
	mysqli_free_result($result);
	return $rows;
}

function get_marks($rollno) {
	global $con;
	$query = "SELECT * ";
	$query .= "FROM testtable ";
	$query .= "WHERE rollno = {$rollno} ";
	$query .= "ORDER BY rollno";
	if ($result = mysqli_query($con, $query)) 
		$row = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $row;
}

function get_subject_marks($sub) {
	global $con;
	$query = "SELECT rollno, name, {$sub} ";
	$query .= "FROM testtable ";
	$query .= "ORDER BY rollno";
	$rows = [];
	if ($result = mysqli_query($con, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = array('rollno' => $row['rollno'],
							 'name' => $row['name'], 
							 $sub => $row[$sub]);
		}
	}
	mysqli_free_result($result);
	return $rows;
} 

function insert_marks($arr) {
	global $con;
	foreach ($arr[0] as $key => $value) 
	    $sub = $key;
	$query = "INSERT INTO testtable (rollno, {$sub}) VALUES ";

	foreach ($arr as $a) {
		$query .= "('{$a['rollno']}', '{$a[$sub]}')";
		if (next($arr))
			$query .= ", ";
	}	
	echo $query;
	$result = mysqli_query($con, $query);
	if ($result)
		echo "data added";
	else 
		echo "query failed.";
}

function update_marks($sub, $rollno, $marks) {
	global $con;
	$query = "UPDATE testtable ";
	$query .= "SET {$sub} = {$marks} ";
	$query .= "WHERE rollno = {$rollno}";
	$result = mysqli_query($con, $query);
}

function app_insert_record($rollno, $name, $ds, $ada, $java, $oose) {
	global $con;
	$query = "INSERT INTO testtable (rollno, name, ds, ada, java, oose) 
	VALUES ('{$rollno}', '{$name}', '{$ds}', '{$ada}', '{$java}', '{$oose}')";
	
	$result = mysqli_query($con, $query);
	if ($result)
		echo "data added";
	else 
		echo "query failed.";
}

function app_update_marks($rollno, $ds, $ada, $java, $oose) {
	global $con;
	$query = "UPDATE testtable ";
	$query .= "SET ds = {$ds}, ";
	$query .= "ada = {$ada}, ";
	$query .= "java = {$java}, ";
	$query .= "oose = {$oose} ";
	$query .= "WHERE rollno = {$rollno};";
	$result = mysqli_query($con, $query);
	if ($result)
		echo "data added";
	else 
		echo "query failed.";
}

function insert_from_csv($rollno, $name) {
	global $con;
	$query = "INSERT INTO testtable (rollno, name) 
	VALUES ('{$rollno}', '{$name}')";
	$result = mysqli_query($con, $query);
	if ($result)
		return "true";
	else 
		return "false";
}

function login($username, $password) {
	global $con;
	$query = "SELECT * ";
	$query .= "FROM tlogin ";
	$query .= "WHERE tpass='{$password}' AND tuser='{$username}'";
	$result = mysqli_query($con, $query);
	$rows = mysqli_num_rows($result);
	return $rows;
}

?>