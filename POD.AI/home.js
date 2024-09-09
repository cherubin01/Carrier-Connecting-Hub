// Cookie notice
const cookieNotice = document.querySelector('.cookie-notice');
const cookieSettings = document.getElementById('cookie-settings');
const cookieAccept = document.getElementById('cookie-accept');

// Show/hide cookie notice based on user preference
function hideCookieNotice() {
    cookieNotice.style.display = 'none';
}

// Handle cookie settings
cookieSettings.addEventListener('click', function() {
    // Open cookie settings modal or redirect to settings page
});

// Handle cookie acceptance
cookieAccept.addEventListener('click', function() {
    hideCookieNotice();
    // Store user's cookie preference
});

// Check if user has already accepted cookies
const acceptedCookies = localStorage.getItem('acceptedCookies');
if (acceptedCookies) {
    hideCookieNotice();
}



