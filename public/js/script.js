const navLink = document.querySelectorAll(".nav-link");
const URL_SearchParams = new URLSearchParams(window.location.search);
searchParams = URL_SearchParams.get("section");




function changeLinkNavColours() {

    switch (searchParams) {
        case 'home':
            navLink[0].style.color = "#F17310";
            break;
        case 'about':
            navLink[1].style.color = "#F17310";
            break;
        case 'projects':
            navLink[2].style.color = "#F17310";
            break;
        case 'contact':
            navLink[4].style.color = "#F17310";
            break;

    }
}
changeLinkNavColours();