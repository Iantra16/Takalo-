<?php
$rows = $users ?? [];
?>

<div class="table-responsive">
    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Creation</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($rows)) : ?>
                <tr>
                    <td colspan="6" class="text-center text-muted">Aucun utilisateur.</td>
                </tr>
            <?php else : ?>
                <?php foreach ($rows as $user) : ?>
                    <tr>
                        <td><?= htmlspecialchars($user['idUser'] ?? '') ?></td>
                        <td><?= htmlspecialchars($user['nom'] ?? '') ?></td>
                        <td><?= htmlspecialchars($user['prenom'] ?? '') ?></td>
                        <td><?= htmlspecialchars($user['email'] ?? '') ?></td>
                        <td><?= htmlspecialchars($user['telephone'] ?? '') ?></td>
                        <td><?= htmlspecialchars($user['created_at'] ?? '') ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
