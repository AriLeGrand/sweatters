<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=blog;charset=utf8", "root", "root");
if(isset($_POST['article_titre'], $_POST['article_contenu'])) {
   if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {
      
      $article_titre = htmlspecialchars($_POST['article_titre']);
      $article_contenu = htmlspecialchars($_POST['article_contenu']);
      $ins = $bdd->prepare('INSERT INTO article (titre, content) VALUES (?, ?)');
      $ins->execute(array($article_titre, $article_contenu));
      $message = 'Votre article a bien été posté';
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sweaters - New Thread</title>
</head>
<body>
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


   <form method="POST">
        <div class="card" style="margin: 2%; padding: 2%;">
            <input type="text" name="article_titre" placeholder="Subject" class="form-control"/><br />
            <textarea name="article_contenu" placeholder="Article Contents" class="form-control" style="height: 200px;"></textarea><br />
            <input type="submit" value="Submit"  class="btn btn-primary"/>
        </div>
   </form>
   <br />
   <center><?php if(isset($message)) { echo $message; } ?></center>


   <script src="script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>