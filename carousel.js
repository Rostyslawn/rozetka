let carousel = document.querySelector(".slider-wrapper");
let left = 0;

function ch_to_l() {
    left += 1200;
    carousel.style.left = left + "px";
}

function ch_to_r() {
    left -= 1200;
    carousel.style.left = left + "px";
}