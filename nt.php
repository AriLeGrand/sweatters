<?php




?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sweaters - New Threads</title>



    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <div class="container-fluid">
                
                <a class="navbar-brand" href="#">
                    <img id="navbar-brand-logo" src="css/img/Logo.png" style="width: 10vh;">
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
    <form method="post" action="nt-from.php" id="message">
        <div class="mb-3">
            <label for="cnt" class="form-label">Create a new threads</label>
            <input type="text" class="form-control" id="cnt" style="height: 60px;">
            <div class="form-text">You have 4000 characters to write</div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> 
<!-- https://github.com/AriLeGrand/TennisClubTorcy/blob/main/index.html -> source mon github perso -->