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

Đang phát triển thêm…
