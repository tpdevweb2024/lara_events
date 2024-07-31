import "./bootstrap";

const hamburger = document.querySelector(".hamburger");
const menu = document.querySelector(".menu");

hamburger.addEventListener("click", () => {
    menu.classList.toggle("active");
    menu.classList.contains("active")
        ? (document.body.style.overflow = "hidden")
        : (document.body.style.overflow = "visible");
});
