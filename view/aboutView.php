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

<body class="aboutPage">
    <!-------------------------------------NAVBAR------------------------------------------------->
    <?php
    include("inc/navbar.php")
    ?>
    <!-------------------------------------FIN NAVBAR------------------------------------------------->



    <div class="container px-4 py-5">
        <h2 class="pb-2 mt-5 text-center aboutMe">About me</h2>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center  py-5">
            <div class="col gap-2">
                <h2 id="moreAboutMe" class="pb-4">Know More About Me</h2>
                <p class="text-white">I am a full-stack developer with a year and a half of training at <a href="https://www.cf2m.be/formation/developpeur-web" target="_blank">CF2M</a>. I have a particular affinity for front-end development, where I love to express my creativity. I invite you to check out the Projects section to see some of my latest work.</p>

            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>