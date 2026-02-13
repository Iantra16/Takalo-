<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Connexion</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AdminLTE 4 -->
    <link rel="stylesheet" href="/assets/admin/dist/css/adminlte.min.css">
    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="/assets/shared/css/custom.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-box {
            width: 400px;
        }
        .login-card-body {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        .login-logo {
            margin-bottom: 20px;
        }
        .login-logo a {
            color: white;
            font-size: 32px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .admin-badge {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            margin-left: 10px;
        }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- Logo -->
    <div class="login-logo">
        <a href="/">
            <b>Takalo</b>-takalo 
            <span class="admin-badge">
                <i class="fas fa-user-shield"></i> ADMIN
            </span>
        </a>
    </div>

    <!-- Card -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">
                <i class="fas fa-lock text-danger"></i> 
                <strong>Espace Administrateur</strong>
            </p>

            <form action="/admin/login" method="post">
                <!-- Username -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nom d'utilisateur" 
                           name="username" value="admin" required>
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>


                <!-- Boutons -->
                <div class="row">
                    <div class="col-12 mb-3">
                        <button type="submit" class="btn btn-danger btn-block">
                            <i class="fas fa-sign-in-alt"></i> Connexion Admin
                        </button>
                    </div>
                </div>

                <!-- Retour -->
                <div class="row">
                    <div class="col-12">
                        <a href="/login" class="btn btn-outline-secondary btn-block">
                            <i class="fas fa-arrow-left"></i> Retour à la page utilisateur
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/admin/dist/js/adminlte.min.js"></script>
</body>
</html>