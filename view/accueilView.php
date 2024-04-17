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
    <title><?= $title ?></title>
</head>

<body class="homePage">
    <!-------------------------------------NAVBAR------------------------------------------------->
    <?php
    include("inc/navbar.php")
    ?>
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
                        <a href="?section=profil"> <button id="btn" class="display-8  mt-5 animate__animated animate__jackInTheBox animate__slow animate__delay-3s">Qui-suis-je ?</button></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-------------------------------------FIN SECTION ACCUEIL------------------------------------------------->


    <!-------------------------------------FOOTER------------------------------------------------->
    <?php
    include("inc/footer.php");
    ?>
    <!-------------------------------------FIN FOOTER------------------------------------------------->
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>



</html>