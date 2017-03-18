# Project PHP

## Hướng dẫn sử dụng git

Clone project nhánh master về bằng lệnh

```git clone <Đường_dẫn>```

Nếu clone 1 nhánh khác về thì dùng lệnh

```git clone <Đường_dẫn> -b <Tên_nhánh>```

Sau khi clone về . Tạo nhánh mới bằng lệnh

```git checkout -b <Tên_nhánh>```

Cách đặt tên nhánh:<Tên_người_làm>-<Tên_task>
VD:Toan-trangchu , Toan-chinhsuagiaodien

**Cách push lên**

```git add .```

Sau đó

```git commit -m “Nội_dung_làm”```

Sau đó

```git push origin <Tên_nhánh_đang_làm>```

**Tuyệt đối không push lên master**

Sau khi push xong thì lên github tạo pull request

Nếu push lên rồi mà có thiếu sót cần chỉnh sửa thêm thì phải tạo 1 nhánh khác , chỉnh sửa rồi push lên nhánh đó rồi lại tạo pull request

## Hướng dẫn project

Các task chức năng nằm trong đây :

https://docs.google.com/spreadsheets/d/1XnPNzcEc-Vf9zgvdxL6Vz9W-zROr261tizqXcVSeWwM/edit#gid=0

Project sau khi clone về thì đưa vào thư mục htdoc của xampp . Mặc định C:\xampp\htdocs .

Tạo folder riêng đặt tên theo tên giao diện trong User/Method hoặc Admin/Method . Trong đó chứa các hàm,phương thức dùng riêng cho giao diện đó .

**Không viết code vào folder khác không phải của mình **

Index.php là trang chủ

Trong doc chứa các tài liệu liên quan tới project

Trong shared chứa các file js,css,image… xài chung cho cả project

admin đang xây dựng

## Note
Tên file giao diện .php : Viết thường,phải có gạch nối giữa các từ . Phải viết tiếng việt(Trừ trang chủ tên mặc định là index)

```danh-sach-san-pham , chi-tiet-san-pham ```

Tên lớp,tên file không phải giao diện: Viết tiếng anh.chữ cái đầu tiên của các từ phải viết hoa . Hạn chế viết tên lớp có nhiều từ(Cần thì mới viết)

```Customer , Product , ProductDetail , Supplier```

Tên biến,phương thức : Viết tiếng anh,chữ cái đầu tiên của từ đầu tiên viết thường . Chữ cái đầu tiên của từ thứ 2 trở đi viết hoa . Tên biến phải là danh từ , tên hàm phải là động từ .

```$productId , $productName ,$count , $createCustomer , $deleteCustomer , $update```

Các biến kiểu Boolean phải bắt đầu bằng chữ ‘is’

```$isDead , isDefault ```

Các biến kiểu mảng phải là từ số nhiều ( có s hoặc es cuối từ)

```$products , customers , suppliers ```

Các hàm lấy giá trị phải có chữ bắt đầu bằng từ get , gắn giá trị bắt đầu bằng từ set

```$getUserName , $getAge , $setPrice , $setGender```

SQL Query : Các câu lệnh sql ngoài tên bảng,trường ra thì luôn phải viết hoa toàn từ .

```SELECT * FROM ‘product’ WHERE ‘product_id’ = 1```

##
Đang phát triển thêm…

## Hướng dẫn tạo file giao diện các trang CRUD Admin ( Không bắt buộc )

Tạo file tên đúng như những quy định trên

Chọn một trong ba dạng table muốn dùng

Advanced - Basic - Styled

Xóa hai <div class="row"> của hai table còn lại

Xem mẫu ba dạng table trong file /doc/design/admin/tables.html

##Documentation Class DB

function query_execute_return_affected_rows($sql)
@pagrams $sql - Câu lệnh truy vấy
@return Affected Rows
``Thực thi câu lệnh sql trả về số dòng ảnh hưởng. Khuyên dùng khi Delete,Update``

function query_execute_return_id($sql)
@pagrams $sql - Câu lệnh truy vấy
@return false || Mã Id tự tăng
``Thực thi câu lệnh sql trả về id tự tăng. Khuyên dùng khi Insert các bảng cha đế lấy id insert tiếp các bản con``

##  
Đang phát triển thêm…
