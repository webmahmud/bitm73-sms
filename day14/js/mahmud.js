// $('#a').click(function () {
//     $('#a').css({
//
//         'color':'red',
//         'font-size': '120px',
//         'background-color':'black'
//
//     });
// });

// $('#btn').click(function () {
// var firstName = $('#firstName').val();
// var lastName = $('#lastName').val();
// var fullName = firstName +' '+ lastName;
//
// $('#fullName').val(fullName);
// //alert(fullName);
// });
//
// $('#img1').click(function () {
//     var imageUrl = $('#img1').attr('src');
//     $('#gallery').attr('src',imageUrl);
// });
//
// $('#img2').click(function () {
//     var imageUrl = $('#img2').attr('src');
//     $('#gallery').attr('src',imageUrl);
// });
//
// $('#img3').click(function () {
//     var imageUrl = $('#img3').attr('src');
//     $('#gallery').attr('src',imageUrl);
// });
//
// $('#img4').click(function () {
//     var imageUrl = $('#img4').attr('src');
//     $('#gallery').attr('src',imageUrl);
// });

$('#firstName').keyup(function () {
    var firstNameValue = $('#firstName').val();
    if (firstNameValue.length>6 && firstNameValue.length<15){
        $('#firstNameError').text('');
    }else {
        $('#firstNameError').text('First name should be 6 to 15 Charachter');
    }
});


$('#myForm').submit(function () {
   return false;
});