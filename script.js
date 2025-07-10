let visit = 0;

function onPageLoaded() {
    // Wri(te your javascript code here
    console.log("page loaded");

    if (confirm("Help Us Reach Our Goal By Contributing Today!\n\nPlease Consider Donating!")) {
        window.open("/contribute/index.html");
        console.log("confirmed!");
    }
}
