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
        <h2 class="pb-2 mt-3 text-center aboutMe">About me</h2>

        <div class="row row-cols-1 row-cols-md-2   py-5">
            <div class="col gap-2">
                <h2 class="pb-4 pt-4 moreAboutMe">Know More About Me</h2>
                <p class="textAboutMe">I am a full-stack developer with a year and a half of training at <a href="https://www.cf2m.be/formation/developpeur-web" target="_blank" id="cf2m" class="animate__animated animate__jello  animate__repeat-2">CF2M</a>. I have a particular affinity for front-end development, where I love to express my creativity. I invite you to check out the <a href="?section=projets" id="redirectProjects" class="animate__animated animate__jello animate__delay-3s animate__repeat-2 "><span id="spanProj">P</span>rojects</a> section to see some of my latest work.</p>

                <p class="textAboutMe">Throughout my training, I have acquired numerous skills that are essential in web development. I am very enthusiastic about the opportunity to evolve in this field, continue learning, tackle new challenges, and push my limits. I am eager to contribute my knowledge while growing both personally and professionally.</p>

                <p class="textAboutMe">I am open to all opportunities and available for new ventures. Please feel free to <a href="?section=contact" id="redirectContact" class="animate__animated animate__jello animate__delay-5s animate__repeat-2 animate_slow"> Contact </a> me if you have any questions or if you would like to discuss potential collaborations.</p>
            </div>

            <div class="col text-center ps-5 pt-3">
                <h2 class="moreAboutMe">Skills</h2>
                <div class="skills d-flex justify-content-center flex-wrap mt-5">
                    <div class="skillsItem ">HTML</div>
                    <div class="skillsItem ">CSS</div>
                    <div class="skillsItem ">Javascript</div>
                    <div class="skillsItem ">PHP</div>
                    <div class="skillsItem ">SQL</div>
                    <div class="skillsItem ">Bootstrap</div>
                    <div class="skillsItem ">Jquery</div>
                    <div class="skillsItem ">GIT</div>
                    <div class="skillsItem ">Github</div>
                    <div class="skillsItem ">Wordpress</div>
                    <div class="skillsItem ">Responsive Design</div>
                </div>
            </div>



        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>