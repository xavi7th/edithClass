<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		form{
			padding: 2%;
			background-color: whitesmoke;
			width: 20%;
			margin: auto;
		}

		input{
			display: block;
			margin-bottom: 15px;
			text-align: right;
		}

		.calculator__input-buttons{
			float: left;
			margin-right: 5px;
		}

		.calculator__input-buttons:nth-of-type(5n){
			margin-bottom: 15px;
		}

		.calculator__input-buttons:nth-of-type(6n){
			clear: both;
		}

		.calculator__submit_button{
			display: block;
			clear: both;
			width: 100%;
		}

		.clearfix{
			clear: both;
			height: 1px;
			display: block;
		}
	</style>
</head>
<body>
	
	<div class="page">
		<div class="calculator">
			<form action="operation.php" method="post">
				<input name="calculator__display" class="calculator__display" readonly value="0">
				<input type="hidden" name="calculator__operation" class="calculator__operation">
				<input type="hidden" name="calculator__first" class="calculator__first-value">
				<!-- <input class="calculator__second-value" readonly> -->
				<button class="calculator__input-buttons">1</button>
				<button class="calculator__input-buttons">2</button>
				<button class="calculator__input-buttons">3</button>
				<button class="calculator__input-buttons">4</button>
				<button class="calculator__input-buttons">5</button>
				<button class="calculator__input-buttons">6</button>
				<button class="calculator__input-buttons">7</button>
				<button class="calculator__input-buttons">8</button>
				<button class="calculator__input-buttons">9</button>
				<button class="calculator__input-buttons">0</button>
				<button class="calculator__input-buttons calculator__action-buttons calculator__input-buttons--plus-button">+</button>
				<button class="calculator__input-buttons calculator__action-buttons calculator__input-buttons--minus-button">-</button>
				<button class="calculator__input-buttons calculator__action-buttons calculator__input-buttons--division-button">/</button>
				<button class="calculator__input-buttons calculator__action-buttons calculator__input-buttons--times-button">x</button>
				<button class="calculator__input-buttons calculator__action-buttons calculator__input-buttons--modulo-button">%</button>
				<button class="calculator__submit_button">Enter</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>