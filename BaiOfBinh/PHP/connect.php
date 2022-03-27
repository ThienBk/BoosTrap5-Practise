<?php
    $conn = mysqli_connect('localhost', 'root', '', 'PHP');
    mysqli_set_charset($conn, 'utf8'); 

    if (!$conn) {
        exit('Kết nối không thành công!');
    }
    // thành công
    echo 'Kết nối thành công!';
?>
