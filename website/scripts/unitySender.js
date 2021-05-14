class sender{
  constructor(unity){
    this.GameInstance = unity
    this.LoadName()
  }

  LoadName(nameToSend){
  //used on load, delayed {5000} for game objects to load, ingame username to php user
    setTimeout(() => {

      this.sendMessage("DoThing" ,"UserName", nameToSend);},5000);//give more meaningful names in unity
  }


  sendMessage(method = "default", object, args){
    //use a unity game method, else error a message
    try{
      unityInstance.SendMessage(object, method, args);
    }
    catch{
      console.error("problem using unity method" + object + "."+ method)
    }
  }
}