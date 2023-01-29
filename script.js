const language = document.querySelectorAll(".language");
let old_lan = language[0];
old_lan.classList.add("active");

function change_lan(el) {
    if(el === old_lan) {
        console.log("err");
    } else {
        old_lan = el;
        language.forEach((item) => {
            item.classList.toggle("active");
        });
    }
}