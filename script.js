let visit = 0;

function onPageLoaded() {
    // Wri(te your javascript code here
    console.log("page loaded");

    if (confirm("Help Us Reach Our Goal By Contributing Today!\n\nPlease Consider Donating!")) {
        window.open("/contribute/index.html");
        console.log("confirmed!");
    }
}

function myFunction() {
    console.log("start actions");
    var x = document.getElementById("hide");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
    console.log("actions completed");
}