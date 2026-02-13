document.addEventListener('DOMContentLoaded', function() {
    // Gestion du menu actif
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-sidebar .nav-link');
    
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });

    // Gestion du toggle de la sidebar sur mobile
    const pushMenu = document.querySelector('[data-widget="pushmenu"]');
    const sidebar = document.querySelector('.main-sidebar');
    
    if (pushMenu && sidebar) {
        pushMenu.addEventListener('click', function(e) {
            e.preventDefault();
            sidebar.classList.toggle('sidebar-open');
        });
    }

    // Fermer la sidebar si on clique en dehors (sur mobile)
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) {
            if (!sidebar.contains(e.target) && !pushMenu.contains(e.target)) {
                sidebar.classList.remove('sidebar-open');
            }
        }
    });
});