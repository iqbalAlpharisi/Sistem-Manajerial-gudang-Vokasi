document.addEventListener('DOMContentLoaded', function () {
    var userMenuButton = document.getElementById('user-menu-button');
    var userDropdown = document.getElementById('user-dropdown');

    userMenuButton.addEventListener('click', function () {
        userDropdown.classList.toggle('hidden');

        var isExpanded = userDropdown.classList.contains('hidden') ? 'false' : 'true';
        userMenuButton.setAttribute('aria-expanded', isExpanded);
    });

    document.addEventListener('click', function (event) {
        if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
            userDropdown.classList.add('hidden');
            userMenuButton.setAttribute('aria-expanded', 'false');
        }
    });
});