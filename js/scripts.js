$(function() {
	$.get('myfragments/heading')
		/**
		 * This function .done() fires when whenevr the request was successful
		 * sammy is a function variable that we are creating and telling jquery to save the data inside
		 */
		.done(function(sammy) {
			console.log('successful')

			/**
			 * The data that was gotten and saved inside the sammmy variable we created can be used however we like
			 */
			console.log(sammy)
			$('#result').html(sammy)
		})
		.fail(function() {
			/**
			 * This function fires when whenever the request was unsuccessful
			 */
			console.log('failed')
		})
})
