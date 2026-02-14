<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion - Takalo-takalo</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AdminLTE 4 -->
    <link rel="stylesheet" href="/assets/front/dist/css/adminlte.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .login-page {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .login-box {
            width: 400px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0 !important;
            padding: 30px;
        }
        .card-header h1 {
            margin: 0;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
        }
        .card-body {
            padding: 40px;
        }
        .login-box-msg {
            text-align: center;
            margin-bottom: 30px;
            color: #666;
            font-size: 16px;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .input-group-text {
            background-color: #f8f9fa;
            border-right: none;
        }
        .form-control {
            border-left: none;
            padding: 12px;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 12px;
            font-weight: bold;
            font-size: 16px;
        }
        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        .divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
        }
        .divider::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 45%;
            height: 1px;
            background: #ddd;
        }
        .divider::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            width: 45%;
            height: 1px;
            background: #ddd;
        }
        .divider span {
            background: white;
            padding: 0 10px;
            color: #999;
        }
        .btn-admin {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border: none;
            color: white;
            padding: 12px;
            font-weight: bold;
        }
        .btn-admin:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(240, 147, 251, 0.4);
            color: white;
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
        .register-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    
    <!-- Card -->
    <div class="card card-outline">
        <!-- Header -->
        <div class="card-header">
            <h1><i class="fas fa-exchange-alt"></i> Takalo-takalo</h1>
        </div>
        
        <!-- Body -->
        <div class="card-body">
            <p class="login-box-msg">Connectez-vous pour échanger vos objets</p>

            <?php if (!empty($error)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <form action="/user/login" method="post">
                <!-- Email -->
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" 
                           class="form-control" 
                           placeholder="Email" 
                           name="email" 
                           required
                           autocomplete="email">
                </div>

                <!-- Mot de passe -->
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" 
                           class="form-control" 
                           placeholder="Mot de passe" 
                           name="password" 
                           required
                           autocomplete="current-password">
                </div>

                <!-- Bouton connexion -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-sign-in-alt"></i> Se connecter
                    </button>
                </div>
            </form>

            <!-- Divider -->
            <div class="divider">
                <span>ou</span>
            </div>

            <!-- Bouton Admin -->
            <div class="d-grid gap-2">
                <a href="/admin/login" class="btn btn-admin">
                    <i class="fas fa-user-shield"></i> Accès Administrateur
                </a>
            </div>

            <!-- Lien inscription -->
            <div class="register-link">
                <p>Pas encore de compte ? 
                    <a href="/user/inscription">Inscrivez-vous</a>
                </p>
            </div>
        </div>
    </div>

</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/front/dist/js/adminlte.min.js"></script>
</body>
</html>