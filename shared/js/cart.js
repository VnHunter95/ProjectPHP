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
function preUpdateCart(id)
{
  var q =   document.getElementById('quantity'+id).value;
  updateCart(id,q)
}
function clearCart()
{
  if(xmlHttp.readyState==0 || xmlHttp.readyState==4)
  {
    var root = document.location.hostname;
    var url = "http://"+root+":5454/index/cart.php?clear";
    xmlHttp.open("GET",url, true);
    xmlHttp.onreadystatechange = handleServerResponseCart;
    xmlHttp.send(null);
  }else{
    setTimeout("updateCart('"+id+"','"+quantity+"')",1000);
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
      var code = xmlDocumentElement.getElementsByTagName("code")[0].textContent;
      switch (code) {
          case '0':
          break;
          case '1':
            updateCartHtml(xmlDocumentElement);
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
          case '69':
              alert('Đã xóa giỏ hàng');
              location.reload();
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

function updateCartHtml(xmlDocumentElement)
{
  var innerHTML = "";
  var items = xmlDocumentElement.getElementsByTagName("item");
  var total = xmlDocumentElement.getElementsByTagName("total")[0].textContent;
  var count = xmlDocumentElement.getElementsByTagName("itemcount")[0].textContent;
  for (var itemsIndex = 0; itemsIndex < items.length; itemsIndex++)
  {
      var id = items[itemsIndex].childNodes[0].textContent;
      var name =  items[itemsIndex].childNodes[1].textContent;
      var price =  items[itemsIndex].childNodes[2].textContent;
      var quantity = items[itemsIndex].childNodes[3].textContent;
      var image =  items[itemsIndex].childNodes[4].textContent;
      var subtotal = items[itemsIndex].childNodes[5].textContent;
      innerHTML +=''
      +'<tr>'
          +'<td data-th="Product">'
              +'<div class="row">'
                  +'<div class="col-sm-4 hidden-xs"><img src="/shared/image/'+image+'?>" alt="..." class="img-responsive" style="height: 100px; width: 100px;"/></div>'
                  +'<div class="col-sm-6">'
                      +'<h4 style="max-width: 320px;word-wrap: break-word;">'+name+'</h4>'
                  +'</div>'
              +'</div>'
          +'</td>'
          +'<td data-th="Price">'+price+'</td>'
          +'<td data-th="Quantity">'
              +'<input id="quantity'+id+'" min="1" type="number" class="form-control text-center" value="'+quantity+'">'
          +'</td>'
          +'<td data-th="Subtotal" class="text-center">'+subtotal+'</td>'
          +'<td data-th="" class="actions">'
              +'<button class="btn btn-danger btn-sm" onclick="removeFromCart('+id+')"><span class="glyphicon glyphicon-trash"></span></button>'
              +'<button class="btn btn-danger btn-sm" onclick="preUpdateCart('+id+')" ><span class="glyphicon glyphicon-edit"></span></button>'
          +'</td>'
      +'</tr>';
  }
  document.getElementById("itemTable").innerHTML = innerHTML;
  document.getElementById("cartTotal").innerHTML = '<span class="glyphicon glyphicon-shopping-cart"></span> '+count+' Sản Phẩm - '+total+' VNĐ </a>';
  document.getElementById("cartTotal1").innerHTML= '<strong>Total: '+total+' VNĐ </strong>';
  document.getElementById("cartTotal2").innerHTML= 'Total: '+total+' VNĐ ';
}
