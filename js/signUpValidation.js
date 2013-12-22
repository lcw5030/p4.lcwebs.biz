$('#email').on('click', function () {
	$('#error').html("This email address is");
	$('#error').val("This email address is");
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  if( !emailReg.test( '#email') ) {
    return false;
    $('#error').html("This email address is");
  } else {
    return true;
  }
});