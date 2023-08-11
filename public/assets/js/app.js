const inputPassword = document.getElementById("password");
const togglePassword = document.querySelector(".btn-eye");

togglePassword.addEventListener("click", function () {
    const type =
        inputPassword.getAttribute("type") === "password" ? "text" : "password";
    inputPassword.setAttribute("type", type);
    togglePassword.classList.toggle("bi-eye");
    togglePassword.classList.toggle("bi-eye-slash");
});
