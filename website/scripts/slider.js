class slider{
  constructor(slideshow){
    this.slide = 1;
    this.classname = slideshow
    window.onload = this.docGetter(); 
  }

  docGetter(){
    try{
      this.slides = document.getElementsByClassName(this.classname)
      this.showSlide(1)
    }
    catch{
      console.error("either document failed to load or element" + this.classname + " does not exist")
    }
  }
  

  changeSlide(n2){//give n2 meaningful name
    this.showSlide(this.slide += n2);
  }

  showSlide(n2){
    try{
      //change if >, < to i % slide.length

      if (n2 > this.slides.length) {this.slide = 1}
      if (n2 < 1) {this.slide = this.slides.length}

      var i;
      
      for (i = 0; i < this.slides.length; i++) {this.slides[i].style.display="none";}
        this.slides[this.slide - 1].style.display="block";
      }
    catch (err){
      if(err instanceof RangeError){
        console.warn("may have problem with slides or indexing")
      }
      else{
        console.error("error with slideshow displaying slides")
      }
    }
  }
}