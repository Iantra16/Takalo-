<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription - Takalo-takalo</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AdminLTE 4 -->
    <link rel="stylesheet" href="/assets/front/dist/css/adminlte.min.css">
    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="/assets/shared/css/custom.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px 0;
        }
        .register-box {
            width: 450px;
        }
        .register-card-body {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        .register-logo {
            margin-bottom: 20px;
        }
        .register-logo a {
            color: white;
            font-size: 32px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <!-- Logo -->
    <div class="register-logo">
        <a href="/"><b>Takalo</b>-takalo</a>
    </div>

    <!-- Card -->
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Créer un nouveau compte</p>

            <form action="/inscription" method="post">
                <!-- Nom -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nom" name="nom" required>
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>

                <!-- Prénom -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Prénom" name="prenom" required>
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>

                <!-- Email -->
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>

                <!-- Téléphone -->
                <div class="input-group mb-3">
                    <input type="tel" class="form-control" placeholder="Téléphone" name="telephone" required>
                    <div class="input-group-text">
                        <span class="fas fa-phone"></span>
                    </div>
                </div>

                <!-- Mot de passe -->
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Mot de passe" name="password" required>
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>

                <!-- Confirmation mot de passe -->
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Confirmer le mot de passe" 
                           name="password_confirm" required>
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>

                <!-- Boutons -->
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-user-plus"></i> S'inscrire
                        </button>
                    </div>
                </div>
            </form>

            <!-- Lien connexion -->
            <p class="mt-3 mb-1 text-center">
                <a href="/login">Vous avez déjà un compte ? Connectez-vous</a>
            </p>
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