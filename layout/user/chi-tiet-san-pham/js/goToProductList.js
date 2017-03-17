function goToProductList(type,id)
{
  var url = 'http://'+location.hostname+':5454/layout/user/danh-sach-san-pham.php'
  switch(type)
  {
    case 1:
      url = url + "?groupid="+id+"&page=1";
    break;
    case 2:
      url = url + "?supplierid="+id+"&page=1";
    break;
    case 3:
      url = url + "?tagid="+id+"&page=1";
    break;
    default:
    break;
  }
  location.href=url;
}
