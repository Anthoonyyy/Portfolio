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
    <!-------------------------------------NAVBAR------------------------------------------------->
    <?php
    include("inc/navbar.php")
    ?>
    <!-------------------------------------FIN NAVBAR------------------------------------------------->

    <!-------------------------------------SECTION ACCUEIL------------------------------------------------->
    <div class="blob"></div>
    <main>
        <div class="px-4 py-5 my-5 text-center">

            <h1 class="display-6 fw-bold  presentation animate__animated animate__tada">HEY, I'M ARNONE ANTHONY </h1>
            <div class="col-lg-6 mx-auto">
                <p class="display-6 animate__animated animate__fadeInUp animate__slow animate__delay-1s  mt-5" id="desc">
                    I build innovative web projects as a full-stack developer that <br>transform ideas into reality and ensure success.</p>
                <a href="?section=about"> <button class="button mt-5 animate__animated animate__zoomIn animate__slow animate__delay-2s">
                        About me
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
    <script src="js/blob.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>



</html>