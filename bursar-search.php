<?php

$search_query = $_POST['search_query'];


$con = mysqli_connect('localhost', 'root', '', 'edit');

if (!$con) {
	/**
	 * !The connection request failed
	 */

	echo mysqli_connect_error();

	exit;
}

/**
 * ? Testing LIKE select queries
 * * NOTE The % acts as a wild card meaaning it doesn't matter what comes before and/ after
 */
$editSql = "SELECT * FROM efua_reloaded where name LIKE '%$search_query%'";

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
