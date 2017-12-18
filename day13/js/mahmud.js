var addBtn = document.getElementById('addBtn');
var subBtn = document.getElementById('subBtn');
var mulBtn = document.getElementById('mulBtn');
var divBtn = document.getElementById('divBtn');
var remBtn = document.getElementById ('remBtn');

addBtn.onclick = function () {
    var firstNumber = Number(document.getElementById("firstNumber").value);
    var secondNumber = Number(document.getElementById('secondNumber').value);

    var resultNumber = firstNumber + secondNumber;

    document.getElementById('resultNumber').value = resultNumber;
};

subBtn.onclick = function () {
    var firstNumber = Number(document.getElementById("firstNumber").value);
    var secondNumber = Number(document.getElementById('secondNumber').value);
    var resultNumber = firstNumber - secondNumber;
    document.getElementById('resultNumber').value = resultNumber;
};

mulBtn.onclick = function () {
    var firstNumber = Number(document.getElementById("firstNumber").value);
    var secondNumber = Number(document.getElementById('secondNumber').value);
    var resultNumber = firstNumber * secondNumber;
    document.getElementById('resultNumber').value = resultNumber;
};

divBtn.onclick = function () {
    var firstNumber = Number(document.getElementById("firstNumber").value);
    var secondNumber = Number(document.getElementById('secondNumber').value);
    var resultNumber = firstNumber / secondNumber;
    document.getElementById('resultNumber').value = resultNumber;
};

remBtn.onclick = function () {
    var firstNumber = Number(document.getElementById("firstNumber").value);
    var secondNumber = Number(document.getElementById('secondNumber').value);
    var resultNumber = firstNumber % secondNumber;
    document.getElementById('resultNumber').value = resultNumber;
};


var redBtn = document.getElementById('redBtn');
var greenBtn = document.getElementById('greenBtn');
var blueBtn = document.getElementById('blueBtn');
var defaultBtn = document.getElementById('defaultBtn');

redBtn.onclick = function () {
    var divEelment = document.getElementById("div");
    divEelment.className='class-one';

};

greenBtn.onclick = function () {
    var divEelment = document.getElementById("div");
    divEelment.className='class-two';
};

blueBtn.onclick = function () {
    var divEelment = document.getElementById("div");
    divEelment.className='class-three';
    divEelment.stylers.transaction = '1s';
};


defaultBtn.onclick = function () {
    var divEelment = document.getElementById("div");
    divEelment.className='class-four';

};




var createElement = document.getElementById('createElement');

createElement.onclick = function () {
    var putHeight = document.getElementById('putHeight').value;
    var putWidth  = document.getElementById('putWidth').value;
    var putColor = document.getElementById('putColor').value;

    var newdiv = document.getElementById('newdiv');

    newdiv.style.height = putHeight+'px';
    newdiv.style.width = putWidth+'px';
    newdiv.style.backgroundColor = putColor;
};








