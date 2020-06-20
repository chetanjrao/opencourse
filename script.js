function checkPassword(event){
    event.preventDefault()
    var password = document.getElementById("psw")
    var repeat_password = document.getElementById("psw-repeat")
    var password_value = password.value
    var repeat_password_value = repeat_password.value
    if(password_value == repeat_password_value){
        var form = document.getElementById("form")
        form.submit()
    } else {
        alert("Passwords do not match")
    }
}

var submit_button = document.getElementById("submit_button")
submit_button.onclick = checkPassword