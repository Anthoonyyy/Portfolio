const navLink = document.querySelectorAll(".nav-link");
const URL_SearchParams = new URLSearchParams(window.location.search);
searchParams = URL_SearchParams.get("section");




function changeLinkNavColours() {

    switch (searchParams) {
        case 'accueil':
            navLink[0].style.color = "#F17310";
            break;
        case 'profil':
            navLink[1].style.color = "#F17310";
            break;
        case 'compétences':
            navLink[2].style.color = "#F17310";
            break;
        case 'portfolio':
            navLink[3].style.color = "#F17310";
            break;
        case 'contact':
            navLink[4].style.color = "#F17310";
            break;

    }
}
changeLinkNavColours();