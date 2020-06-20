var password = document.getElementById("psw")
var repeat_password = document.getElementById("psw-repeat")
var error_text = document.getElementById("error_text")

const checkPassword = (event) => {
    console.log("Hello")
    var password_value = password.value
    var repeat_password_value = repeat_password.value
    if(password_value == repeat_password_value){
        // var form = document.getElementById("form")
        // form.submit()
        error_text.style.color = "green"
        error_text.innerText = "Hurray, passwords matching"
    } else {
        error_text.style.color = "red"
        error_text.innerText = "Hey, Passwords don't match with each other"
    }
}

const submitForm = (event) => {
    var password_value = password.value
    var repeat_password_value = repeat_password.value
    if(password_value == repeat_password_value){
        var form = document.getElementById("form")
        form.submit()
    } else {
        error_text.style.color = "red"
        error_text.innerText = "Hey, Passwords don't match with each other"
    }
}
//10806121
var email = document.getElementById("email")
var email_error_text = document.getElementById("email_error_text")
const checkEmail = (event) => {
    var email_value = email.value
    if(email_value.includes("@") && email_value.includes(".")){
        email_error_text.style.color = "green"
        email_error_text.innerText = "Email valid"
    } else {
        email_error_text.style.color = "red"
        email_error_text.innerText = "Email not valid"
    }
}

var submit_button = document.getElementById("submit_button")
repeat_password.onkeyup = checkPassword
submit_button.onclick = submitForm
email.onkeyup = checkEmail