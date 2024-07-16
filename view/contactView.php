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

<body id="bodyContact">
    <!-------------------------------------NAVBAR------------------------------------------------->
    <?php
    include("inc/navbar.php")
    ?>
    <!-------------------------------------FIN NAVBAR------------------------------------------------->
    <h1 class="pb-3 mt-4 text-center" id="titreContact">Contactez-moi</h1>

    <div class="container  px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <div class="card w-75 mb-5">
                    <div class="card-body text-center">
                        <img src="../img/envoyer.png" alt="icone email">
                        <p class="card-text">Vous pouvez également me joindre par mail ci-dessous</p>
                        <button id="boutonMail" class="mx-auto">
                            <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            width="24"
                                            height="24"
                                    >
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                                fill="currentColor"
                                                d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                            <span>Mail</span>
                        </button>
                    </div>
                </div>

                <div class="card w-75">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                </div>

            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form method="POST" action="" class="p-4 p-md-5  rounded-3" id="backgroundForm">
                    <div class=" mb-4">
                        <label for="firstname" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Votre nom" name="firstname">

                    </div>
                    <div class="mb-4">
                        <label for="usermail" class="form-label">Mail</label>
                        <input type="email" class="form-control" id="usermail" placeholder="Votre mail" name="usermail">

                    </div>
                    <div class="mb-4">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" placeholder="Votre message"></textarea>

                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                    <button class="" id="boutonContact" type="submit" value="submit">Envoyez</button>
                    </div>
                </form>
                <?php
                /*
                if (isset($message)): ?>
                    <div class="alert alert-info text-center" role="alert">
                        <?php echo $message; ?>
                    </div>
                <?php endif;*/ ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../js/index.js"></script>
</body>

</html>