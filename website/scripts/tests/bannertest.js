class test{
  banner(){

    banners = ["../images/port.png", "../images/mountain.png", "../images/Trees.PNG"]
    weigths = [3, 1, 2]
  
    length = banners.length
   
    iter = 0
  
    while (iter < 5){
      i = iter % length //removes need for inner for(i in range(length))
  
      rndnum = Math.floor( Math.random() * ( length + 1 )  * weigths[i] )
  
      console.log("is", rndnum )
  
      if ( rndnum < 3 ) {  
        console.log("yes")
        return banners[i]
      }
      iter++ 
    }
  }
  
  testing(){
    var numbers = []
    
    for(var i=0; i<10; i++ ){
      var n = banner()
      numbers.push(n)
    }
    console.log("numbers", numbers);
  }
}


a = new test()
a.testing()