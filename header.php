<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="shared/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="shared/css/mystyle.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="shared/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script src="shared/js/jquery.min.js"></script>    
	<script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <script src="shared/js/memenu.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        $(document).ready(function () { $(".memenu").memenu(); });
    </script>
    <script src="shared/js/simpleCart.min.js"></script>
</head>

<body class="parallax">
    <!--navbar-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="logo">
                    <!--<a href="index.html"><img src="image/logo.png" alt=""></a>-->
                </div>
            </div>
            <ul class="nav navbar-nav">

            </ul>
            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option value="AL">A</option>
                        <option value="WY">B</option>
                    </select>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="lock" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                    <div id="loginModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Đăng nhập</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="tenDN">Tên đăng nhập</label>
                                        <input type="text" class="form-control" name="tenDN">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input type="text" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <label style="float:left">Chưa có tài khoản? <a href="#">Đăng ký</a></label>
                                    <button type="button" class="btn btn-info">Đăng nhập</button>
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#cartModal"><span class="glyphicon glyphicon-shopping-cart"></span> 2 Sản Phẩm - 360.000 VNĐ</a>
                    <div id="cartModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Giỏ hàng</h4>
                                </div>
                                <div class="modal-body">
                                    <table id="cart" class="table table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th style="width:40%">Product</th>
                                                <th style="width:20%">Price</th>
                                                <th style="width:8%">Quantity</th>
                                                <th style="width:22%" class="text-center">Subtotal</th>
                                                <th style="width:10%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--Product 1-->
                                            <tr>
                                                <td data-th="Product">
                                                    <div class="row">
                                                        <div class="col-sm-4 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"
                                                            /></div>
                                                        <div class="col-sm-6">
                                                            <h4 style="max-width: 320px;word-wrap: break-word;">Product 1</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-th="Price">180.000 VNĐ</td>
                                                <td data-th="Quantity">
                                                    <input type="number" class="form-control text-center" value="1">
                                                </td>
                                                <td data-th="Subtotal" class="text-center">180.000 VNĐ</td>
                                                <td data-th="" class="actions">
                                                    <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                                                </td>
                                            </tr>
                                            <!--Product 2-->
                                            <tr>
                                                <td data-th="Product">
                                                    <div class="row">
                                                        <div class="col-sm-4 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"
                                                            /></div>
                                                        <div class="col-sm-6">
                                                            <h4 style="max-width: 320px;word-wrap: break-word;">Product 2</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-th="Price">180.000 VNĐ</td>
                                                <td data-th="Quantity">
                                                    <input type="number" class="form-control text-center" value="1">
                                                </td>
                                                <td data-th="Subtotal" class="text-center">180.000 VNĐ</td>
                                                <td data-th="" class="actions">
                                                    <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="visible-xs">
                                                <td class="text-center"><strong>Total: 360.000 VNĐ</strong></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2" class="hidden-xs"></td>
                                                <td class="hidden-xs text-center"><strong>Total: 360.000 VNĐ</strong></td>
                                                <td></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info">Thanh Toán</button>
                                    <button type="button" class="btn btn-default" style="float:left;">Xóa giỏ hàng</button>
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!--header-->
    <div class="container">

        <div class="head-top">
            <div class=" h_menu4">
                <ul class="memenu skyblue">
                    <li><a class="color1" href="#">Men</a>
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Bags</a></li>
                                            <li><a href="products.html">Caps & Hats</a></li>
                                            <li><a href="products.html">a</a></li>
                                            <li><a href="products.html">Jc</a></li>
                                            <li><a href="products.html">Jeans</a></li>
                                            <li><a href="products.html">Jewellery</a></li>
                                            <li><a href="products.html">b</a></li>
                                            <li><a href="products.html">Leather Jackets</a></li>
                                            <li><a href="products.html">d</a></li>
                                            <li><a href="products.html">Loungewear</a></li>
                                        </ul>
                                    </div>
                                </div>
                    </li>
                    <li class="grid"><a class="color2" href="#">	Women</a>
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Bags</a></li>
                                            <li><a href="products.html">Caps & Hats</a></li>
                                            <li><a href="products.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="products.html">Jackets & Coats</a></li>
                                            <li><a href="products.html">Jeans</a></li>
                                            <li><a href="products.html">Jewellery</a></li>
                                            <li><a href="products.html">Jumpers & Cardigans</a></li>
                                            <li><a href="products.html">Leather Jackets</a></li>
                                            <li><a href="products.html">Long Sleeve T-Shirts</a></li>
                                            <li><a href="products.html">Loungewear</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                </div>

                <div class="clearfix"> </div>
                </div>
            