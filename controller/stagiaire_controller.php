<?php
require_once 'model/stagiaire.php'; // Include the model file to access database functions

function listeStagiaireAction() {
      
    $stagiaires = liste_stagiares(); // Call the function to get the list of interns from the database
    require_once 'views/liste_stagiares.php'; // Include the view file to display the list of interns

}

function createAction() {
    
    require_once 'views/create.php';

}

function storeAction() {

    create(); // call the create function from the model to insert a new intern into the database
    header('location:index.php?action=list'); // redirect to the index page after storing the new intern
    
}

function editAction() {
     
     $id = $_GET['id'];
     $stagiaires = view($id); // Call the function to get the intern details by ID from the database
     require_once 'views/edit.php';

}

function updateAction() {
     extract($_POST); // extrait toutes les variables du formulaire
     edit($Id, $Nom, $Prénom, $Age, $Login, $Password); // Call the edit function from the model to update the intern details in the database
     header('location:index.php?action=list');
}

function deleteAction() {
    $id = $_GET['id']; // Get the ID of the intern to be deleted from the URL parameter
    require_once 'views/delete.php';
}

function destroyAction() {
    destroy($_GET['id']); // Call the delete function from the model to delete the intern from the database
    header('location:index.php?action=list'); // Redirect to the index page after deletion
}