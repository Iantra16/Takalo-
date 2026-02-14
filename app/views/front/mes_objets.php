<?php
$items = $myobjets ?? [];
?>

<div class="container-fluid">
	<?php if (empty($items)) : ?>
		<div class="text-center text-muted py-5">
			<p>Aucun objet associé pour le moment.</p>
		</div>
	<?php else : ?>
		<div class="row g-4">
			<?php foreach ($items as $objet) : ?>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<div class="card h-100 shadow-sm">
						<!-- Une seule image (la première) -->
						<?php 
						$imageUrl = 'images/placeholder.jpg';
						if (!empty($objet['images']) && is_array($objet['images']) && isset($objet['images'][0]['urlImg'])) {
							$imageUrl = $objet['images'][0]['urlImg'];
						} elseif (!empty($objet['urlImg'])) {
							$imageUrl = $objet['urlImg'];
						}
						?>
						<img src="<?= htmlspecialchars($imageUrl) ?>" 
						     class="card-img-top" 
						     alt="<?= htmlspecialchars($objet['nom'] ?? '') ?>"
						     style="height: 250px; object-fit: cover;">
						
						<div class="card-body d-flex flex-column">
							<h5 class="card-title"><?= htmlspecialchars($objet['nom'] ?? '') ?></h5>
							<p class="card-text text-muted small flex-grow-1">
								<?= htmlspecialchars(substr($objet['description'] ?? '', 0, 100)) ?>
								<?= strlen($objet['description'] ?? '') > 100 ? '...' : '' ?>
							</p>
							<div class="d-flex justify-content-between align-items-center mt-2">
								<span class="badge bg-primary"><?= htmlspecialchars($objet['categorie_nom'] ?? 'Non catégorisé') ?></span>
								<h6 class="mb-0 text-success fw-bold"><?= number_format($objet['prix'] ?? 0, 2) ?> €</h6>
							</div>
						</div>
						
						<div class="card-footer bg-transparent border-top-0">
							<div class="d-grid gap-2 d-md-flex justify-content-md-between">
								<a href="detail_objet.php?id=<?= $objet['id'] ?>" class="btn btn-outline-primary btn-sm flex-fill">
									<i class="bi bi-eye"></i> Détails
								</a>
								<a href="modifier_objet.php?id=<?= $objet['id'] ?>" class="btn btn-outline-warning btn-sm flex-fill">
									<i class="bi bi-pencil"></i> Modifier
								</a>
							</div>
							<small class="text-muted d-block mt-2 text-center">
								Ajouté le <?= date('d/m/Y', strtotime($objet['created_at'] ?? 'now')) ?>
							</small>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>