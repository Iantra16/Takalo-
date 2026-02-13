<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? 'Takalo-takalo' ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AdminLTE 4 -->
    <link rel="stylesheet" href="/assets/front/dist/css/adminlte.min.css">
    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="/assets/commun/css/custom.css">
    </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/user" class="nav-link">Accueil</a>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="/user/logout" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/" class="brand-link">
            <i class="fas fa-exchange-alt ms-2"></i>
            <span class="brand-text font-weight-light">Takalo-takalo</span>
        </a>

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="/user" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Accueil</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/mes-objets" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Mes objets</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/mes-echanges" class="nav-link">
                            <i class="nav-icon fas fa-exchange-alt"></i>
                            <p>Mes échanges</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid mt-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                            <div>
                                <div class="text-muted text-uppercase small">Plateforme d'echange</div>
                                <h1 class="h4 mb-0"><?= $title ?? 'Takalo-takalo' ?></h1>
                            </div>
                        </div>
                        <?= $content ?? '' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <strong>Takalo-takalo &copy; 2026</strong> - Plateforme d'échange d'objets
            <div class="float-end d-none d-sm-inline-block">
                Réalisé par: <strong>Votre Nom - ETU123456 / Coéquipier - ETU789012</strong>
            </div>
        </div>
    </footer>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Bootstrap 5 (pour AdminLTE 4) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/front/dist/js/adminlte.min.js"></script>
</body>
</html>