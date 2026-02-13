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
<body class="layout-top-nav">
<div class="wrapper">
    
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="/" class="navbar-brand">
                <span class="brand-text font-weight-light"><b>Takalo-takalo</b></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="/mes-objets" class="nav-link">Mes objets</a>
                    </li>
                    <li class="nav-item">
                        <a href="/mes-echanges" class="nav-link">Mes échanges</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a href="/inscription" class="nav-link btn btn-primary text-white ms-2">Inscription</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="content">
            <div class="container mt-4">
                <?= $content ?? '' ?>
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