 $(function() {
 	'use strict'
 	$('#checkAll').on('click', function() {
 		if ($(this).is(':checked')) {
 			$('.custom-checkbox input').each(function() {
 				$(this).closest('.main-mail-item').addClass('selected');
 				$(this).attr('checked', true);
 			});
 			$('.btn-group .btn:not(:first-child)').removeClass('disabled');
 		} else {
 			$(' .custom-checkbox input').each(function() {
 				$(this).closest('.main-mail-item').removeClass('selected');
 				$(this).attr('checked', false);
 			});
 			$('.btn-group .btn:not(:first-child)').addClass('disabled');
 		}
 	});
	
 });