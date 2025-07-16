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
