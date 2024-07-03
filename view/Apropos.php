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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title><?= $title ?></title>
</head>

<body id="bodyApropos">
    <!-------------------------------------NAVBAR------------------------------------------------->
    <?php
    include("inc/navbar.php")
    ?>
    <!-------------------------------------FIN NAVBAR------------------------------------------------->

    <div class="container  px-4 py-5">
        <h2 class="pb-2 mt-3 text-center aboutMe ">A propos de moi</h2>
        <div class="row flex-lg-row-reverse align-items-center s py-5">
            <div class="col-10 col-sm-8 col-lg-6" data-aos="fade-left" data-aos-duration="2200">
                <img src="img/conceptCoding.png" class="d-block ms-5 img-fluid" alt="concept coding" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p class="aMonPropos" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="0">Bonjour !</p>
                <p class="aMonPropos" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300"> Je suis un développeur web junior formé au <a href="https://www.cf2m.be/formation/developpeur-web" target="_blank" class="text-decoration-none"><span id="CF2M">CF2M</span></a>, où j'ai suivi une formation intensive d'un an et demi. Avant de me lancer dans le développement web, j'ai travaillé dans le secteur de la vente.</p>
                <p class="aMonPropos" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600"> Cette expérience m'a permis d'acquérir de solides compétences en communication et en gestion des relations clients, qui se révèlent très utiles dans mon parcours actuel de développeur web. </p>
                <p class="aMonPropos" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="900">Le métier de développeur m'a toujours passionné, mais ce n'est que récemment que j'ai eu l'opportunité de m'y consacrer pleinement. </p>
                <p class="aMonPropos" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1200">Je suis une personne naturellement curieuse, toujours en quête d'apprentissage et de perfectionnement. Je cherche une entreprise qui me fera confiance et me permettra d'évoluer dans ce domaine, afin de pouvoir y contribuer activement tout en élargissant mes connaissances et compétences.</p>

            </div>
        </div>
    </div>

    <section id="competences">
        <h2 class="pb-2 mt-3 text-center  mb-2 " id="mesCompetences">Mes compétences</h2>


        <div class="container px-4 py-5">
            <div class="row align-items-md-center py-5">

                <div class="col ps-5 pt-3">
                    <div class="d-flex justify-content-between">
                        <p class="mb-1 skill">HTML</p>
                        <span class="mb-1">90%</span>
                    </div>
                    <div class="progress mb-4 shadow-lg" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 90%" data-aos="fade-right" data-aos-duration="1500"></div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="mb-1 skill">CSS</p>
                        <span class="mb-1">80%</span>
                    </div>
                    <div class="progress mb-4 shadow-lg" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress2" style="width: 80%" data-aos="fade-right" data-aos-duration="1500"></div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="mb-1 skill">PHP</p>
                        <span class="mb-1">65%</span>
                    </div>
                    <div class="progress mb-4 shadow-lg" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 65%" data-aos="fade-right" data-aos-duration="1500"></div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="mb-1 skill">GIT / GITHUB</p>
                        <span class="mb-1">95%</span>
                    </div>
                    <div class="progress mb-4 shadow-lg" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress2" style="width: 95%" data-aos="fade-right" data-aos-duration="1500"></div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="mb-1 skill">SYMFONY</p>
                        <span class="mb-1">In progress..</span>
                    </div>
                    <div class="progress mb-4 shadow-lg" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%" data-aos="fade-right" data-aos-duration="1500"></div>
                    </div>
                </div>

                <div class="col ps-5 pt-3">
                    <div class="d-flex justify-content-between">
                        <p class="mb-1 skill">Javascript</p>
                        <span class="mb-1">70%</span>
                    </div>
                    <div class="progress mb-4 shadow-lg" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress2" style="width: 70%" data-aos="fade-right" data-aos-duration="1500"></div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="mb-1 skill">Bootstrap</p>
                        <span class="mb-1">80%</span>
                    </div>
                    <div class="progress mb-4 shadow-lg" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar " style="width: 80%" data-aos="fade-right" data-aos-duration="1500"></div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="mb-1 skill">jQuery</p>
                        <span class="mb-1">75%</span>
                    </div>
                    <div class="progress mb-4 shadow-lg" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress2" style="width: 75%" data-aos="fade-right" data-aos-duration="1500"></div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="mb-1 skill">MySQL</p>
                        <span class="mb-1">60%</span>
                    </div>
                    <div class="progress mb-4 shadow-lg" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar  " style="width: 60%" data-aos="fade-right" data-aos-duration="1500"></div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="mb-1 skill">REACT</p>
                        <span class="mb-1">In progress..</span>
                    </div>
                    <div class="progress mb-4 shadow-lg" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress2" style="width: 50%" data-aos="fade-right" data-aos-duration="1500"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>