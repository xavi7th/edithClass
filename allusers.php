<?php

$users = [
	'Andrew',
	'James',
	'John',
	'Jane',
	'Peter',
	'Matthew',
	'Bartholomew',
	'Philip',
	'Paul',
	'Matthias',
	'James the great',
	'Thomas',
	'Rhoda',
	'Patrick',
	'Iraneus',
	'Edith',
];

$newuser = $_GET['new'];
array_push($users, $newuser);
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

<ul>
	<?php foreach ($users as $key => $user) : ?>

		<li>

			<strong>

				<?php echo $key + 1 . ': '; ?>

			</strong>

			<?php echo $user; ?>
		</li>

	<?php endforeach; ?>
</ul>

</body>
</html>


<style>
	li{
		list-style: none;
		min-height: 20px;
		border-bottom: 1px dotted silver;
		margin-left: 12px;
		padding-bottom: 5px;
			}

			li:nth-of-type(2n){
				background-color: rgb(157, 50, 0, 0.3);
			}
</style>
