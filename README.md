📌 CRUD Stagiaires en PHP (MVC)

Ce projet est une petite application CRUD (Create, Read, Update, Delete) permettant de gérer des stagiaires.
Il est développé en PHP avec une architecture MVC (Model-View-Controller) et utilise MySQL comme base de données via phpMyAdmin.

🚀 Prérequis

Avant de lancer le projet, assure-toi d’avoir installé :

XAMPP
 (Apache + MySQL + PHP)

Un navigateur (Chrome, Firefox, Brave, etc.)

phpMyAdmin (inclus dans XAMPP)

⚙️ Installation

Cloner ou copier le projet dans le dossier htdocs de XAMPP :

C:\xampp\htdocs\php-mvc-crud-stagiaire


Démarrer les services Apache et MySQL depuis le panneau de contrôle XAMPP.

Créer la base de données via phpMyAdmin :

Accéder à : http://localhost/phpmyadmin

Créer une nouvelle base :

CREATE DATABASE stagiaire_db;


Importer le fichier database.sql fourni (s’il existe).

Configurer la connexion à la base dans le projet (fichier config/database.php ou similaire) :

<?php
$host = "localhost";
$dbname = "stagiaire_db";
$username = "root";   // utilisateur par défaut sous XAMPP
$password = "";       // mot de passe vide par défaut

🏗️ Architecture du projet
php-mvc-crud-stagiaire/
│── config/          # Configuration de la base de données
│── controllers/     # Fichiers des contrôleurs (StagiaireController.php)
│── models/          # Fichiers des modèles (Stagiaire.php)
│── views/           # Vues (liste, ajout, édition, etc.)
│── public/          # index.php (point d'entrée)
│── database.sql     # Script de création de la bas

🔑 Fonctionnalités

✅ Ajouter un stagiaire
✅ Afficher la liste des stagiaires
✅ Modifier les informations d’un stagiaire
✅ Supprimer un stagiaire

📷 Exemple d’interface 

- Liste des stagiares
<img width="916" height="521" alt="image" src="https://github.com/user-attachments/assets/04d54bd9-62e5-4798-aa7b-0c2a2705692e" />

- Ajout d'un stagiare
<img width="897" height="533" alt="image" src="https://github.com/user-attachments/assets/93227050-3f37-438f-a1b6-7742da367bd7" />

- Modification d'un stagiare
<img width="901" height="536" alt="image" src="https://github.com/user-attachments/assets/64b57ea0-aaeb-4b4f-b927-0e78db5556b9" />

- Supression d'un stagiare
<img width="517" height="200" alt="image" src="https://github.com/user-attachments/assets/b1576b23-db63-4231-bdf4-89ece56e6616" />

