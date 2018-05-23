$(function() {
  



});

$("#btnEncIn").on("click", function () {
  insert_Enc();
});

function insert_Enc() {
  var _token = $('input[name="_token"]').val();
  $.ajax({
    type: "POST",
    url: "/guestEncInsert",
    data: { _token : _token },
    success: function (data){
      console.log(data);
    },
    error: function (data) {
      console.log('Error:', data);
    }
  });
}

function submitButton() {
  $('#loginform').submit();
}