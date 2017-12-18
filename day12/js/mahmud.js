/**
 * Created by Web App Develop-PHP on 12/13/2017.
 */

//alert('test');
// var btnElement = document.getElementById('btn');
//
// btnElement.onclick = function (){
//
//     var firstName = document.getElementById('firstName').value;
//     var lastName = document.getElementById('lastName').value;
//     var fullName = firstName+' '+lastName;
//     document.getElementById('fullName').value = fullName;
//
// }


var firstName = document.getElementById('first_Name');

var lastName = document.getElementById('last_Name');

firstName.onkeyup = function () {
    var x=document.getElementById("first_Name").value;
    document.getElementById("first").innerHTML = x;
}
lastName.onkeyup = function () {
    var y=document.getElementById("last_Name").value;
    document.getElementById("last").innerHTML = y;
}

lastName.onblur=function () {
    var x=document.getElementById("first_Name").value;
    var y=document.getElementById("last_Name").value;
    var z=x+" "+y;

    document.getElementById("full").innerHTML=z;
}


