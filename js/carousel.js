const carousel = document.querySelector('main > .block-2 > .carousel > .inner');
const navigator = document.querySelector('main > .block-2 > .carousel > .navigator');
const prevButton = document.querySelector('main > .block-2 > .carousel > .navigator > .prev');
const nextButton = document.querySelector('main > .block-2 > .carousel > .navigator > .next');
const carouselItems = document.querySelectorAll('main > .block-2 > .carousel > .inner > .item');
const points = document.querySelector('main > .block-2 > .carousel > .navigator > .points');
points.innerHTML = "<span></span>".repeat(carouselItems.length)

let currentIndex = 0;

nextButton.addEventListener('click', () => {
    const visibleItems = Math.floor(carousel.offsetWidth / carouselItems[0].offsetWidth);

    currentIndex++;
    if (currentIndex > carouselItems.length - visibleItems) {
        currentIndex = 0;
    }
    carousel.style.transform = `translateX(-${(currentIndex * 100) / visibleItems}%)`;
    checkPoint()
});

prevButton.addEventListener('click', () => {
    const visibleItems = Math.floor(carousel.offsetWidth / carouselItems[0].offsetWidth);

    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = carouselItems.length - visibleItems;
    }
    carousel.style.transform = `translateX(-${(currentIndex * 100) / visibleItems}%)`;
    checkPoint()
});

function checkPoint () {
    const pointItems = points.querySelectorAll("span");
    pointItems.forEach( (elem, index) => {
        if (index === currentIndex) {
            elem.classList.add("active")
        } else {
            elem.classList.remove("active")
        }
    })
}

let intervalId = setInterval(() => {
    nextButton.click();
}, 5000);


function adaptScreenSize() {
    const screenWidth = window.innerWidth;
    const countItems = carouselItems.length;
    navigator.style.display = "";

    if (screenWidth <= 1200) {
        points.innerHTML = "<span></span>".repeat(countItems)
    } else if (screenWidth <= 1600) {
        if (2 >= countItems) {
            points.innerHTML = "<span></span>".repeat(countItems);
            navigator.style.display = "none";
        } else {
            points.innerHTML = "<span></span>".repeat(countItems - 1)
        }
    } else {
        if (3 >= countItems) {
            points.innerHTML = "<span></span>".repeat(countItems);
            navigator.style.display = "none";
        } else {
            points.innerHTML = "<span></span>".repeat(countItems - 2)
        }
    }
    checkPoint ()
}

window.addEventListener('resize', adaptScreenSize);
window.addEventListener('load', adaptScreenSize);