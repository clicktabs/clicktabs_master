
    $(document).ready(function () {
        const new_goals = $('#new_goals');
        new_goals.select2();

        new_goals.on('select2:select', function (e) {
            let selectedValue = e.params.data.id; // Get the selected value

            let textareaValue = $('#new_goals_content').val(); // Get the current value of the textarea

            // Split the current textarea value into an array
            let existingValues = textareaValue ? textareaValue.split('\n') : [];

            // Check if the selected value is already in the textarea
            if (!existingValues.includes(selectedValue)) {
                existingValues.push(selectedValue); // Add the selected value to the existing values array

                let updatedText = existingValues.join('\n'); // Convert the array to a comma-separated string
                $('#new_goals_content').val(updatedText); // Set the updated value of the textarea
            }
        });
        new_goals.on('select2:unselect', function (e) {
            let deselectedValue = e.params.data.id; // Get the deselected value

            let textareaValue = $('#new_goals_content').val(); // Get the current value of the textarea

            // Split the current textarea value into an array
            let existingValues = textareaValue ? textareaValue.split('\n') : [];

            // Remove the deselected value from the existing values array
            let updatedValues = existingValues.filter(value => value !== deselectedValue);

            let updatedText = updatedValues.join('\n'); // Convert the array to a comma-separated string
            $('#new_goals_content').val(updatedText); // Set the updated value of the textarea
        });
    });
