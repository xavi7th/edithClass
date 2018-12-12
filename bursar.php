<?php

$con = mysqli_connect('localhost', 'root', '', 'edit');

if (!$con) {
	/**
	 * !The connection request failed
	 */

	echo mysqli_connect_error();

	exit;
}
/**
 * ? Select user details fior use in our select field
 */
$editSql = "SELECT id, name FROM efua_reloaded";

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


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	<form action="bursar-process.php" method="post">

		<select name="user_id" id="">
			<?php foreach ($results as $user) : ?>
				<option value="<?php echo $user['id'] ?>"> <?php echo $user['name'] ?></option>
		<?php endforeach; ?>
		</select>

		<input type="number" placeholder="amount" name="amount">
		<input type="datetime-local" name="payment_date">

		<button type="submit">Enter Record</button>

	</form>
</body>
</html>
