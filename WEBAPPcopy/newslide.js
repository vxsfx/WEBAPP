var slides = 1;
showSlide(slides);

function NewSlide(n){
    showSlide(slides += n);
}function showSlide(n){
    var i;
    var slide = document.getElementsByClassName("NewSlide");
    if (n > slide.length) {slides = 1}
    if (n < 1) {slides = slide.length}
    for (i = 0; i < slide.length; i++) {slide[i].style.display="none";}
    slide[slides - 1].style.display="block";
}