<?php 
$title = "Ajouter un stagiaire";
ob_start(); 
?>

<form action="store.php" method="post">

    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="Nom" required>
    </div>

    <div class="form-group">
        <label>Prénom</label>
        <input type="text" class="form-control" name="Prénom" required>
    </div>

    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="Age" required>
    </div>

    <div class="form-group">
        <label>Login</label>
        <input type="text" class="form-control" name="Login" required>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="Password" required>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Ajouter">
    </div>

</form>

<?php
$content = ob_get_clean();

include 'layout.php';