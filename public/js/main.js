$(function() {
    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 100000,
      values: [ 15000, 50000 ],
      slide: function( event, ui ) {
        $( "#expected_income" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#expected_income" ).val( $( "#slider-range" ).slider( "values", 0 ) +
      " - " + $( "#slider-range" ).slider( "values", 1 ) 
      );
});
