document.addEventListener("DOMContentLoaded", function () {
    var backgroundImages = Array.from({ length: 5 }, (_, index) => `${index + 1}.png`);
    var randomImage = backgroundImages[Math.floor(Math.random() * backgroundImages.length)];
    document.body.style.backgroundImage = `url('css/img/${randomImage}')`;
});