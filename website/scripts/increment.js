
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
        var ulEl=null;
        var element = document.createElement("h")
        //element.class="newsheader"
        var node = document.createTextNode(line.split("#")[1])
        element.appendChild(node)

        var parent = document.getElementById(id.toString())
        parent.appendChild(element)
      }
      if (id > 0){
        var compline = line.slice(0,6)
        var content = line.slice(6,-1)
        var ulEl;
        var inulEl;
        switch(true){
          //CREATE case for image
          case /.\*..../.test(compline):
            //create new list element
            inulEl = null;
            if (ulEl==null){
              ulEl = document.createElement("ul")
              parent.appendChild(ulEl)
            }
            var listEl = document.createElement("li")
            listEl.append(line)
            ulEl.appendChild(listEl)
            console.log(ulEl)
            break;
          case /....\*/.test(compline):
            if (inulEl==null){
              inulEl = document.createElement("ul")
              ulEl.appendChild(inulEl)
            }
            //console.log(listEl)
            var inlistEl = document.createElement("li")
            inlistEl.append(line)
            inulEl.appendChild(inlistEl)
            break;
        }
      }
    }
  }
}