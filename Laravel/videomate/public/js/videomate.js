function carregarPagina() {
    var cookieLuz = getCookie("luz")
  
    if (cookieLuz != "") {
      // document.getElementById("checkbox").value = cookieLuz
      // alternarFundo()
    }
  }
  
  function alternarFundo() {
    var luz = document.getElementById("checkbox").value
  
    console.log(luz)
  
    var x = document.querySelectorAll(".video p,.list-group-item")
    var i
  
    if (luz == "on") {
      document.body.style.background = "#FFFFFF"
  
      for (i = 0; i < x.length; i++) {
        x[i].style.color = "black"
      }
  
      luz = "off"
      console.log("aceso")
    } else {
      document.body.style.background = "#313131"
  
      for (i = 0; i < x.length; i++) {
        x[i].style.color = "white"
      }
  
      luz = "on"
      console.log("apagado")
    }
    document.getElementById("checkbox").value = luz
    setCookie("luz", luz, 10)
  }
  
  function getCookie(cname) {
    var name = cname + "="
    var decodedCookie = decodeURIComponent(document.cookie)
    var ca = decodedCookie.split(";")
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i]
      while (c.charAt(0) == " ") {
        c = c.substring(1)
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length)
      }
    }
    return ""
  }
  
  function setCookie(cname, cvalue, exdays) {
    var d = new Date()
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000)
    var expires = "expires=" + d.toUTCString()
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/"
  }
  