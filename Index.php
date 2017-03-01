<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>

<body>
    <div class="panel-body">
        <form class="form-horizontal" action="#" method="POST">
        <div class="form-group">

        </div>
        <div class="form-group">
            <label for="name">Diem mon toan</label>
            <input type="text" class="form-control" name="toan" value="<?php echo isset($_POST["toan"]) ? $_POST["toan"] : ""; ?>" />
        </div>
        <div class="form-group">
            <label for="name">Diem mon ly</label>
            <input type="text" class="form-control" name="ly" value="<?php echo isset($_POST["ly"]) ? $_POST["ly"] : ""; ?>" />
        </div>
        <div class="form-group">
            <label for="name">Diem mon hoa</label>
            <input type="text" class="form-control" name="hoa" value="<?php echo isset($_POST["hoa"]) ? $_POST["hoa"] : ""; ?>" />
        </div>
        <div class="form-group">
            <select name="khuvuc">
                <option value="" selected>--Chon Khu Vuc</option>
                <option value="1">Khu vuc 1</option>
                <option value="2">Khu vuc 2</option>
                <option value="3">Khu vuc 3</option>
                <option value="4">Khu vuc 4</option>
            </select>
        </div>
        <div class="form-group"> Tong Diem :
            <?php
                echo isset($_POST['btnsubmit']) ? $_POST["toan"] + $_POST["ly"] + $_POST["hoa"] : "";
            ?>
        </div>
        <div class="form-group"> Xep Loai :
            <?php
                if(isset($_POST["btnsubmit"])){
                    $tongDiem = $_POST["toan"] + $_POST["ly"] + $_POST["hoa"];
                    if($tongDiem >= 24)
                        echo "Gioi";
                    else if($tongDiem >=21)
                        echo "Kha";
                    else if ($tongDiem >=15)
                        echo "Trung Binh";
                    else
                        echo "Yeu";
                }
            ?>
        </div>
        <div class="form-group"> Diem uu tien :
            <?php
                if(isset($_POST["btnsubmit"])){
                    $diemUuTien = empty($_POST["khuvuc"]) ? 0 : $_POST["khuvuc"];
                    switch($diemUuTien){
                        case 0:
                        case 4:
                            echo "0";
                            break;
                        case 1:
                        case 2:
                            echo "5";
                            break;
                        case 3:
                            echo "3";
                        default:
                            break;
                    }
                }
            ?>
        </div>
        <button type="submit" name="btnsubmit" class="btn btn-default" value="Xep Loai">Submit</button>
    </div>
</body>

</html>