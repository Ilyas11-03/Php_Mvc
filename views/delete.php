<?php
$title = "Suppression d'un stagiaire";
ob_start(); // Start output buffering 
var_dump($id); // For debugging: display the ID of the intern to be deleted  that we got from the controller
?> 

<p>Voulez vous vraiment supprimer le stagiaire ?</p>
    <a class="btn btn-danger" href="destroy.php?id=<?php echo $id; ?>">Valider la suppression</a>
    <a class="btn btn-warning" href="index.php">Annuler la suppression</a>
<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
include_once 'views/layout.php';