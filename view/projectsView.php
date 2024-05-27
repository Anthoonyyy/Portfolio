<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet">
    <title><?= $title ?></title>
</head>

<body class="projectsPage">
    <!-------------------------------------NAVBAR------------------------------------------------->
    <?php
    include("inc/navbar.php")
    ?>
    <!-------------------------------------FIN NAVBAR------------------------------------------------->

    <h1 class="pb-3 mt-3 text-center aboutMe ">Projects</h1>
    <div class="card mb-3 mt-3 cardContainer">
        <div class="row g-0 ">
            <div class="col-md-4">
                <img src="img/projets2.png" alt="Projects2" class="img-fluid rounded-start imgProjects">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-white">Projects 2</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 mt-3 cardContainer">
        <div class="row g-0 ">
            <div class="col-md-4">
                <img src="img/projets3.png" alt="Projects 3" class="img-fluid rounded-start imgProjects">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-white">Projects 3</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 mt-3 cardContainer">
        <div class="row g-0 ">
            <div class="col-md-4">
                <img src="img/projetsBronks.png" alt="Trendy Pants and Shoes" class="img-fluid rounded-start imgProjects">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-white">Projects 4</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>