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
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title><?= $title ?></title>
</head>

<body class="homePage">
    <img src="../img/design3.jpg" alt="image banniere" id="banner">
    <!-------------------------------------NAVBAR------------------------------------------------->
    <?php
    include("inc/navbar.php")
    ?>
    <!-------------------------------------FIN NAVBAR------------------------------------------------->

    <!-------------------------------------SECTION ACCUEIL------------------------------------------------->
    <!--<div class="blob"></div>-->
    <main>
        <div class="px-4 py-5 my-5 text-center">


            <div class="col-lg-6 mx-auto pt-5 mt-5">
                <h1 class="display-6 fw-bold text-white  presentation animate__animated animate__tada mb-5 pb-3">Bienvenue sur mon portfolio !</h1>
                <p class="display-6 text-white animate__animated animate__fadeInUp animate__slow animate__delay-1s " id="desc">
                    Je suis Arnone Anthony, développeur web Front-End</p>
                <a href="?section=Apropos"> <button class="button mt-5 animate__animated animate__zoomIn animate__slow animate__delay-2s">
                        Qui-suis-je?
                        <div class="hoverEffect">
                            <div>
                            </div>
                        </div>
                    </button>
                </a>

            </div>
        </div>
    </main>

    <!-------------------------------------FIN SECTION ACCUEIL------------------------------------------------->


    <!-------------------------------------FOOTER------------------------------------------------->
    <?php
    //include("inc/footer.php");
    ?>
    <!-------------------------------------FIN FOOTER------------------------------------------------->
    <!--<script src="../js/script.js"></script>-->
    <!-- <script src="js/blob.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>



</html>