class banner_select{
  banner(){

    var banners = {"../images/port.png":0.1, "../images/mountain.png":0.5, "../images/Trees.PNG":0.4}

    while (true){
      for(var obj in banners){
        var weight = banners[obj]

        var rndnum = Math.random()
        if(rndnum < weight){
          //return weight
          //console.log(obj)
          return obj;
        }
      }
    }
  }
  load(){
    console.log(`url: "${ this.banner() }"`)
    document.getElementById("left").style.backgroundImage  = `url( "${ this.banner() }")`;
    document.getElementById("right").style.backgroundImage = `url( "${ this.banner() }")`;
    console.log("banner changing")
    
  }

  constructor(){
    document.onload = this.load()
  }
}