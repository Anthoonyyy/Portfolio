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

<body id="projectsPage">
    <!-------------------------------------NAVBAR------------------------------------------------->
    <?php
    include("inc/navbar.php")
    ?>
    <!-------------------------------------FIN NAVBAR------------------------------------------------->

    <h1 class="pb-3 mt-3 text-center aboutMe " id="mesProjets">Mes Projets</h1>


    <div class="container mt-5 pt-5">
        <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 g-5">
            <div class="col ">
                <div class="card border-0">
                    <img src="../img/projet1.png" class="card-img-top" alt="Projet formation 1"/>
                    <div class="card-body">
                        <h5 class="card-title text-center">Projet de  formation 1</h5>
                        <p class="card-text">
                            <button class="btnVoirPlus mx-auto" data-bs-toggle="modal" data-bs-target="#modalProjet1">
                                <span>Voir plus</span>
                                <svg width="15" height="15" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linejoin="round" stroke-linecap="round"></path>
                                </svg>
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <img src="../img/projet2.png" class="card-img-top" alt="Projet formation 2"/>
                    <div class="card-body">
                        <h5 class="card-title text-center">Projet de formation 2</h5>
                        <p class="card-text">
                            <button class="btnVoirPlus mx-auto" data-bs-toggle="modal" data-bs-target="#modalProjet2">
                                <span>Voir plus</span>
                                <svg width="15" height="15" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linejoin="round" stroke-linecap="round"></path>
                                </svg>
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0">
                    <img src="../img/projet3.png" class="card-img-top" alt="Projet de formation 3" id="projet3">
                    <div class="card-body">
                        <h5 class="card-title text-center">Projet de formation 3</h5>
                        <p class="card-text">
                            <button class="btnVoirPlus mx-auto" data-bs-toggle="modal" data-bs-target="#modalProjet3">
                                <span>Voir plus</span>
                                <svg width="15" height="15" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linejoin="round" stroke-linecap="round"></path>
                                </svg>
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <img src="../img/projet4.png" class="card-img-top" alt="Projet de formation 4"/>
                    <div class="card-body " id="cardBody">
                        <h5 class="card-title text-center">Projet de formation 4</h5>
                        <p class="card-text">
                            <button class="btnVoirPlus mx-auto" data-bs-toggle="modal" data-bs-target="#modalProjet4">
                                <span>Voir plus</span>
                                <svg width="15" height="15" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linejoin="round" stroke-linecap="round"></path>
                                </svg>
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <img src="../img/projetGroupe1.png" class="card-img-top" alt="Projet de groupe 1"/>
                    <div class="card-body " id="cardBody">
                        <h5 class="card-title text-center">Travail de groupe 1</h5>
                        <p class="card-text">
                            <button class="btnVoirPlus mx-auto" data-bs-toggle="modal" data-bs-target="#modalProjet5">
                                <span>Voir plus</span>
                                <svg width="15" height="15" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linejoin="round" stroke-linecap="round"></path>
                                </svg>
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal pour le Projet 1 -->
    <div class="modal fade" id="modalProjet1" tabindex="-1" aria-labelledby="modalProjet1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content backgroundModal" >
                <div class="modal-header border-0">
                    <div class="d-flex justify-content-center w-100">
                    <h5 class="modal-title mt-2">Projet de formation 1</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/projet1.png" class="d-block w-100 rounded-5" alt="Projet 1">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projet1a" class="d-block w-100 rounded-5" alt="Projet 1a">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projet1b" class="d-block w-100 rounded-5" alt="Projet 1b">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projet1c" class="d-block w-100 rounded-5" alt="Projet 1c">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projet1d" class="d-block w-100 rounded-5" alt="Projet 1d">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projet1e" class="d-block w-100 rounded-5" alt="Projet 1e">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projet1f" class="d-block w-100 rounded-5" alt="Projet 1f">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <ul class="mt-3">
                        <p class="presentationProjets me-3">L'objectif de ce travail d'intégration était de réaliser un site statique en PHP destiné à présenter une capitale européenne. Le projet incluait l'utilisation de textes et d'images fournis, ainsi qu'un exemple préexistant sur la ville de Bruxelles</p>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Réalisation d'un site statique
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Entièrement en  HTML, CSS et PHP
                        </li>

                    </ul>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal pour le Projet 2 -->
    <div class="modal fade" id="modalProjet2" tabindex="-1" aria-labelledby="modalProjet2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content backgroundModal" >
                <div class="modal-header border-0">
                    <div class="d-flex justify-content-center w-100">
                        <h5 class="modal-title mt-2">Projet de formation 2</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../img/projet2.png" class="d-block w-75  rounded-5 mx-auto"   alt="projet de formation 2">

                    <ul class="mt-3">
                        <p class="presentationProjets me-3">L'objectif de ce travail d'intégration était de créer un formulaire responsive pour un livre d'or, avec une structure PHP suivant le modèle MVC, incluant la récupération de données depuis MySQL et des vérifications JavaScript pour la validation.</p>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Création d'un formulaire responsive
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Utilisation du Modèle MVC en PHP
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Validation des entrées côté client avec JavaScript
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Conception et stylisation en HTML et CSS
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Utilisation de MySQL pour récupérer les données
                        </li>

                    </ul>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal pour le Projet 3 -->
    <div class="modal fade" id="modalProjet3" tabindex="-1" aria-labelledby="modalProjet3Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content backgroundModal" >
                <div class="modal-header border-0">
                    <div class="d-flex justify-content-center w-100">
                        <h5 class="modal-title mt-2">Projet de formation 3</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carousel2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/projet3.png" class="d-block w-100 rounded-5" alt="Projet 3">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projet3a" class="d-block w-100 rounded-5" alt="Projet 3a">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projet3b" class="d-block w-100 rounded-5" alt="Projet 3b">
                            </div>


                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <ul class="mt-3">
                        <p class="presentationProjets me-3">L'objectif de ce travail d'intégration était de créer une carte interactive en utilisant OpenStreetMap, avec une interface d’administration privée accessible à un administrateur. Ce dernier peut gérer, via un CRUD, les localisations à afficher sur la carte.</p>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Création d'une carte interactive utilisant OpenStreetMap
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Utilisation du Modèle MVC en PHP
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Réalisation de l'interface d'administration avec Bootstrap
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Mise en place d'un système CRUD
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Intégration des données dans la carte  avec JavaScript.
                        </li>


                    </ul>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal pour le Projet 4 -->
    <div class="modal fade" id="modalProjet4" tabindex="-1" aria-labelledby="modalProjet4Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content backgroundModal" >
                <div class="modal-header border-0">
                    <div class="d-flex justify-content-center w-100">
                        <h5 class="modal-title mt-2">Projet de formation 4</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carousel3" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/projet4.png" class="d-block w-100 rounded-5" alt="Projet 4">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projet4a" class="d-block w-100 rounded-5" alt="Projet 4a">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projet4b" class="d-block w-100 rounded-5" alt="Projet 4b">
                            </div>


                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <ul class="mt-3">
                        <p class="presentationProjets me-3">L'objectif de ce projet était de recréer un design existant en une maquette Figma, puis de le coder en HTML et CSS. </p>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Maquette Figma à partir d'un design existant
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Conception et stylisation en HTML et CSS
                        </li>


                    </ul>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal pour le Projet 5 -->
    <div class="modal fade" id="modalProjet5" tabindex="-1" aria-labelledby="modalProjet5Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content backgroundModal" >
                <div class="modal-header border-0">
                    <div class="d-flex justify-content-center w-100">
                        <h5 class="modal-title mt-2">Travail de groupe 1</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carousel4" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/projetGroupe1Slide.png" class="d-block w-100 rounded-5" alt="Projet de groupe 1">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projetGroupe1a" class="d-block w-100 rounded-5" alt="Projet de groupe 1a">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/projetGroupe1b" class="d-block w-100 rounded-5" alt="Projet de groupe 1b">
                            </div>


                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel4" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <ul class="mt-3">
                        <p class="presentationProjets me-3">L'objectif de ce projet de groupe, réalisé avec un coéquipier, était de présenter 20 méthodes jQuery. Nous devions partir d'un template existant et le modifier pour mettre en valeur les différentes méthodes jQuery. </p>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Modification d'un template existant
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                           Utilisation de Jquery
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Communication claire avec mon coéquipier
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-2">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Organisation et planification de nos tâches respectives
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <img src="../img/cocher.png" alt="icone cocher" class="iconeCocher me-2">
                            Soutien et entraide avec mon coéquipier
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>