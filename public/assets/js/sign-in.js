document.addEventListener('DOMContentLoaded', function() {
    const passwordField = document.getElementById('pwd');
    const confirmPasswordField = document.getElementById('pwdd');
    const passwordMatchMessage = document.getElementById('password-match');

    // Vérification du mot de passe à chaque saisie
    confirmPasswordField.addEventListener('input', function() {
        if (passwordField.value !== confirmPasswordField.value) {
            passwordMatchMessage.textContent = "Passwords do not match!";
        } else {
            passwordMatchMessage.textContent = "Passwords match.";
            passwordMatchMessage.style.color = 'green';
        }
    });
});
