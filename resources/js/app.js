import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";

AOS.init();
// stat counting

let interval = 3000;
const stats = document.querySelectorAll('.kelas');

let isViewed = false;
// console.log(title);

document.addEventListener("aos:in", ({ detail }) => {
    console.log(detail.firstElementChild.lastElementChild);
    if (!isViewed) {
        for (let stat of stats) {
            
                let startValue = 0;
                let endValue = parseInt(stat.getAttribute("data-number"));
                let duration = Math.floor(interval / endValue);
                let counter = setInterval(function() {
                    startValue += 1;
                    stat.textContent = startValue;
                    if (startValue == endValue) {
                        clearInterval(counter);
                    }
                }, duration);
        }
    }

    if (detail.classList.contains("kelas")) {
        isViewed = true;
    }
});
// console.log(stats);
