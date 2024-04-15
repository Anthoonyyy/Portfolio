<!DOCTYPE html>
<html lang="fr">

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
    <title>Portfolio Arnone Anthony</title>
</head>

<body id="homePage">
    <!-------------------------------------NAVBAR------------------------------------------------->
    <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
        <div class="container">
            <a class="navbar-brand " href="./" id="logo"> Arnone Anthony<span class="orange">.</span> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav  ms-auto" id="contenuNav">

                    <a class="nav-link active" aria-current="page" href="./">Accueil</a>
                    <a class="nav-link" href="#">Profil</a>
                    <a class="nav-link" href="#">Compétences</a>
                    <a class="nav-link" href="#">Portfolio</a>
                    <a class="nav-link" href="#">Contact</a>

                </div>
            </div>
        </div>
    </nav>
    <!-------------------------------------FIN NAVBAR------------------------------------------------->
    <!-------------------------------------SECTION ACCUEIL------------------------------------------------->
    <main>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="../img/banniere1-removebg.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6 ">
                    <h1 class="display-6  lh-1 mb-4 presentation animate__animated animate__tada ">Bienvenue sur mon portfolio!</h1>
                    <h2 class=" display-5  lh-1 mb-3 animate__animated animate__lightSpeedInLeft animate__slow animate__delay-1s presentation">Je suis <span class="orange">Arnone Anthony</span></h2>
                    <h3 class="display-8  mt-5 animate__animated animate__lightSpeedInRight animate__slow animate__delay-2s presentation">Développeur Full-Stack à votre service</h3>
                    <div class="text-center">
                        <button id="btn" class="display-8  mt-5 animate__animated animate__jackInTheBox animate__slow animate__delay-3s">Qui-suis-je ?</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-------------------------------------FIN SECTION ACCUEIL------------------------------------------------->


    <!-------------------------------------FOOTER------------------------------------------------->
    <div class=" container-fluid">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Accueil</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Profil</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Compétences</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Portfolio</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Contact</a></li>
            </ul>
            <p class="text-center text-body-secondary">© Arnone Anthony</p>
        </footer>
    </div>
    <!-------------------------------------FIN FOOTER------------------------------------------------->
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>



</html>