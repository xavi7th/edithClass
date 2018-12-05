$(function() {
	/**
	 * REMEMBER console.log is your best buddy in JS
	 */

	$('.calculator__input-buttons').click(function(e) {
		/**
		 * This prevents the default action that should have been carried out.
		 * In this case submitting the form
		 */
		e.preventDefault()

		/**
		 * This retrieves the text content of the currently clicked button
		 * NOTE: $(this)
		 */
		buttonValue = $(this).text()

		/**
		 * This retrieves the current value of the input field
		 * NOTE .val() for input fields instead of .text()
		 */
		oldContent = $('.calculator__display').val()

		/**
		 * Check if the button that was clicked is not a number (NaN)
		 */
		if (isNaN(buttonValue)) {
			/**
			 * Check if they have previously saved an operation
			 */
			if ($('.calculator__operation').val().length != 0) {
				/**
				 * In case you want to trigger a form submit instead of an alert
				 */
				// $('form').submit()
				alert('You have chosen an operation already. Just hit the damned enter button already')
				return
			}

			if (buttonValue == '+') {
				operation = 'addition'
			} else if (buttonValue == '-') {
				operation = 'subtraction'
			} else if (buttonValue == 'x') {
				operation = 'times'
			} else if (buttonValue == '/') {
				operation = 'divide'
			} else if (buttonValue == '%') {
				operation = 'remainder'
			}

			/**
			 * Saving the operation in the operation input field
			 * Saving the current value of the display in the first value input field
			 * Clear the display input field so that they start entering the other number
			 */
			$('.calculator__operation').val(operation)
			$('.calculator__first-value').val(oldContent)
			$('.calculator__display').val(0)

			return
		}

		if (oldContent == 0) {
			newContent = buttonValue
		} else {
			newContent = oldContent + buttonValue
		}

		/**
		 * This sets the input field's value to a new value
		 * NOTE: There is a parameter inside .val()
		 */
		$('.calculator__display').val(newContent)
	})

	$('.calculator__submit_button').click(function(e) {
		e.preventDefault()
		console.log('Oops submit disabled')

		/**
		 * The serializeArray() function converts a form data to JSON so that we can send it to the server
		 * console.log($('#calculator').serializeArray())
		 */

		/**
		 * Sending data using post.
		 * NOTE: Curly braces
		 * NOTE: comma seperated
		 * NOTE: colon seperates key and value
		 * NOTE: key is not a string
		 * NOTE: url is a string and it's arelative url
		 *
		 * INFO: This data structure is called JSON
		 */
		$.post('operation.php', $('#calculator').serializeArray())
			.done(function(data) {
				$('#results').html(data)
			})
			.fail(function(e) {
				console.log(e)
			})
	})
})
