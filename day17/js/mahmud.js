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

function checkFirstName(){

    var firstNameValue = $('#firstName').val();
    if (firstNameValue.length>6 && firstNameValue.length<15){
        $('#firstNameError').text('');
        return true;
    }else {
        $('#firstNameError').text('First name should be 6 to 15 Charachter');
        return false;
    }


}


function checkLastName(){

    var firstNameValue = $('#lastName').val();
    if (firstNameValue.length>6 && firstNameValue.length<15){
        $('#lastNameError').text('');
        return true;
    }else {
        $('#lastNameError').text('Last name should be 6 to 15 Charachter');
        return false;
    }


}

function checkEmailAddress() {

    var emailAddress = $('#email').val();
    var pattern = new RegExp(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,3}$/i);
    if (pattern.test(emailAddress)){
        $('#emailError').text('');
        return true;

    }else {

        $('#emailError').text('Your Email Address is invalid');
        return false;
    }


}

function checkPassword() {

    var password = $('#password').val();

    if (password.length >= 6 && password.length <= 15){
        $('#passwordError').text('');
        return true;
    }else {
        $('#passwordError').text('Password Must be Minimum 6 Character ');
        return false;
    }

}

function checkconfirmPassword() {
    var password = $('#password').val();
    var confirmPassword = $('#confirmPassword').val();

    if (password == confirmPassword){
        $('#confirmPasswordError').text('');
        return true;
    }else {
        $('#confirmPasswordError').text('Password & Confirm are not same ');
        return false;
    }

}

function checkGender(){

    var gender = $('input[type="radio"]:checked').val();

    if (gender == 'Male'){

        $('genderError').text('');
        return true;

    } else if (gender == 'Female'){

        $('genderError').text('');
        return true;
    } else {

        $('genderError').text('Please select your gender');
        return false;
    }

}


function checkDistrictName() {

    var district = $('#district').val();

    if (district == 'Select'){
        $('#districtError').text('Please Select Your district Name');
        return false;

    } else {
        $('#districtError').text(' ');
        return true;

    }

}


$('#district').change(function () {
    checkDistrictName();
});

$('#firstName').keyup(function () {
    checkFirstName();
});

$('#lastName').keyup(function () {
    checkLastName();
});

$('#email').keyup(function () {
    checkEmailAddress();
});


$('#password').keyup(function () {
    checkPassword();
});

$('#checkbox').click(function () {

    if(this.checked){
        $("#password").attr('type','text')

    }else {

        $('#password').attr('type','password');
    }

});

$('#confirmPassword').keyup(function () {
    checkconfirmPassword();
});






$('#myForm').submit(function () {
    if (checkFirstName() == true && checkLastName()== true && checkPassword() == true && checkconfirmPassword() == true && checkGender()== true && checkEmailAddress()== true && checkDistrictName()==true) {

        return true;
    }else {
        return false;

    }

});