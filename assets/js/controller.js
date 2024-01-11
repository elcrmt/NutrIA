function showError(errorType, errorMessage) {
  switch (errorType) {
    case "danger":
      document.getElementById("error-container").innerHTML =
        '<div class="error-container"><i class="fas fa-exclamation-triangle"></i><p>' +
        errorMessage +
        " </p></div>";
  }
}

function sendRegisterData(
  usernameInputValue,
  emailInputValue,
  passwordInputValue,
  passwordConfirmInputValue
) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("fulloader").style = "";
    var response = xhttp.responseText;

    if (response == "true") {
      setTimeout(function () {
        window.location.href = "login.php";
      }, 2000);
    } else {
      setTimeout(function () {
        document.getElementById("fulloader").style.display = "none";
        showError("danger", response);
      }, 2000);
    }
  };
  xhttp.open("POST", "register.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(
    "registerUser=true&username=" +
      usernameInputValue +
      "&email=" +
      emailInputValue +
      "&password=" +
      passwordInputValue +
      "&passwordconfirm=" +
      passwordConfirmInputValue
  );
}

function sendLoginData(emailInputValue, passwordInputValue) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("fulloader").style = "";
    var response = xhttp.responseText;
    if (response == "true") {
      setTimeout(function () {
        window.location.href = "teachai.php";
      }, 2000);
    } else {
      setTimeout(function () {
        document.getElementById("fulloader").style.display = "none";
        showError("danger", response);
      }, 2000);
    }
  };
  xhttp.open("POST", "login.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(
    "loginUser=true&email=" +
      emailInputValue +
      "&password=" +
      passwordInputValue
  );
}
