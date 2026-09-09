<?php
//Bài trắc nghiệm
echo("Đáp án trắc nghiệm là 1-c, 2-b, 3-a, 4-b, 5-b<br>");

//Bài 1
echo "BÀI 1: In số chẵn từ 1 đến 10<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br>";

//Bài 2
echo "BÀI 2: Kiểm tra số nguyên tố<br>";
function kiemTraNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Ví dụ 
$dsSo = [1, 2, 3, 4, 7, 10, 17, 20, 29];

foreach ($dsSo as $so) {
    if (kiemTraNguyenTo($so)) {
        echo "$so là số nguyên tố<br>";
    } else {
        echo "$so không phải là số nguyên tố<br>";
    }
}
echo "<br>";

//Bài 3
echo "BÀI 3: In hình chữ nhật bằng dấu (*)<br>";
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($dong = 1; $dong <= $chieuCao; $dong++) {
        for ($cot = 1; $cot <= $chieuRong; $cot++) {
            echo "*";
        }
        echo "<br>";
    }
}

// Gọi hàm với chiều rộng = 5, chiều cao = 3
inHinhChuNhat(5, 3);

?>