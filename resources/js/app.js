document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector(".slides");
    const slides = slider.children;
    const totalSlides = slides.length;
    let index = 0;

    function nextSlide() {
        index = (index + 1) % totalSlides;
        slider.style.transform = `translateX(-${index * 100}%)`;
    }

    setInterval(nextSlide, 6000);
});