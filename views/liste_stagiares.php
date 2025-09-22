<?php
$title = "Liste des stagiaires";

ob_start();
?>
    <a href="index.php?action=create" class="btn btn-primary">Ajouter</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>Login</th>
            <th>Actions</th>
        </tr>

        </thead>
        <tbody>
        <?php foreach ($stagiaires as $stagiaire): ?>
            <tr>
                <td><?= $stagiaire->Id ?></td>
                <td><?= $stagiaire->Nom ?></td>
                <td><?= $stagiaire->Prénom ?></td>
                <td><?= $stagiaire->Age ?></td>
                <td><?= $stagiaire->Login ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $stagiaire->Id?>" class="btn btn-success btn-sm"><i class="bi bi-pen"></i></a>
                    <a href="index.php?action=delete&id=<?php echo $stagiaire->Id?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>