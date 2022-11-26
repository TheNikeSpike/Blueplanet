var linksList = document.getElementById("links-list");
var topButton = document.getElementById("btnScrollToTop")


function showMenu(){
    linksList.style.right = "0";
    topButton.style.visibility = "visible";
}

function hideMenu() {
    linksList.style.right = "-200px";
    topButton.style.visibility = "hidden";
}

function showSettings(){
    linksList.style.right = "0";
}
function hideSettings(){
    linksList.style.right = "-200px";
}