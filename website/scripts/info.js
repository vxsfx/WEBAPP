class infoJsonReader{
  constructor(){

  }

  infoPage(location){
    var news = document.getElementById("news")
    
    var updates = document.getElementById("updates")

    var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        
        for(var i in myObj.news){
          var header = document.createElement("h4")
          header.appendChild(document.createTextNode(myObj.news[i].header))
          newsLinks[i].appendChild(header)

          var content = document.createElement("p")
          content.appendChild(document.createTextNode(myObj.news[i].content))
          newsLinks[i].appendChild(content)
        }


      }
    }
    xmlhttp.open("GET", "../../scripts/info.json", true);
    xmlhttp.send();
  }

  infoSliders(location){

    var newsLinks = document.getElementsByClassName("NewsText")
    var updateLinks = document.getElementsByClassName("UpdateText")
    
    var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        
        for(var i=0;i < newsLinks.length ;i++){ 

          var header = document.createElement("h4")
          header.appendChild(document.createTextNode(myObj.news[i].header))
          console.log(i)
          console.log(newsLinks[i])
          newsLinks[i].appendChild(header)

          var content = document.createElement("p")
          content.appendChild(document.createTextNode(myObj.news[i].content))
          newsLinks[i].appendChild(content)
        }

        for(var i=0; i < updateLinks.length; i++){ 
          console.log(i)
          console.log(updateLinks[i])
          var header = document.createElement("h4")
          header.appendChild(document.createTextNode(myObj.updates[i].header))
          updateLinks[i].appendChild(header)

          var content = document.createElement("p")
          content.appendChild(document.createTextNode(myObj.updates[i].content))
          updateLinks[i].appendChild(content)
        }
      }
    }
    xmlhttp.open("GET", "../../scripts/info.json", true);
    xmlhttp.send();

  }
}