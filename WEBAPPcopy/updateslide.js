var slides2 = 1;
showSlide2(slides2);
function UpSlide(n2){
    showSlide2(slides2 += n2);
}function showSlide2(n2){
    var i;
    var slide2 = document.getElementsByClassName("UpSlide");
    if (n2 > slide2.length) {slides2 = 1}
    if (n2 < 1) {slides2 = slide2.length}
    for (i = 0; i < slide2.length; i++) {slide2[i].style.display="none";}
    slide2[slides2 - 1].style.display="block";
    }