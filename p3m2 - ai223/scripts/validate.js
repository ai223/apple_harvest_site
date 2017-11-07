// on load
$(document).ready(function () {

  $("#commentForm").on("submit", function() {
    // form is valid by default
    formIsValid = true;

    var value = jQuery("input[name='status']:checked").val();
    var nameIsValid = $("#userName").prop("validity").valid;
    var emailIsValid = $("#userEmail").prop("validity").valid;
    var textareaIsValid = $("#comments").prop("validity").valid;

    // hide all messages at the beginning to have them show up one by one
    $("#radioError").hide();
    $("#nameError").hide();
    $("#emailError").hide();
    $("#commentsError").hide();

    if((value == 'yes') || (value == "no")){
    } else {
      $("#radioError").show();
      return false;
    }  // end if

    if(!nameIsValid){
      $("#nameError").show();
      return false;
    }  // end if

    if(!emailIsValid){
      $("#emailError").show();
      return false;
    }  // end if

    if(!textareaIsValid){
      $("#commentsError").show();
      return false;
    }  // end if

    return formIsValid;

  });



});
