class loginform{
    
    form = document.getElementById("FormContainer");
    newform = document.getElementById("NewContainer"); 
    
    NewUser(){
        newform.style.display="block";
        form.style.display="none";
    }
    formOpen(){
        form.style.display="block";
        newform.style.display="none";
    }
    formClose(){
        form.style.display="none";
        newform.style.display="none";
    }
}