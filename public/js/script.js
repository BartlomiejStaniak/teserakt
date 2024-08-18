document.addEventListener('DOMContentLoaded', function () {
    // Password strength checker
    let password = document.querySelector('#password');
    let strengthOutput = document.querySelector('#strengthOutput');

    password.addEventListener('input', function () {
        let strength = getPasswordStrength(password.value);
        if (strength < 2) {
            strengthOutput.textContent = 'Weak';
            strengthOutput.style.color = 'red';
        } else if (strength >= 2 && strength < 4) {
            strengthOutput.textContent = 'Moderate';
            strengthOutput.style.color = 'orange';
        } else {
            strengthOutput.textContent = 'Strong';
            strengthOutput.style.color = 'green';
        }
    });

    function getPasswordStrength(password) {
        let strength = 0;
        if (password.length > 5) strength++;
        if (password.length > 7) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^A-Za-z0-9]/.test(password)) strength++;
        return strength;
    }

    // Show/Hide password
    let togglePassword = document.createElement('i');
    togglePassword.classList.add('fa', 'fa-eye', 'fa-eyeball');
    password.parentNode.appendChild(togglePassword);

    togglePassword.addEventListener('click', function () {
        if (password.type === 'password') {
            password.type = 'text';
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-eye-slash');
        } else {
            password.type = 'password';
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');
        }
    });
});
