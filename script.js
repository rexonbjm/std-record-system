document.addEventListener("DOMContentLoaded", function() {
    const loginLink = document.getElementById("loginLink");
    const registerLink = document.getElementById("registerLink");
    const loginForm = document.getElementById("loginForm");
    const registerForm = document.getElementById("registerForm");
    const showLogin = document.getElementById("showLogin");
    const showRegister = document.getElementById("showRegister");

    // Function to toggle login form
    function toggleLoginForm() {
        loginForm.classList.add("active");
        registerForm.classList.remove("active");
    }

    // Function to toggle register form
    function toggleRegisterForm() {
        loginForm.classList.remove("active");
        registerForm.classList.add("active");
    }

    // Function to close forms
    function closeForms() {
        loginForm.classList.remove("active");
        registerForm.classList.remove("active");
    }

    // Event listeners
    loginLink.addEventListener("click", toggleLoginForm);
    registerLink.addEventListener("click", toggleRegisterForm);
    showLogin.addEventListener("click", toggleLoginForm);
    showRegister.addEventListener("click", toggleRegisterForm);

    // Close forms when close icon is clicked
    const closeIcons = document.querySelectorAll(".closeicon");
    closeIcons.forEach(icon => {
        icon.addEventListener("click", closeForms);
    });
});

    