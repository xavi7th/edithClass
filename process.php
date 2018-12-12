<?php

$name = $_POST['name'];
$initials = $_POST['initials'];
$sign_in_time = $_POST['sign_in_time'];

$con = mysqli_connect('localhost', 'root', '', 'edit');

if (!$con) {
	/**
	 * !The connection request failed
	 */

	echo mysqli_connect_error();

	exit;
}

$editSql = "INSERT INTO efua_reloaded (name, sign_in_time, initials) VALUES('$name', '$sign_in_time', '$initials')";

/**
 * Send the query to mysql
 * @param mysqli Resource $con
 * @param string $editSql
 */
$query = mysqli_query($con, $editSql);
if (!$query) {
	/**
	 * !The query request failed
	 */
	echo mysqli_error($con);
	exit;
}


/**
 * ? Testing select queries
 */
$editSql = "SELECT * FROM efua_reloaded";

/**
 * Send the query to mysql
 * @param mysqli Resource $con
 * @param string $editSql
 */
$query = mysqli_query($con, $editSql);
if (!$query) {
	/**
	 * !The query request failed
	 */
	echo mysqli_error($con);
	exit;
}

/**
 * ? We retrieve our results in a loop in case there are more than one
 * * INFO: mysqli_fetch_assoc($query) gives one result at a time
 */
while ($result = mysqli_fetch_assoc($query)) {
	$results[] = $result;
}

print_r($results);
