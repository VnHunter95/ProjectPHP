var xmlHttp = createXmlHttpRequestObject();
function createXmlHttpRequestObject(){
  var xmlHttp;
  if(window.ActiveXObject){
    try{
      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }catch(e)
    {
      xmlHttp = false;
    }

  }else {
    try{
      xmlHttp = new XMLHttpRequest();
    }catch(e){
      xmlHttp = false;
    }
  }

  if(!xmlHttp)
  {
    alert("can't create xmlhttp object !");
  }else {
    return xmlHttp;
  }
}
function addToCart(id){
  if(xmlHttp.readyState==0 || xmlHttp.readyState==4)
  {
    var root = document.location.hostname;
    var url = "http://"+root+":5454/index/cart.php?add="+id;
    xmlHttp.open("GET",url, true);
    xmlHttp.onreadystatechange = handleServerResponseCart;
    xmlHttp.send(null);
  }else{
    setTimeout("addCart("+id+")",1000);
  }
}
function removeFromCart(id)
{
  if(xmlHttp.readyState==0 || xmlHttp.readyState==4)
  {
    var root = document.location.hostname;
    var url = "http://"+root+":5454/index/cart.php?remove="+id;
    xmlHttp.open("GET",url, true);
    xmlHttp.onreadystatechange = handleServerResponseCart;
    xmlHttp.send(null);
  }else{
    setTimeout("removeFromCart("+id+")",1000);
  }
}
  function updateCart(id,quantity)
  {
    if(xmlHttp.readyState==0 || xmlHttp.readyState==4)
    {
      var root = document.location.hostname;
      var url = "http://"+root+":5454/index/cart.php?update="+id+"&q="+quantity;
      xmlHttp.open("GET",url, true);
      xmlHttp.onreadystatechange = handleServerResponseCart;
      xmlHttp.send(null);
    }else{
      setTimeout("updateCart('"+id+"','"+quantity+"')",1000);
    }
  }
// @errorcode 1-> OK 0-> no GET 2-> No Product OR Image 3-> no item in cart 4-> no cart
function handleServerResponseCart()
{
  if(xmlHttp.readyState==4)
  {
    if(xmlHttp.status==200)
    {
      xmlResponse = xmlHttp.responseXML;
      xmlDocumentElement = xmlResponse.documentElement;
      var code = xmlDocumentElement.textContent;
      switch (code) {
          case '0':
          break;
          case '1':
            alert('Thêm OK');
          break;
          case '2':
            alert('Không tìm thấy sản phẩm');
          break;
          case '3':
            alert('Không có sản phẩm trong võ hàng !');
          break;
          case '4':
              alert('Võ hàng trống !');
          break;
          default:
            alert('Unknown Error');
          break;

      }

    }
    else {
      alert("Something went worng ...");
    }
  }
}
