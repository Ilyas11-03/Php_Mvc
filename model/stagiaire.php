<?php
// fonctions to interact with the database
function database_connection() {

    $pdo = new PDO('mysql:dbname=ofppt;host=localhost', 'root', '');
    return $pdo;

}
// function to get the list of interns from the database
function liste_stagiares() {

    $pdo = database_connection();
    $stagiaire = $pdo->query('SELECT * FROM stagiare ORDER BY Id DESC')->fetchAll(PDO::FETCH_OBJ);
    return $stagiaire;
}

function create() {
    
    extract($_POST); // Extract variables from the $_POST array to individual variables
    $pdo = database_connection(); // Establish a database connection
    $sqlState = $pdo->prepare('INSERT INTO stagiare VALUES(null,?,?,?,?,?)'); // Prepare an SQL statement to insert a new intern into the 'stagiare' table
    return $sqlState->execute([$Nom, $Prénom, $Age, $Login, $Password]); // Execute the prepared statement with the provided values


    // Remarque : pour les variables $Nom, $Prénom, $Age, $Login, $Password, on utilise la fonction extract() pour extraire les valeurs du tableau associatif $_POST et les assigner à des variables individuelles.
    //On doit respecter le majuscule et minuscule des noms des champs dans la table de la base de données.
}

function edit($Id, $Nom, $Prénom, $Age, $Login, $Password) {
   
    $pdo = database_connection();
    $sqlState = $pdo->prepare('UPDATE stagiare SET Nom =? , Prénom = ? , Age = ? , Login = ?, Password = ? WHERE Id = ?');
    return $sqlState->execute([$Nom, $Prénom, $Age, $Login, $Password, $Id]);


}

function delete($id) {
    $pdo = database_connection();
    $sqlState = $pdo->prepare('DELETE FROM stagiare WHERE Id = ?'); // Prepare an SQL statement to delete an intern from the 'stagiare' table based on the provided ID
    return $sqlState->execute([$id]);
}

function view($id) {
    $pdo = database_connection(); 
    $sqlState = $pdo->prepare('SELECT * FROM stagiare WHERE Id = ?'); // Prepare an SQL statement to select an intern from the 'stagiare' table based on the provided ID
    $sqlState->execute([$id]); // Execute the prepared statement with the provided ID
    return $sqlState->fetch(PDO::FETCH_OBJ); // Fetch and return the result as an object
}
?>