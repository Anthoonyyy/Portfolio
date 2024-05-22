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

<body class="homePage">
    <!-------------------------------------NAVBAR------------------------------------------------->
    <?php
    include("inc/navbar.php")
    ?>
    <!-------------------------------------FIN NAVBAR------------------------------------------------->
    <section class="section about-section bg-light" id="about">
        <div class="container">
            <div class="row align-items-center flex-row">
                <div class="col-lg-6">
                    <div class="about-avatar"> <img src="../img/avatarDev.png" title="avatar" alt="avatar dev"></div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="text-dark">Mon profil</h3>
                        <h6 class="lead" id="h6Lead">Développeur Full-Stack résidant à Bruxelles</h6>
                        <p>Je crée et développe des solutions numériques pour répondre aux besoins des clients, en me spécialisant dans la création de sites web dynamiques, d'applications web, etc. Mon objectif est de fournir des expériences utilisateur fluides et intuitives à travers des interfaces innovantes et des fonctionnalités conviviales.</p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label class="fw-bold">Anniversaire</label>
                                    <p>2 février 2002</p>
                                </div>
                                <div class="media">
                                    <label class="fw-bold">Age</label>
                                    <p>22 ans</p>
                                </div>
                                <div class="media">
                                    <label class="fw-bold">Ville</label>
                                    <p>Bruxelles</p>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label class="fw-bold">E-mail</label>
                                    <p>Anthony@mail.com</p>
                                </div>
                                <div class="media">
                                    <label class="fw-bold">Téléphone</label>
                                    <p>820-885-3321</p>
                                </div>

                                <div class="media">
                                    <label class="fw-bold">Disponibilité</label>
                                    <p>Disponible</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 mb-4 mb-sm-5 mt-5">
                            <div class="mb-4 mb-sm-5">
                                <span class="section-title  mb-3  mb-sm-4 fw-bold ">Skill</span>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">HTML</div>
                                        <div class="col-6 text-end">100%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                </div>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">CSS</div>
                                        <div class="col-6 text-end">70%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                </div>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">Javascript</div>
                                        <div class="col-6 text-end">50%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                </div>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">PHP</div>
                                        <div class="col-6 text-end">50%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium" style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                </div>
                            </div>
                            <div>
                                <span class="section-title fw-bold mb-3 mb-sm-4">Education</span>
                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                <p class="mb-1-9">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>