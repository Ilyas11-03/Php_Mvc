<?php ob_start(); 
$title = "Liste des stagiaires";
?>


<table class="table table-striped">
   <thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Login</th>
        <th>Actions</th>
    </tr>
   </thead>
   <tbody>
    <?php foreach($stagiaires as $st): ?>
    <tr>
        <td><?= $st->Id ?></td>
        <td><?= $st->Nom ?></td>
        <td><?= $st->Prénom ?></td>
        <td><?= $st->Age ?></td>
        <td><?= $st->Login ?></td>
        <td>  
            <a href="edit.php?id=<?php echo $st->Id?>" class="btn btn-success btn-sm"><i class="bi bi-pen"></i></a>
            <a href="delete.php?id=<?php echo $st->Id?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>           
        </td>
    </tr>
    <?php endforeach; ?>
   </tbody>
</table>
<?php
$content = ob_get_clean();

include 'layout.php';