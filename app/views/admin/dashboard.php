<main>
    <!-- Statistiques principales -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?= isset($users) ? count($users) : 0 ?></h3>
                    <p>Total des Utilisateurs</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="/admin/utilisateurs" class="small-box-footer">
                    Voir plus <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>0</h3>
                    <p>Catégories</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tags"></i>
                </div>
                <a href="/admin/categories" class="small-box-footer">
                    Voir plus <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>0</h3>
                    <p>Objets</p>
                </div>
                <div class="icon">
                    <i class="fas fa-cube"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Voir plus <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>0</h3>
                    <p>Échanges</p>
                </div>
                <div class="icon">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Voir plus <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

 
</main>