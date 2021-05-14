
class loginForm{
  constructor(){
    this.form;
    this.newform;
    window.onload = this.getid()
  }
  
  getid(){
    try{
      this.form = document.getElementById("FormContainer");
      this.newform = document.getElementById("NewContainer");
    }
    catch{
      consosle.log()
    }
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
    this.form.style.display="none";
    this.newform.style.display="none";
  }
}
