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
function preSearchProduct()
{
  //code to get search type - for demo purpose - searchtype set to 0 which is search all if not fuond search by Tag
  var searchType = 0;
  var input = document.getElementById("search-input").value;
  //default product per page is 9,
  //but can change if website add change product per page function to let user edit the product per page
  //set product per page for 9 for now for demo purpose
  var productPerPage = 9 ;
  //always start on page 1, so page = 1
  var page=1
  //running AJAX searchProduct funtion
  searchProduct(searchType,input,page,productPerPage);
  return false;
}
function searchProduct(searchType, input,page,produtPerPage)
{
  if(xmlHttp.readyState==0 || xmlHttp.readyState==4)
  {
    var root = document.location.hostname;
    var url = "http://localhost:5454/layout/user/danh-sach-san-pham/gererateResultProductXML.php?searchType="+searchType+"&input="+input+"&page="+page+"&produtPerPage="+produtPerPage;
    xmlHttp.open("GET",url, true);
    xmlHttp.onreadystatechange = handleServerResponse;
    xmlHttp.send(null);
  }else{
    setTimeout("searchProduct()",1000);
  }
}

function handleServerResponse()
{
  if(xmlHttp.readyState==4)
  {
    if(xmlHttp.status==200)
    {
      xmlResponse = xmlHttp.responseXML;
      xmlDocumentElement = xmlResponse.documentElement;
      if(xmlDocumentElement.getElementsByTagName("Error").length==0)
      {
        displayResultProduct(xmlDocumentElement);
        displayResultProductPager(xmlDocumentElement);
      }
      {
        alert(xmlDocumentElement.getElementsByTagName("Error")[0].textContent);
      }
    }
    else {
      alert("Something went worng ...");
    }
  }
}

function displayResultProduct(xmlDocumentElement)
{
  var innerHTML = "";
  var items = xmlDocumentElement.getElementsByTagName("item");
  var loop = 1;
  for (var itemsIndex = 0; itemsIndex < items.length; itemsIndex++)
  {
      var id = items[itemsIndex].childNodes[0].textContent;
      var name =  items[itemsIndex].childNodes[1].textContent;
      var price =  items[itemsIndex].childNodes[2].textContent;
      var image =  items[itemsIndex].childNodes[3].textContent;
      if(loop == 1)
      {
         innerHTML += "\n<div class='bottom-product'>";
      }
      innerHTML+= "\n<div class='col-md-4 bottom-cd simpleCart_shelfItem'>"
                      +"\n<div class='product-at'>"
                        +"\n<a href='single.html'><img class='img-responsive' src='/shared/image/"+image+"' alt='Product Image' style='withd:300px; height:300px;  margin: 0 auto;>' >"
                          +"\n<div class='pro-grid'>"
                                +"\n<span class='buy-in'>Mua Ngay</span>"
                          +"\n</div>"
                        +"\n</a>"
                      +"\n</div>"
                      +"\n<p class='tun'>"+name+"</p>" // Rut gon description
                      +"\n<a href='#' class='item_add'><p class='number item_price'><i> </i>"+price+" Vnđ</p></a>"
                    +"\n</div>";
      if(loop == 3)
      {
        innerHTML+= "\n<div class='clearfix'></div>\n</div>";
        loop=1;
      }else {
        loop++;
      }
  }
  if(loop!=1)
  {
    innerHTML+= "\n</div>";
  }
  document.getElementById("product-list").innerHTML = innerHTML;
}
function displayResultProductPager(xmlDocumentElement)
{
  var innerHTML = "";
  var searchType = xmlDocumentElement.getElementsByTagName("searchType")[0].textContent;
  var pageCount = xmlDocumentElement.getElementsByTagName("pageCount")[0].textContent;
  var currentPage = xmlDocumentElement.getElementsByTagName("page")[0].textContent;
  var input = xmlDocumentElement.getElementsByTagName("input")[0].textContent;
  var produtPerPage = xmlDocumentElement.getElementsByTagName("productPerPage")[0].textContent;
  innerHTML += '\n<nav class="in">'+
                  '\n <ul class="pagination">';
  if(currentPage==1)
  {
    innerHTML += '\n<li class="disabled"><a aria-labesl="Previous"><span aria-hidden="true">«</span></a></li>';
  }else
  {
    innerHTML += '\n<li><a style='cursor: pointer;' onClick="searchProduct('+searchType+',\''+input+'\','+(currentPage - 1) +','+produtPerPage+')" aria-label="Previous"><span aria-hidden="true">«</span></a></li>';
  }
  for(var i = 1 ; i <= pageCount; i++)
  {
    if(i==currentPage)
    {
      var text = 'class="active"';
    }
    innerHTML+= '\n<li><a '+text+' style="cursor: pointer;" onClick = "searchProduct('+searchType+',\''+input+'\','+ i +','+produtPerPage+')">'+ i +'<span class="sr-only"></span></a></li>';
  }
  if(currentPage==pageCount)
  {
    innerHTML += '\n<li class="disabled"> <a aria-label="Next"><span aria-hidden="true">»</span> </a> </li>';
  }else
  {
    var nextPage = parseInt(currentPage)+1;
    innerHTML += '\n<li><a onClick="searchProduct('+searchType+',\''+input+'\','+nextPage+','+produtPerPage+')"aria-label="Next"><span aria-hidden="true">»</span></a></li>';
  }
  innerHTML += '</ul>\n</nav>';
  document.getElementById("product-pager").innerHTML = innerHTML;
}
