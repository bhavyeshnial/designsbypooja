const menuBtn = document.querySelector(".menu-btn");
const navbar = document.querySelector("#navbar");
const menuIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", () => {

    navbar.classList.toggle("active");

    const expanded =
        menuBtn.getAttribute("aria-expanded") === "true";

    menuBtn.setAttribute("aria-expanded", !expanded);

    /* ICON CHANGE */

    if(navbar.classList.contains("active")){

        menuIcon.classList.remove("fa-bars-staggered");
        menuIcon.classList.add("fa-xmark");

    }else{

        menuIcon.classList.remove("fa-xmark");
        menuIcon.classList.add("fa-bars-staggered");

    }

});

/* OUTSIDE CLICK */

document.addEventListener("click", (e) => {

    if(
        !navbar.contains(e.target) &&
        !menuBtn.contains(e.target)
    ){

        navbar.classList.remove("active");

        menuBtn.setAttribute("aria-expanded", "false");

        menuIcon.classList.remove("fa-xmark");
        menuIcon.classList.add("fa-bars-staggered");

    }

});