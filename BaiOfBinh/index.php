<?php
    include "./PHP/connect.php";
    if (isset($_POST['submit'])){
    
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $rpassword = $_POST['rpassword'];
  
      $sql = "INSERT INTO user(name,email,password) VALUES ('$name', '$email', '$password')";
      $query = mysqli_query($conn, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/base.css">
  <link rel="stylesheet" href="./css/fontawesome-free-5.15.1-web/css/all.min.css">
</head>
<body>
  <div class="app">
    <div class="header"></div>
    <!-- Banner -->
    <div class="banner">
      <div class="banner-icon">
        <img src="./img/icon.png" alt="">
        <span>
          <img src="./img/z2958064016865_0664a6f68224f43e8fd832617fb3fab6.jpg" alt="">
        </span>
      </div>
      <!-- <div class="banner-contact">
        <h2 class="banner-text-1">ĐẶT HÀNG QUA HOTLINE</h2>
        <div class="banner-hotLine"><b>19001960</b></div>
      </div>
      <p class="banner-text-2">BẤM VÀO ĐỂ XEM CHI TIẾT</p> -->
      <div class="banner-footer">
        <a href="">
          <div class="banner-footer-item">
            <div class="banner-footer-img">
              <span>
                <img src="./img/box1.png" alt="">
                <p>Danh mục</p>
              </span>
              <img class="footer-img-icon" src="./img/box1-icon.png" alt="">
            </div>
          </div>
        </a>
        <a href="sachDoc.php">
          <div class="banner-footer-item">
            <div class="banner-footer-img">
              <span>
                <img src="./img/box2.png" alt="">
                <p>Sách đọc</p>
              </span>
              <img class="footer-img-icon" src="./img/box2-icon.png" alt="">
            </div>
          </div>
        </a>
        <a href="sachNoi.php">
          <div class="banner-footer-item">
            <div class="banner-footer-img">
              <span>
                <img src="./img/box3.png" alt="">
                <p>Sách nói</p>
              </span>
              <img class="footer-img-icon" src="./img/box3-icon.png" alt="">
            </div>
          </div>
        </a>
        <a href="tinTuc.php">
          <div class="banner-footer-item">
            <div class="banner-footer-img">
              <span>
                <img src="./img/box4.png" alt="">
                <p>Tin tức</p>
              </span>
              <img class="footer-img-icon" src="./img/box4-icon.png" alt="">
            </div>
          </div>
        </a>
      </div>
    </div>
    <!-- dem -->
    <div class="dem"></div>
    <!-- Content -->
    <div class="content">
      <h3>ĐỒNG HÀNH CÙNG PHÁT TRIỂN</h3>
      <div class="content-header">
        <div class="hr"></div>
        <div class="hr"></div>
      </div>
      <div class="content-vid">
        <video width="520" height="440" controls>
          <source src="./img/ebook.mp4" type="video/mp4">
        </video>
        <div class="content-about">
          <p>Đàn ông không phải dạng vừa đâu của bộ đôi tác giả Sưchan – Sói là một tuyển tập những tản văn ngắn về tâm tư, tình cảm, suy nghĩ của đàn ông do First News phát hành vào giữa tháng 9.
            Mỗi giai đoạn cuộc đời luôn có điều đặc biệt ý nghĩa riêng, và đặc ân tuyệt vời nhất dành cho mỗi người chính là tuổi trẻ. Càng trưởng thành càng biết rằng:“Năm tôi 20, sống cho hiện tại. Năm tôi 25, sống cho cả tương lai.” Khi đã đi qua không ít giông bão của tuổi trẻ, kẻ đến người đi, người đàn ông mới nhận ra chỉ điều duy nhất không thể thay đổi đó là “Gia đình”.Với hai tác giả Sưchan và Sói, luôn có một người vô cùng quan trọng trong cuộc đời của đàn ông, đó chính là người vợ, người mẹ của những đứa con họ. Họ là hậu phương vững chãi nhất.
            Quân Bình trân trọng giới thiệu.
            </p>
            <button type="button">
              Về chúng tôi
            </button>
        </div>
      </div>
    </div>

    <!-- Content fake-->
  <div class="content-fake">
    <div class="news-header">
      <h3>Sách đọc</h3>
      <div class="hr"></div>
      <div class="hr"></div>
    </div>
    <hr>
    <div class="content-item">
      <img src="./img/tin tức/8.jpg" alt="">
      <span>
        <h2>Hướng dẫn đăng ký QuanbinhVIP và Nạp Hạt Sồi qua đầu số 9029 Mobifone</h2>
        <p class="p-2">31-03-2021 | 4 lượt xem</p>
        <p class="p-1">Từ ngày 02/11/2020, Quanbinh chính thức triển khai cổng thanh toán 9029 dành cho các thuê bao MobiFone, giúp các bạn đọc dễ dàng đăng ký QuanbinhVIP và nạp Hạt Sồi hơn.</p>
      </span>
    </div>
    <hr>
    <div class="content-item">
      <img src="./img/tin tức/9.jpg" alt="">
      <span>
        <h2>Ghé thăm cửa hàng sách Quanbinh trên Apple Store</h2>
        <p class="p-2">31-03-2021 | 5 lượt xem</p>
        <p class="p-1">Một tin vui không chỉ với Quanbinh mà còn với cộng đồng đọc sách Việt Nam, vừa qua Apple chọn Quanbinh là Ứng dụng của khu vực Đông Nam Á.</p>
      </span>
    </div>
    <hr>
    <div class="content-item">
      <img src="./img/tin tức/10.jpg" alt="">
      <span>
        <h2>Thông báo ngừng phát hành ebook "10 thói quen của triệu phú tự thân"</h2>
        <p class="p-2">20-07-2021 | 121 lượt xem</p>
        <p class="p-1">Quanbinh xin trân trọng thông báo: Từ ngày 06/06/2020, "10 thói quen của triệu phú tự thân" sẽ tạm dừng phát hành trên Quanbinh</p>
      </span>
    </div>
    <hr>
    <div class="content-end">
      <a href="">Xem tiếp</a>
    </div>
  </div>


    <!-- Content sách nói-->
  <div class="content-fake">
    <div class="news-header">
      <h3>Sách nói</h3>
      <div class="hr"></div>
      <div class="hr"></div>
    </div>
    <hr>
    <div class="content-item">
      <img src="./img/tin tức/8.jpg" alt="">
      <span>
        <h2>Hướng dẫn đăng ký QuanbinhVIP và Nạp Hạt Sồi qua đầu số 9029 Mobifone</h2>
        <p class="p-2">31-03-2021 | 4 lượt xem</p>
        <p class="p-1">Từ ngày 02/11/2020, Quanbinh chính thức triển khai cổng thanh toán 9029 dành cho các thuê bao MobiFone, giúp các bạn đọc dễ dàng đăng ký QuanbinhVIP và nạp Hạt Sồi hơn.</p>
      </span>
    </div>
    <hr>
    <div class="content-item">
      <img src="./img/tin tức/9.jpg" alt="">
      <span>
        <h2>Ghé thăm cửa hàng sách Quanbinh trên Apple Store</h2>
        <p class="p-2">31-03-2021 | 5 lượt xem</p>
        <p class="p-1">Một tin vui không chỉ với Quanbinh mà còn với cộng đồng đọc sách Việt Nam, vừa qua Apple chọn Quanbinh là Ứng dụng của khu vực Đông Nam Á.</p>
      </span>
    </div>
    <hr>
    <div class="content-item">
      <img src="./img/tin tức/10.jpg" alt="">
      <span>
        <h2>Thông báo ngừng phát hành ebook "10 thói quen của triệu phú tự thân"</h2>
        <p class="p-2">20-07-2021 | 121 lượt xem</p>
        <p class="p-1">Quanbinh xin trân trọng thông báo: Từ ngày 06/06/2020, "10 thói quen của triệu phú tự thân" sẽ tạm dừng phát hành trên Quanbinh</p>
      </span>
    </div>
    <hr>
    <div class="content-end">
      <a href="">Xem tiếp</a>
    </div>
  </div>


    <!-- news-event -->
    <div class="news-event">
      <div class="news-header">
        <h3>Tin tức sự kiện</h3>
        <div class="hr"></div>
        <div class="hr"></div>
      </div>
      <div class="news-content">
        <div class="news-content-1">
          <img src="./img/news-img-1.PNG" alt="">
          <h4>Waka - lịch phát hành truyện văn học tháng 4/2021</h4>
          <p class="news-opacity-1">31-03-2021 | 1223 nguời xem</p>
          <p class="news-opacity-2">Bạn nào lỡ hẹn tháng 3 với Waka thì nhớ tháng 4 đừng bỉ lỡ nữa nhé! Bật mí là có truyện mới, truyện mới, truyện mới nha!</p>
        </div>
        <div class="news-content-2">
          <div class="news-content-item">
            <img src="./img/news-img-1.PNG" alt="">
            <span>
              <h4>Waka - lịch phát hành truyện văn học tháng 4/2021</h4>
              <p class="news-opacity-2">Bạn nào lỡ hẹn tháng 3 với Waka thì nhớ tháng 4 đừng bỉ lỡ nữa nhé! Bật mí là có truyện mới, truyện mới, truyện mới nha!</p>
            </span>
          </div>
          <div class="news-content-item">
            <img src="./img/news-img-2.PNG" alt="">
            <span>
              <h4>Waka - lịch phát hành truyện văn học tháng 4/2021</h4>
              <p class="news-opacity-2">Bạn nào lỡ hẹn tháng 3 với Waka thì nhớ tháng 4 đừng bỉ lỡ nữa nhé! Bật mí là có truyện mới, truyện mới, truyện mới nha!</p>
            </span>
          </div>
          <div class="news-content-item">
            <img src="./img/news-img-3.PNG" alt="">
            <span>
              <h4>Waka - lịch phát hành truyện văn học tháng 4/2021</h4>
              <p class="news-opacity-2">Bạn nào lỡ hẹn tháng 3 với Waka thì nhớ tháng 4 đừng bỉ lỡ nữa nhé! Bật mí là có truyện mới, truyện mới, truyện mới nha!</p>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div class="banner-footer-2 index-banner-footer-2">
      <h3>_CHUYỆN CON MÈO DẠY HẢI ÂU BAY, LUIS SEPPÚLVEDA_</h3>
      <P>Có những người tuyệt vời mà ta gặp không đúng lúc. Và có những người trở nên tuyệt vời vì ta gặp họ đúng lúc</P>
        <i class="fas fa-arrow-right fa-lg"></i>
    </div>
    <div class="footer">
      <div class="footer-left">
        <h3>THÔNG TIN HỮU ÍCH</h3>
        <div class="footer-left-item">
          <div class="footer-left-col-1">
            <p>Giới thiệu chung</p>
            <p>Review Truyện - </br>Café Sách</p>
            <p>Tin tức </p>
            <p>Thử thách đọc sách</p>
          </div>
          <div class="footer-left-col-2">
            <p>Thỏa thuận sử dụng</p>
            <p>Dịch vụ</p>
            <p>Quyền lợi</p>
            <p>Quy định riêng tư</p>
          </div>
        </div>
      </div>
      <div class="footer-center">
        <h3>THÔNG TIN LIÊN HỆ</h3>
        <div class="footer-hotLine">
          0968676816
          <i class="fas fa-phone fa-unset"></i>
        </div>
        <p>Địa chỉ: 281 Lĩnh Nam, Hoàng Mai, Hà Nội </br>
           Email: quanbinh5568@gmail.com</p>
        <img src="./img/footer-icon.PNG" alt="">
      </div>
      <div class="footer-right">
        <h3>ỨNG DỤNG DI ĐỘNG</h3>
        <div class="footer-app-1">
          <img src="./img/footer-app-1.PNG" alt="">
          <span>
            <p>Hệ điều hành Android</p>
            <p>Phiên bản ứng dụng: 7.4</p>
            <p>Ngày đăng: <b>28/01/2021</b></p>
          </span>
        </div>
        <div class="footer-app-2">
          <img src="./img/footer-app-2.PNG" alt="">
          <span>
            <p>Hệ điều hành IOS</p>
            <p>Phiên bản ứng dụng: 7.4</p>
            <p>Ngày đăng: <b>28/01/2021</b></p>
          </span>
        </div>
      </div>
    </div>
  </div>
</body>
</html>