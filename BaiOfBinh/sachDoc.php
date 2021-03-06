<?php
    include 'PHP/connect.php';
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
  <title>Sách đọc</title>
  <link rel="stylesheet" href="./css/sachDoc.css">
  <link rel="stylesheet" href="./css/base.css">
  <link rel="stylesheet" href="./css/fontawesome-free-5.15.1-web/css/all.min.css">
</head>
<body>

  <div class="header">
  </div>

  <!-- Icon -->
  <div class="icon-brand">
    <img src="./img/icon.png" alt="">
  </div>

  <div class="navbar">
    <ul class="navbar-nav">
      <li class="nav-item separate">
        <a href="index.php" class="nav-link">Danh mục</a>
      </li>
      <li class="nav-item separate">
        <a href="" class="nav-link" style="color: rgb(0, 255, 85)">Sách đọc</a>
      </li>
      <li class="nav-item separate">
        <a href="sachNoi.php" class="nav-link">Sách nói</a>
      </li>
      <li class="nav-item">
        <a href="tinTuc.php" class="nav-link">Tin tức</a>
      </li>
    </ul>
  </div>

  <!-- Banner -->
  <div class="banner">
    <img src="./img/sachDoc.png" alt=""  class="banner-sachDoc-1">
    <img src="./img/banner-sachDoc-2.PNG" alt="" class="banner-sachDoc-2">
  </div>

  <!-- Content -->
  <div class="content">
    <div class="content-item">
      <h3>Văn học</h3>
      <hr>
      <ul class="content-navbar">
        <li class="nav-item">
          <a href="" class="nav-link">Tất cả</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link sachDoc-active">Thơ - Tản văn</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Truyện dài - Tiểu thuyết</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Trinh thám</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Kiếm hiệp</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Truyện Ngắn</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Hài hước</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Giả tưởng</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Tự truyện</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Kinh dị</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Văn học Teen</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Tiên Hiệp</a>
        </li>
      </ul>
      <div class="content-item-1">
        <div class="item-1">
          <img src="./img/sachDoc-content-1.PNG" alt="">
          <i class="fas fa-heart fa-lg"></i>
          <p>Đánh giá sách</p>
          <span>
            <p class="content-votes">5.00/5: </p>
            <p>(1 votes)</p>
          </span>
        </div>
        <div class="cotent-item-1-title">
          <h4>Đàn ông không phải dạng vừa đâu</h4>
          <p>Tác giả: Sư chan - Sói</br>
            Thể loại: Thơ - Tản văn, Văn học</br>
            Nhà xuất bản: NXB Văn học
          </p>
          <a href="https://tinyurl.com/8ms37d36">
            <button type="button">ĐỌC SÁCH</button>
          </a>
          <p>Đàn ông không phải dạng vừa đâu của bộ đôi tác giả Sưchan – Sói là một tuyển tập những tản văn ngắn về tâm tư, tình cảm, suy nghĩ của đàn ông do First News phát hành vào giữa tháng 9.
            Mỗi giai đoạn cuộc đời luôn có điều đặc biệt ý nghĩa riêng, và đặc ân tuyệt vời nhất dành cho mỗi người chính là tuổi trẻ. Càng trưởng thành càng biết rằng:“Năm tôi 20, sống cho hiện tại. Năm tôi 25, sống cho cả tương lai.” Khi đã đi qua không ít giông bão của tuổi trẻ, kẻ đến người đi, người đàn ông mới nhận ra chỉ điều duy nhất không thể thay đổi đó là “Gia đình”.Với hai tác giả Sưchan và Sói, luôn có một người vô cùng quan trọng trong cuộc đời của đàn ông, đó chính là người vợ, người mẹ của những đứa con họ. Họ là hậu phương vững chãi nhất. 
             Nhưng dù ở độ tuổi nào, dù còn thanh niên hay đã trở thành những “trụ cột” mang đầy trách nhiệm trên vai, thì người đàn ông luôn đặt cho mình những lý tưởng về “thân con trai giữa dòng đời vạn biến” rằng: “Đàn ông không cần tỏ ra mạnh mẽ.Đàn ông phải mạnh mẽ!” hay “Là đàn ông thì không được khóc!...”.</br></br>
            Quân Bình trân trọng giới thiệu.
            </p>
        </div>
      </div>
    </div>

    <div class="dem"></div>
    
    <div class="content-item">
      <h3>Kinh doanh</h3>
      <hr>
      <ul class="content-navbar">
        <li class="nav-item">
          <a href="" class="nav-link">Tất cả</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Khởi nghiệp</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Marketing - Bán hàng</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Quản trị - lãnh đạo</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Dầu tư tài chính</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Kiến thức kinh tế</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link sachDoc-active">Kinh doanh tổng hợp</a>
        </li>
      </ul>
      <div class="content-item-1">
        <div class="item-1">
          <img src="./img/cún/tôi đã tìm thấy ánh sáng cuộc đời những ngày tăm tối.jpg" alt="">
          <i class="fas fa-heart fa-lg"></i>
          <p>Đánh giá sách</p>
          <span>
            <p class="content-votes">5.00/5: </p>
            <p>(1 votes)</p>
          </span>
        </div>
        <div class="cotent-item-1-title">
          <h4> Starbucks - Tôi đã tìm thấy ánh sáng cuộc đời những ngày tối tăm nhất</h4>
          <p>Tác giả: Michael Gates Gill</br>
            Thể loại: Kinh doanh, kinh doanh tổng hợp</br>
            Nhà xuất bản: NXB Dân trí
          </p>
          <a href="">
            <button type="button">ĐỌC SÁCH</button>
          </a>
          <p>Đây là câu chuyện về một người đàn ông có trong tay tất cả mọi thứ, ở đỉnh vinh quang cuộc đời, nhưng rồi đã tự tay đánh mất tất cả - nhưng nhờ công việc Starbucks, ông ấy đã đứng dậy và tìm lại được ý nghĩa cuộc đời mình.
            Đó chính là cuộc sống, luôn đầy rẫy những biến cố chẳng ai ngờ đến, khó khăn chất chồng, bất hạnh dồn dập, những điều đó ai cũng sẽ phải trải qua, và mỗi người đều có những cách đối mặt khác nhau. Nhưng trong những thời khắc tăm tối ấy, ai có đủ kiên nhẫn, cắn răng chịu đựng để đi qua quãng đường hầm mờ mịt, nhất định sẽ nhìn thấy ánh Mặt Trời.</br></br>
            Quân Bình xin trân trọng giới thiệu Starbucks - Tôi đã tìm thấy ánh sáng cuộc đời trong những ngày tối tăm nhất - Michael Gates Gill!
            </p>
        </div>
      </div>
    </div>

    <div class="dem"></div>
    
    <div class="content-item">
      <h3>Nhân vật - Sự kiện</h3>
      <hr>
      <ul class="content-navbar">
        <li class="nav-item">
          <a href="" class="nav-link">Tất cả</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Khởi nghiệp</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link sachDoc-active">Nhân vật</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Sự kiện</a>
        </li>
      </ul>
      <div class="content-item-1">
        <div class="item-1">
          <img src="./img/cún/Truml nghĩ lớn để làm giàu.jpg" alt="">
          <i class="fas fa-heart fa-lg"></i>
          <p>Đánh giá sách</p>
          <span>
            <p class="content-votes">5.00/5: </p>
            <p>(1 votes)</p>
          </span>
        </div>
        <div class="cotent-item-1-title">
          <h4>Truml nghĩ lớn để làm giàu</h4>
          <p>Tác giả: Donald J. Trump</br>
            Thể loại: Nhân vật - Sự kiện, Nhân vật</br>
            Nhà xuất bản: NXB Trẻ
          </p>
          <a href="">
            <button type="button">ĐỌC SÁCH</button>
          </a>
          <p>Nghĩ Lớn Để Thành Công của Donald J.Trump (được coi là ông trùm của các ông trùm bất động sản ở Mỹ), vì ông là ông trùm rất khác biệt nên ông đã viết nên một cuốn sách cũng hoàn toàn khác biệt. Bạn luôn có hai lựa chọn, hoặc bằng lòng với những suy nghĩ bình thường như bao người khác hoặc có thể suy nghĩ lớn.
            Đây chắc chắn là một cuốn sách hay mà bạn phải đọc. Và nhất là khi bạn biết đến Donald J.Trump thì lại càng không thể bỏ qua. Một phong cách rất “Trump” - cuốn sách thúc đẩy động lực rất lớn. Những gì được truyền tải trong sách giúp bạn luôn luôn cảm thấy phấn khích về một người dám nghĩ, dám làm, cách ông ra mệnh lệnh cũng như cách ông động viên một ai đó.
            Hãy đọc ngay cuốn sách này khi bạn có thể, và đừng chần chừ gì cả. Bởi chỉ cần đọc cuốn sách này sớm hơn một chút, bạn đã có thể tạo nên sự khác biệt cho cuộc đời mình!</br></br>
            Quân Bình trân trọng giới thiệu đến bạn cuốn sách “Nghĩ Lớn Để Thành Công”!
            </p>
        </div>
      </div>
    </div>

    <div class="dem"></div>
    
    <div class="content-item">
      <h3>Chăm sóc gia đình</h3>
      <hr>
      <ul class="content-navbar">
        <li class="nav-item">
          <a href="" class="nav-link">Tất cả</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Chăm sóc sức khỏe</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Nuôi dạy con</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link sachDoc-active">Tâm lý - Giới tính</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Phụ nữ - Làm đẹp</a>
        </li>
      </ul>
      <div class="content-item-1">
        <div class="item-1">
          <img src="./img/cún/tôi tìm lại cái tôi đã mất.jpg" alt="">
          <i class="fas fa-heart fa-lg"></i>
          <p>Đánh giá sách</p>
          <span>
            <p class="content-votes">5.00/5: </p>
            <p>(1 votes)</p>
          </span>
        </div>
        <div class="cotent-item-1-title">
          <h4>Tìm lại cái tôi đã mất</h4>
          <p>Tác giả: Trình Chí lương</br>
            Thể loại: Tâm lý - Giới tính</br>
            Nhà xuất bản: NXB Văn học
          </p>
          <a href="">
            <button type="button">ĐỌC SÁCH</button>
          </a>
          <p>Trong cuốn sách này, chúng ta sẽ cùng đi sâu tìm kiếm bí mật ẩn giấu phía sau cái thế giới mà chúng ta cho là lẽ đương nhiên, tìm kiếm kẻ tội đồ khiến chúng ta đau khổ và tầm thường, tìm lại sức mạnh to lớn của bản thân mà chúng ta đã đánh mất. Điều đáng buồn nhất của con người là không hiểu được tình trạng của bản thân có mối liên hệ gì với bản thân. Tìm lại cái tôi đã mất sẽ cùng bạn khám phá bí mật ẩn giấu đằng sau thế giới mà chúng ta nghĩ là đúng, tìm kiếm “kẻ cầm đầu” khiến chúng ta trở nên tầm thường và đau khổ, tìm lại sức mạnh to lớn từ bản thân mà chúng ta đã đánh mất.
            Khi lật giở từng trang trong cuốn sách này, chúng ta sẽ phát hiện đằng sau những câu trả lời mà chúng ta hoàn toàn tin tưởng lại ẩn chứa những sự thật không ngờ tới. Cuốn sách dành tặng cho những người đang cảm thấy mơ hồ, cùng bạn cứu vãn cuộc đời không vui vẻ!
            Quân Bình trân trọng giới thiệu sách Tìm Lại Cái Tôi Đã Mất.
            </br></br>
            Quân Bình lười không review sách này. Nói thẳng ra là lười xem review mạng
            </p>
        </div>
      </div>
    </div>

    <div class="dem"></div>
    
    <div class="content-item">
      <h3>Văn học</h3>
      <hr>
      <ul class="content-navbar">
        <li class="nav-item">
          <a href="" class="nav-link">Tất cả</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Thơ - Tản văn</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Truyện dài - Tiểu thuyết</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Trinh thám</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Kiếm hiệp</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Truyện Ngắn</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Hài hước</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Giả tưởng</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link sachDoc-active">Tự truyện</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Kinh dị</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Văn học Teen</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Tiên Hiệp</a>
        </li>
      </ul>
      <div class="content-item-1">
        <div class="item-1">
          <img src="./img/cún/20413.jpg" alt="">
          <i class="fas fa-heart fa-lg"></i>
          <p>Đánh giá sách</p>
          <span>
            <p class="content-votes">5.00/5: </p>
            <p>(1 votes)</p>
          </span>
        </div>
        <div class="cotent-item-1-title">
          <h4>Cốt cách phụ nữ</h4>
          <p>Tác giả: Huyền trang bất hối</br>
            Thể loại: Văn học, Tự truyện</br>
            Nhà xuất bản: NXB Hà Nội
          </p>
          <a href="">
            <button type="button">ĐỌC SÁCH</button>
          </a>
          <p>“Cốt cách phụ nữ”, một cái tên nghe rất lạ, rất phụ nữ cũng rất đàn bà. Cảm giác của tôi khi lật giở trang đầu cuốn sách, là những lời giới thiệu một cách chân thật về tác giả, là cảm nhận được sự từng trải và nỗi cô đơn thấm nhuần vào lời văn. Tác giả viết: “Tôi, bạn hay ai khác, đều có những bí mật riêng, những nỗi đau và những điều bất lực. Chỉ hơn nhau ở chỗ, ai giấu kỹ hơn, ai che giấu hỏi hơn…”. Huyền Trang Bất Hối, một tác giả mới trong làng văn trẻ hiện nay. Nhưng lại là một cái quen quá đỗi quen thuộc với cộng đồng mạng, một cô gái khắc họa nỗi lòng của những người phụ nữ từng trải, tạc lên sự cô độc và viết ra nỗi đau mà phái yếu đều cố gắng che đậy. Một cô gái lấy đi nước mắt của rất nhiều người. Một giọng văn không thể hòa lẫn, có chút tư vị mềm yếu, pha thêm vài phần đắng cay, nhưng nhiều nhất có lẽ tôi cảm nhận là sự quật cường của một người con gái đứng dậy sau bao giông bão. Từng câu chuyện ngắn, từng dòng văn tâm sự, từng lời chia sẻ chân thật và những tình huống chân thực nhất tạo nên một “Cốt cách phụ nữ”. Trân trọng giới thiệu!</br></br>
            Quân Bình cũng có thể là con gái nhưng cũng lười đọc sách thể loại này luôn =(
            </p>
        </div>
      </div>
    </div>

    <div class="dem"></div>
    
    <div class="content-item">
      <h3>Văn hóa xã hội</h3>
      <hr>
      <ul class="content-navbar">
        <li class="nav-item">
          <a href="" class="nav-link">Tất cả</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Chính trị - Pháp luật</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Tôn giáo - Tâm linh</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link sachDoc-active">Khoa học xã hội</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Văn hóa nghệ thuật</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Giáo dục</a>
        </li>
      </ul>
      <div class="content-item-1">
        <div class="item-1">
          <img src="./img/cún/sự kết thức củagiar kim.jpg" alt="">
          <i class="fas fa-heart fa-lg"></i>
          <p>Đánh giá sách</p>
          <span>
            <p class="content-votes">5.00/5: </p>
            <p>(1 votes)</p>
          </span>
        </div>
        <div class="cotent-item-1-title">
          <h4>Sự kết thức của thời đại giả kim</h4>
          <p>Tác giả: Mervyn King</br>
            Thể loại: Khoa học xã hội, Văn hóa - xã hội</br>
            Nhà xuất bản: NXB Thế Giới
          </p>
          <a href="">
            <button type="button">ĐỌC SÁCH</button>
          </a>
          <p>Giấy không thể biến thành vàng, và thuật giả kim thời trung cổ đã bị chứng minh đa phần chỉ là trò lừa đảo không hơn không kém. Ấy thế mà suốt một thời gian dài, hệ thống tiền tệ và tài chính của con người đã lấy đó làm nền tảng: biến giấy (tiền) thành vàng.
            Tác giả Mervyn King, cựu Thống đốc Ngân hàng Anh quốc, chính là một trong những người đầu tiên cảm nhận về vấn đề trầm kha của hệ thống tiền tệ và tài chính hiện hữu. Từ kinh nghiệm của bản thân trong lĩnh vực tài chính, tác giả đã đưa ra những kiến giải mới mẻ về các lực lượng kinh tế này và chỉ ra con đường hướng về phía trước cho nền kinh tế thế giới. Những giải pháp táo bạo của Mervyn King đánh thẳng vào những yếu tố phức tạp, không cần thiết và thừa thãi của hệ thống lập pháp để đề ra một con đường sáng sủa hơn cho sự phát triển kinh tế và chấm dứt sự phụ thuộc thái quá vào “thuật giả kim” của chúng ta.
            Quân Bình trân trọng giới thiệu Sự kết thúc của thời đại giả kim!            
            </br></br>
            Quân Bình trân trọng giới thiệu.
            </p>
        </div>
      </div>
    </div>

    <div class="dem"></div>
    
    <div class="content-item">
      <h3>Ngôn tình</h3>
      <hr>
      <ul class="content-navbar">
        <li class="nav-item">
          <a href="" class="nav-link">Tất cả</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Cổ trang</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link sachDoc-active">Hiện đại</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Xuyên không</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Trùng sinh</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Huyền ảo</a>
        </li>
      </ul>
      <div class="content-item-1">
        <div class="item-1">
          <img src="./img/cún/giữa chốn phồng hoa gặp được người.jpg" alt="">
          <i class="fas fa-heart fa-lg"></i>
          <p>Đánh giá sách</p>
          <span>
            <p class="content-votes">5.00/5: </p>
            <p>(1 votes)</p>
          </span>
        </div>
        <div class="cotent-item-1-title">
          <h4>Giữa chốn phồng hoa gặp được người</h4>
          <p>Tác giả: Cứu Nguyệt Hi</br>
            Thể loại: Ngôn tình, Hiện đại</br>
            Nhà xuất bản: NXB Hồng Đức
          </p>
          <a href="">
            <button type="button">ĐỌC SÁCH</button>
          </a>
          <p>Hàn Đình từng nói: “Trong cuộc sống của anh, tình yêu không phải là tất cả. Một tình yêu mãnh liệt có thể hy sinh vì em, chết vì em, anh không cho em được. Nhưng tình yêu bình dị, cùng em sống hết cuộc đời, annh có thể làm được.”
            Kỷ Tinh hiểu tình yêu mà hai người họ tìm kiếm khác nhau, và khát vọng trái tim họ theo đuổi vĩnh viễn không có điểm chung. Nhưng cô muốn đứng bên anh trên đỉnh cao; cùng anh đối mặt với khó khăn, phiền muộn, đau khổ; cùng anh nhìn ngắm thành phố lung linh này. Họ, mỗi người trong trái tim của đối phương, giống như cảnh đêm Bắc Kinh lần đầu tiên họ cùng nhau ngắm nhìn ấy – yên tĩnh, tráng lệ và đẹp đến nao lòng.
            Quân Bình trân trọng giới thiệu cuốn sách Giữa chốn phồn hoa gặp được người - Tập 1 cúa tác giả Cửu Nguyệt Hi!
          </br></br>
            Quân Bình trân trọng giới thiệu.
            </p>
        </div>
      </div>
    </div>

    <div class="dem"></div>
    
    <div class="content-item">
      <h3>Kỹ năng</h3>
      <hr>
      <ul class="content-navbar">
        <li class="nav-item">
          <a href="" class="nav-link">Tất cả</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Nghệ thuật sống</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Kỹ năng làm việc</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Hướng nghiệp</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link sachDoc-active">Kỹ năng sống</a>
        </li>
      </ul>
      <div class="content-item-1">
        <div class="item-1">
          <img src="./img/cún/nghĩ giàu làm giáu.jpg" alt="">
          <i class="fas fa-heart fa-lg"></i>
          <p>Đánh giá sách</p>
          <span>
            <p class="content-votes">5.00/5: </p>
            <p>(1 votes)</p>
          </span>
        </div>
        <div class="cotent-item-1-title">
          <h4>Nghĩ giàu làm giàu</h4>
          <p>Tác giả: Napoleon Hill</br>
            Thể loại: Kỹ năng, Kỹ năng sống</br>
            Nhà xuất bản: NXB tổng hợp thành phố HCM  
          </p>
          <a href="">
            <button type="button">ĐỌC SÁCH</button>
          </a>
          <p>Cuốn sách là một cẩm nang gồm các nguyên lý để có được sự thịnh vượng và độc lập về tài chính, được Napoleon Hill viết theo đề nghị của ông trùm ngành thép Mỹ – Andrew Carnegie – người say mê với thành công và muốn lý giải tại sao một số người lại có thể thành đạt trong khi những người khác ở những hoàn cảnh tương tự lại không thể thành công.
            </br></br>
            Quân Bình trân trọng giới thiệu.
            </p>
        </div>
      </div>
    </div>

    <div class="dem"></div>
    
    <div class="content-item">
      <h3>Tác phẩm kinh điển</h3>
      <hr>
      <ul class="content-navbar">
        <li class="nav-item">
          <a href="" class="nav-link">Tất cả</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link sachDoc-active">Tiểu Thuyết</a>
        </li>
      </ul>
      <div class="content-item-1">
        <div class="item-1">
          <img src="./img/cún/ông già và biển cả.jpg" alt="">
          <i class="fas fa-heart fa-lg"></i>
          <p>Đánh giá sách</p>
          <span>
            <p class="content-votes">5.00/5: </p>
            <p>(1 votes)</p>
          </span>
        </div>
        <div class="cotent-item-1-title">
          <h4>Ông già và biển cả</h4>
          <p>Tác giả: Emest Hemigway</br>
            Thể loại: Tác phẩm kinh điển - Tiểu Thuyết</br>
            Nhà xuất bản: NXB Văn học
          </p>
          <a href="">
            <button type="button">ĐỌC SÁCH</button>
          </a>
          <p>Ông già và Biển cả (tên tiếng Anh: The Old Man and the Sea) là một tiểu thuyết ngắn được Ernest Hemingway viết ở Cuba năm 1951 và xuất bản năm 1952. Nó là truyện ngắn dạng viễn tưởng cuối cùng được viết bởi Hemingway. Đây cũng là tác phẩm nổi tiếng và là một trong những đỉnh cao trong sự nghiệp sáng tác của nhà văn. Tác phẩm này đoạt giải Pulitzer cho tác phẩm hư cấu năm 1953. Nó cũng góp phần quan trọng để nhà văn được nhận Giải Nobel văn học năm 1954. Trong Ông già và Biển cả, ông đã triệt để dùng nguyên lý mà ông gọi là “tảng băng trôi”, chỉ mô tả một phần nổi còn lại bảy phần chìm, khi mô tả sức mạnh của con cá, sự chênh lệch về lực lượng, về cuộc chiến đấu không cân sức giữa con cá hung dữ với ông già. Tác phẩm ca ngợi niềm tin, sức lao động và khát vọng của con người.</br></br>
            Quân Bình trân trọng giới thiệu.
            </p>
        </div>
      </div>
    </div>

    <div class="dem"></div>
    
    <div class="content-item">
      <h3>Văn học</h3>
      <hr>
      <ul class="content-navbar">
        <li class="nav-item">
          <a href="" class="nav-link">Tất cả</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Thơ - Tản văn</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Truyện dài - Tiểu thuyết</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link sachDoc-active">Trinh thám</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Kiếm hiệp</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Truyện Ngắn</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Hài hước</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Giả tưởng</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Tự truyện</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Kinh dị</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Văn học Teen</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Tiên Hiệp</a>
        </li>
      </ul>
      <div class="content-item-1">
        <div class="item-1">
          <img src="./img/cún/trò chơi tử thần.jpg" alt="">
          <i class="fas fa-heart fa-lg"></i>
          <p>Đánh giá sách</p>
          <span>
            <p class="content-votes">5.00/5: </p>
            <p>(1 votes)</p>
          </span>
        </div>
        <div class="cotent-item-1-title">
          <h4>1/14 - Tập 1: Trò chơi tử thần</h4>
          <p>Tác giả: Ninh Hàng Nhất</br>
            Thể loại: Trinh Thám, Văn học, Kinh dị, Truyện ma tâm linh</br>
            Nhà xuất bản: NXB Văn học
          </p>
          <a href="">
            <button type="button">ĐỌC SÁCH</button>
          </a>
          <p>Đây là một trò chơi thử thách trí tuệ và lòng dũng cảm, người thắng cuộc sẽ giành được phần thưởng vô cùng lớn và quyền được sinh tồn, còn những kẻ vi phạm nguyên tắc trò chơi sẽ phải nhận sự trừng phạt chính là cái chết. Mười bốn tác giả chuyên viết tiểu thuyết trinh thám bị "mời" đến một nơi bí mật, những tình huống kì lạ xảy ra, những sự kiện đáng sợ và bất ngờ liên tục xuất hiện, khiến họ không tài nào lí giải nổi. Cái chết luôn rình mọi lúc, mọi nơi, không khí căng thẳng bao trùm. Khi số người sống sót càng ngày càng ít đi, họ dần nhận ra một "quy luật" và bí mật kinh người. "Trò chơi tử thần" đã bắt đầu, kẻ chủ mưu vẫn luẩn khuất xung quanh họ là ai? Hắn ta? Cô ta? Rốt cục có mục đích gì? Sau mười bốn ngày, có ai còn sống sót và thoát khỏi nơi quỷ quái đó hay không? Liệu sau đó còn có điều gì đáng sợ hơn chăng? Đó lẽ nào là một trò chơi không bao giờ kết thúc? Mời bạn đón đọc!</br></br>
            Quân Bình trân trọng giới thiệu.
            </p>
        </div>
      </div>
    </div>

    <div class="dem"></div>

    <div class="content-footer">
      <h5>Cảm ơn các bạn đã tin tưởng chọn ebook.quanbinh.vn Sự ủng hộ của các bạn là động lực giúp chúng tôi không ngừng cải tiến và phát triển!</h5>
      <div class="content-footer-container">
        <div class="content-footer-item">
          <img src="./img/cún/content-footer-1.PNG" alt="">
          <b>Đọc ở mọi lúc mọi nơi</b>
          <p>Ebook.quanbinh.vn dùng được trên cả máy tính, di động, máy tính bảng</p>
        </div>
        <div class="content-footer-item">
          <img src="./img/cún/content-footer-2.PNG" alt="">
          <b>Không quảng cáo</b>
          <p>Tất cả các đầu sách đều không có quảng cáo</p>
        </div>
        <div class="content-footer-item">
          <img src="./img/cún/content-footer-3.PNG" alt="">
          <b>Tải và đọc ngoại tuyến</b>
          <p>Sách đã tải về máy có thể đọc offline</p>
        </div>
        <div class="content-footer-item">
          <img src="./img/cún/content-footer-4.PNG" alt="">
          <b>Đa dạng thể loại nội dung</b>
          <p>Ebook quanbinh.vn có: Sách chữ, sách nói, truyện tranh và tạp chí.</p>
        </div>
        <div class="content-footer-item">
          <img src="./img/cún/content-footer-5.PNG" alt="">
          <b>Đọc sách VIP siêu rẻ</b>
          <p>Chỉ 1.000.000 vnđ/ngày là bận có thể đọc trọn bộ sách yêu thích trên ebook.quanbinh.vn</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="banner-footer-2 sachDoc-footer-2">
    <h3>_MỐI TÌNH PARIS, DAVID FOENIKINOS_</h3>
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
</body>
</html>