// Confirm dialog box on Home load. Redirects to /contribute/index.html
sessionStorage.setItem("isVisited", 0);
function onPageLoaded() {
    let val = sessionStorage.getItem("isVisited");
    if (val == 0) {
        if (confirm("Help Us Reach Our Goal By Contributing Today!\n\nPlease Consider Donating!")) {
            window.open("/contribute/index.html", "_self");
            sessionStorage.setItem("isVisited", 1);
        }
    } else {
    }
}

// controls the navbar in the mobile viewports
function navControl() {
    var menuState = document.getElementById("hide");
    var menu_icon = document.getElementById("button1");

    // if expanded, shrink. Else, expand
    if (menuState.style.display === "block") {
        menuState.style.display = "none";
        menu_icon.innerHTML = "☰";
    } else {
        menuState.style.display = "block";
        menu_icon.innerHTML = "△";
    }
}
