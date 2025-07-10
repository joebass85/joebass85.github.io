let visit = 0;

function onPageLoaded() {
    // Wri(te your javascript code here
    console.log("page loaded");

    if (confirm("Help Us Reach Our Goal By Contributing Today!","YES!","no :(")) {
        window.open("/contribute/");
        console.log("confirmed!");
    }
}
