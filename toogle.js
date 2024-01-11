var check = document.getElementById("check")
var uncheck = document.getElementById("uncheck")
var pass = document.getElementById("password")
var passConfirm = document.getElementById("passwordconfirm")

check.addEventListener('click', function() {
    pass.type = "text"
    passConfirm.type ="text"
})

uncheck.addEventListener('click', function() {
    pass.type = "password"
    passConfirm.type = "password"
})

