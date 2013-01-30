/* 
 * This code will detect the changes from the 
 * web forms and submit the form to update the
 * database. 
 *
 *
 * By Noah Grubb
 *
 */

// Detect change in form
// $('select').change(function() {
//   // $('update').submit();
//   updateDatabase();
// });
$(document).ready(handler) 

$('form').on('change', 'select', function () {
	$('form').submit();
});


// $('#other').click(function() {
//   $('#target').submit();
// });

// Call AJAX method


// This function will use AJAX to 
// update the database
function updateDatabase() {

	 $.ajax({
        url: 'php/update.php',
        type: 'post',
        dataType: 'json',
        data: $('form#update').serialize(),

        beforeSend: function(){
    	// Handle the beforeSend event
        $('#loading').show();
        },

        complete: function(){
        // Handle the complete event
        $('#loading').hide();
        },

        success: function(data) {
                   ... do something with the data...
                 }
    });
}
