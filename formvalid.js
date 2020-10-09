
function formValidation() {

var firstname = document.getElementById('firstname');
var addr = document.getElementById('addr');
var zip = document.getElementById('zip');
var state = document.getElementById('state');
var username = document.getElementById('username');
var email = document.getElementById('email');

if (firstname.value.length == 0) {
document.getElementById('head').innerText = "* All fields are mandatory *"; 
firstname.focus();
return false;
}

if (inputAlphabet(firstname, "* For your name please use alphabets only *")) {
if (lengthDefine(username, 6, 8)) {
if (emailValidation(email, "* Please enter a valid email address *")) {
if (trueSelection(state, "* Please Choose any one option")) {
if (textAlphanumeric(addr, "* For Address please use numbers and letters *")) {
if (textNumeric(zip, "* Please enter a valid zip code *")) {
return true;
}
}
}
}
}
}
return false;
}

function textNumeric(inputtext, alertMsg) {
var numericExpression = /^[0-9]+$/;
if (inputtext.value.match(numericExpression)) {
return true;
} else {
document.getElementById('p6').innerText = alertMsg;
inputtext.focus();
return false;
}
}

function inputAlphabet(inputtext, alertMsg) {
var alphaExp = /^[a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
} else {
document.getElementById('p1').innerText = alertMsg; 

inputtext.focus();
return false;
}
}

function textAlphanumeric(inputtext, alertMsg) {
var alphaExp = /^[0-9a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
} else {
document.getElementById('p5').innerText = alertMsg;
inputtext.focus();
return false;
}
}

function lengthDefine(inputtext, min, max) {
var uInput = inputtext.value;
if (uInput.length >= min && uInput.length <= max) {
return true;
} else {
document.getElementById('p2').innerText = "* Please enter between " + min + " and " + max + " characters *"; 
inputtext.focus();
return false;
}
}

function trueSelection(inputtext, alertMsg) {
if (inputtext.value == "Please Choose") {
document.getElementById('p4').innerText = alertMsg;
inputtext.focus();
return false;
} else {
return true;
}
}

function emailValidation(inputtext, alertMsg) {
var emailExp = /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
if (inputtext.value.match(emailExp)) {
return true;
} else {
document.getElementById('p3').innerText = alertMsg;
inputtext.focus();
return false;
}
}
