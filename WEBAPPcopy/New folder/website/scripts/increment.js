
class idlog{
  constructor(){
    this.logdata;
    this.text = this.fetcher()
    this.read()
  }

  async fetcher(){
    const response = await fetch("../log/updatelog.md")
    const text = await response.text()
    return text
  }

  async read(){
    //console.log(await this.text)
    console.log(typeof await this.text)
    var lines =(await this.text).split("\n")
    await this.display(lines)
  }

  async display(lines){

    var id =0;
    var line;
    for (line of lines){
      if (line.startsWith(" #")){
        id++
        var element = document.createElement("h")
        //element.class="newsheader"
        var node = document.createTextNode(line.split("#")[1])
        element.appendChild(node)

        var parent = document.getElementById(id.toString())
        parent.appendChild(element)
      }
      if (id > 0){
        var prevelement;
        var compline = line.slice(0,6)
        
        console.log(compline)
        switch(true){
          case /.1..../.test(compline):
            console.log("howdy")
            //create new list element
            break;
          case /.....1/.test(compline):
            console.log("well howdy")
            //element parent prev list
            break;
       }
      }
    }
  }
}