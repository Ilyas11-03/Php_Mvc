<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <title>Liste des stagiaires</title>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Liste des stagiaires</a>
         </li>
         
         <li class="nav-item">
          <a class="nav-link active link-underline-dark" aria-current="page" href="create.php">Ajouter</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    
    <div class="container mt-2">
     <h1><?= $title ?></h1>
     <hr>
     <?= $content ?> <!-- Display the main content of the page -->
    </div>
    


</body>
</html>