const carousel = document.querySelector('main > .block-2 > .carousel > .inner');
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

intervalId = setInterval(() => {
    nextButton.click();
}, 5000); // Задержка в 3 секунды (3000 миллисекунд)
