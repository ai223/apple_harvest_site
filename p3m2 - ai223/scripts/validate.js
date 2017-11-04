// on load
$(document).ready(function () {

  $("#commentForm").on("submit", function() {
    console.log("Hello!");

    formIsValid = true;

    var value = jQuery("input[name='status']:checked").val();
    console.log("Value: " + value);
    var nameIsValid = $("#userName").prop("validity").valid;
    var emailIsValid = $("#userEmail").prop("validity").valid;
    var textareaIsValid = $("#comments").prop("validity").valid;

    $("#radioError").hide();
    $("#nameError").hide();
    $("#emailError").hide();
    $("#commentsError").hide();

    if((value == 'yes') || (value == "no")){
    } else {
      $("radioError").show();
      return False;
    }

    if(!nameIsValid){
      $("#nameError").show();
      return false;
    }  // end if

    if(!emailIsValid){
      $("#emailError").show();
      return false;
    }

    if(!textareaIsValid){
      $("#commentsError").show();
      return false;
    }

    return formIsValid;

  });



});
