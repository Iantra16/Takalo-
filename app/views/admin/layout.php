<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? 'Admin - Takalo-takalo' ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AdminLTE 4 -->
    <link rel="stylesheet" href="/assets/admin/dist/css/adminlte.min.css">
    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="/assets/commun/css/custom.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/admin" class="nav-link">Accueil</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="/admin/logout">
                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/admin" class="brand-link">
            <span class="brand-text font-weight-light">Takalo-takalo Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/categories" class="nav-link">
                            <i class="nav-icon fas fa-tags"></i>
                            <p>Catégories</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/utilisateurs" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Utilisateurs</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0"><?= $title ?? 'Dashboard' ?></h1>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <?= $content ?? '' ?>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <strong>Takalo-takalo &copy; 2026</strong>
        <div class="float-end d-none d-sm-inline-block">
            Réalisé par: <strong>Votre Nom - ETU123456</strong>
        </div>
    </footer>
</div>
<!-- Sidebar active menu -->
<script src="/assets/commun/js/sidebar.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Bootstrap 5 (pour AdminLTE 4) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/admin/dist/js/adminlte.min.js"></script>
</body>
</html>