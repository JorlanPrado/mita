// Forgot Password
var forgotPassword = document.getElementById("forgotPassword");
var closeBtn = document.getElementById("close");
var credentialsContainer = document.getElementById("credentialsContainer");

forgotPassword.addEventListener("click", () => {
    credentialsContainer.style.display = "flex"
})
closeBtn.addEventListener("click", () => {
    credentialsContainer.style.display = "none"
})