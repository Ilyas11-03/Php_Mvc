<?php 
$title = "Modifier un stagiaire";
ob_start(); // Start output buffering

?>

<form action="index.php?action=update" method="post">

    <div class="form-group">
        <input type="hidden" class="form-control" name="Id" value="<?= $stagiaires->Id ?>">
    </div>

    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="Nom" value="<?= $stagiaires->Nom; ?>" required>
    </div>

    <div class="form-group">
        <label>Prénom</label>
        <input type="text" class="form-control" name="Prénom" value="<?= $stagiaires->Prénom; ?>" required>
    </div>

    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="Age" value="<?= $stagiaires->Age; ?>" required>
    </div>

    <div class="form-group">
        <label>Login</label>
        <input type="text" class="form-control" name="Login" value="<?= $stagiaires->Login; ?>" required>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="Password" value="<?= $stagiaires->Password; ?>" required>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Modifier">
    </div>

</form>

<?php
$content = ob_get_clean();

include 'layout.php';