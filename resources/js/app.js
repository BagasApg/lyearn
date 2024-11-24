import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";

AOS.init();
// stat counting

let interval = 3000;
const stats = document.getElementById("stats-cards").children;

let isViewed = false;
// console.log(title);

document.addEventListener("aos:in", ({ detail }) => {
    console.log(detail.classList.contains("stats-card"));
    if (!isViewed) {
        for (let stat of stats) {
            let iterator = 0;
            let max = stat.dataset.number;
            let duration = interval / max;
            // console.log(stat);
            let counter = setInterval(() => {
                iterator += 1;
                stat.firstElementChild.lastElementChild.textContent = iterator;
                if (iterator == max) {
                    clearInterval(counter);
                }
            }, duration);
        }
    }

    if (detail.classList.contains("stats-card")) {
        isViewed = true;
    }
});
// console.log(stats);
