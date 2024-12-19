import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";

AOS.init();
// stat counting

let interval = 3500;
const stats = document.getElementsByClassName('stats-card-text');
console.log(stats)
let isViewed = false;
// console.log(title);

document.addEventListener("aos:in", ({ detail }) => {
    if (!isViewed) {
        for (let stat of stats) {
            console.log(stat.dataset)
            
                let startValue = 0;
                let endValue = parseInt(stat.getAttribute("data-number"));
                let duration = (interval / endValue);
                console.log(duration)
                let counter = setInterval(function() {
                    startValue += 1;
                    stat.textContent = startValue;
                    if (startValue == endValue) {
                        clearInterval(counter);
                    }
                }, duration);
        }
    }else {
        console.log("udah bg")
    }
    isViewed = true;
});
// console.log(stats);
