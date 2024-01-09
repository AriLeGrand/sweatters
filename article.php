<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=blog;charset=utf8", "root", "root");
if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $get_id = htmlspecialchars($_GET['id']);
   $article = $bdd->prepare('SELECT * FROM article WHERE id = ?');
   $article->execute(array($get_id));
   if($article->rowCount() == 1) {
      $article = $article->fetch();
      $titre = $article['titre'];
      $contenu = $article['content'];
   } else {
      die('Cet article n\'existe pas !');
   }
} else {
   die('Erreur');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sweaters</title>
</head>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <div class="container-fluid">
                
                <a class="navbar-brand" href="#">
                    <img id="navbar-brand-logo" src="css/img/Logo.png" style="width: 10vh;" onclick="alert(Date())">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><strong>Home</strong></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="nt.php">New Threads</a>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>
    </header>
<body>

   <div class="card" style="margin: 2%;">
   <div class="card-header">
      <h5 class="card-title"><?= $titre ?></h5>
   </div>
   <div class="card-body">
      <p class="card-text"><?= $contenu ?></p>
      <a onclick="cancelconf()" class="btn btn-danger float-end" style="margin: 1%;">delete</a>
      </div>
   </div>

   <script src="script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>