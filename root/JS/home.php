<script language="text/javascript">
    // script.js
document.addEventListener("DOMContentLoaded", function() {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    function nextSlide() {
        if (currentSlide < totalSlides - 1) {
            currentSlide++;
        } else {
            currentSlide = 0;
        }
        updateSlider();
    }

    function updateSlider() {
        const newTransformValue = -currentSlide * 100 + '%';
        document.querySelector('.slides').style.transform = `translateX(${newTransformValue})`;
    }

    setInterval(nextSlide, 2000); // Chuyển slide mỗi 3 giây
});

</script>