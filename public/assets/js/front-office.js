// Toggle menu visibility
function toggleMenu() {
    const menu = document.getElementById('content-menu');
    menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
}

// Close menu when clicking outside of it
window.onclick = function(event) {
    const menu = document.getElementById('content-menu');
    const profileImg = document.querySelector('.profile-picture');
    if (!profileImg.contains(event.target) && !menu.contains(event.target)) {
        menu.style.display = 'none';
    }
}
