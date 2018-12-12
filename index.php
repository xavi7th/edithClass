<?php

$con = mysqli_connect('localhost', 'root', '', 'edit');

if (!$con) {
	/**
	 * !The connection request failed
	 */

	echo mysqli_connect_error();

	exit;
}

$editSql = "INSERT INTO efua (id, name, time, initials) VALUES(2, 'Dere', '2018-11-11 12:00:01', 'et')";

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
$editSql = "SELECT * FROM efua";

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
