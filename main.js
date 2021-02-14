import hamburgerMenu from "./js/hamburger.js"

const d = document;

d.addEventListener("DOMContentLoaded", e => {
    hamburgerMenu(".panel-btn", ".panel", ".menu a")
})