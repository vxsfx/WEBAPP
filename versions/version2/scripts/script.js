class slider{
    constructor(slideshow){
        this.slides = 1;
        this.classname = slideshow
        window.onload = this.showSlide(this.slides);
    }
    changeSlide(n2){
        this.showSlide(this.slides += n2);
    }
    showSlide(n2){
        var i;
        var slide = document.getElementsByClassName(this.classname) //can move outa function//eg constructor

        if (n2 > slide.length) {this.slides = 1}
        if (n2 < 1) {this.slides = slide.length}
        for (i = 0; i < slide.length; i++) {slide[i].style.display="none";}
        slide[this.slides - 1].style.display="block";
    }
}


class loginForm{
    constructor(){
        this.form;
        this.newform;
        window.onload = this.getid()
    }
    getid(){
        this.form = document.getElementById("FormContainer");
        this.newform = document.getElementById("NewContainer");
    };

    NewUser(){
        this.form.style.display="none";
        this.newform.style.display="block";
    };

    Open(){
        this.form.style.display="block";
        this.newform.style.display="none";
    };
    
    Close(){
        console.log(this.form)
        this.form.style.display="none";
        this.newform.style.display="none";
    }
}

