// VARIABLE DECLARATION
const passwordInput = document.getElementById("passwordInput");
const showPasswordIcon = document.getElementById("showPassword");
const hidePasswordIcon = document.getElementById("hidePassword");

const createPasswordInput = document.getElementById("passwordInputRegCre");
const showCreatePasswordIcon = document.getElementById("showPasswordRegCre");
const hideCreatePasswordIcon = document.getElementById("hidePasswordRegCre");

const confirmPasswordInput = document.getElementById("passwordInputReg");
const showConfirmPasswordIcon = document.getElementById("showPasswordReg");
const hideConfirmPasswordIcon = document.getElementById("hidePasswordReg");
// FUNCTION DECALARATION
function togglePasswordVisibility(passwordInputId, showPasswordIconId, hidePasswordIconId) {

	const passwordInput = document.getElementById(passwordInputId);
    const showPasswordIcon = document.getElementById(showPasswordIconId);
    const hidePasswordIcon = document.getElementById(hidePasswordIconId);

    // TOGGLE PASSWORD USECASE 1 - toggle password to text, show icon to hide icon
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        showPasswordIcon.style.display = "inline";
        hidePasswordIcon.style.display = "none";

	// TOGGLE PASSWORD USECASE 2 - rollback text to password, hide icon to show icon
    } else {
        passwordInput.type = "password";
        showPasswordIcon.style.display = "none";
        hidePasswordIcon.style.display = "inline";
    }

}

const toggleForm = (page) => {
    const container = document.querySelector(".container-signinup");
    container.classList.toggle("active");
    window.location.href = page;
};

// EVENT LISTENER
passwordInput?.addEventListener("input", (event) => {
    // TOGGLE PASSWORD USECASE 3 : rollback empty input `input-password` to default behavior (as need)
    if (event.target.value == "") {
        passwordInput.type = "password";
        showPasswordIcon.style.display = "none";
        hidePasswordIcon.style.display = "inline";
    }
});

createPasswordInput?.addEventListener("input", (event) => {
    // TOGGLE PASSWORD USECASE 4 : rollback empty input `create-password` to default behavior (as need)
    if (event.target.value == "") {
        createPasswordInput.type = "password";
        showCreatePasswordIcon.style.display = "none";
        hideCreatePasswordIcon.style.display = "inline";
    }
});

confirmPasswordInput?.addEventListener("input", (event) => {
    // TOGGLE PASSWORD USECASE 5 : rollback empty input `confirm-password` to default behavior (as need)
    if (event.target.value == "") {
        confirmPasswordInput.type = "password";
        showConfirmPasswordIcon.style.display = "none";
        hideConfirmPasswordIcon.style.display = "inline";
    }
});