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
function login()
{
  var user = document.getElementById("usernameLogin").value;
  var password = document.getElementById("passwordLogin").value;
  if(xmlHttp.readyState==0 || xmlHttp.readyState==4)
  {
    var root = document.location.hostname;
    var url = "http://"+root+":5454/index/doLogin.php?username="+user+"&password="+password;
    xmlHttp.open("GET",url, true);
    xmlHttp.onreadystatechange = handleServerResponseDoLogin;
    xmlHttp.send(null);
  }else{
    setTimeout("login()",1000);
  }
}

function handleServerResponseDoLogin()
{
  if(xmlHttp.readyState==4)
  {
    if(xmlHttp.status==200)
    {
      xmlResponse = xmlHttp.responseXML;
      xmlDocumentElement = xmlResponse.documentElement;
      var code = xmlDocumentElement.textContent;
      switch (code) {
        case '1':
          alert('Đăng nhập thành công');
          $('#loginModal').modal('hide');
          location.reload();
          break;
        case '2':
          alert('Sai mật khẩu');
          break;
        case '0':
          alert('Loging out !');
          location.reload();
          break;
        default:
          alert('Unkown Error');
          break;
      }
    }
    else {
      alert("Something went worng ...");
    }
  }
}

function logout()
{
  if(xmlHttp.readyState==0 || xmlHttp.readyState==4)
  {
    var root = document.location.hostname;
    var url = "http://"+root+":5454/index/doLogout.php";
    xmlHttp.open("GET",url, true);
    xmlHttp.onreadystatechange = handleServerResponseDoLogin;
    xmlHttp.send(null);
  }else{
    setTimeout("logout()",1000);
  }
}
