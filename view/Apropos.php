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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title><?= $title ?></title>
</head>

<body id="bodyApropos">
    <!-------------------------------------NAVBAR------------------------------------------------->
    <?php
    include("inc/navbar.php")
    ?>
    <!-------------------------------------FIN NAVBAR------------------------------------------------->

    <div class="container  px-4 py-5">
        <h2 class="pb-2 mt-3 text-center aboutMe animate__animated animate__pulse animate__infinite animate__slow ">A propos de moi</h2>
        <div class="row flex-lg-row-reverse align-items-center s py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="img/conceptCoding.png" class="d-block ms-5 img-fluid" alt="concept coding" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p class="aMonPropos">Bonjour !</p>
                <p class="aMonPropos"> Je suis un développeur web junior formé au <a href="https://www.cf2m.be/formation/developpeur-web" target="_blank" class="text-decoration-none"><span id="CF2M">CF2M</span></a>, où j'ai suivi une formation intensive d'un an et demi. Avant de me lancer dans le développement web, j'ai travaillé dans le secteur de la vente.</p>
                <p class="aMonPropos"> Cette expérience m'a permis d'acquérir de solides compétences en communication et en gestion des relations clients, qui se révèlent très utiles dans mon parcours actuel de développeur web. </p>
                <p class="aMonPropos">Le métier de développeur m'a toujours passionné, mais ce n'est que récemment que j'ai eu l'opportunité de m'y consacrer pleinement. </p>
                <p class="aMonPropos">Je suis une personne naturellement curieuse, toujours en quête d'apprentissage et de perfectionnement. Je cherche une entreprise qui me fera confiance et me permettra d'évoluer dans ce domaine, afin de pouvoir y contribuer activement tout en élargissant mes connaissances et compétences.</p>

            </div>
        </div>
    </div>
    <h2 class="pb-4 mt-3 text-center aboutMe mb-4">Mes compétences</h2>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>