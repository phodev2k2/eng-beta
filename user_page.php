<?php

@include 'config.php';
session_start();

if(!isset($_SESSION['user_name']))
{
   header('location:login_form.php');
   
}
elseif(isset($_POST['logoutbtn']))
{
    session_destroy();
    header("location: loginform.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Học tiếng anh tại nhà</title>

  
   <link rel="stylesheet" href="css/style.css">
  
   <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
   

<header>

    <div id="menu" class="fas fa-bars"></div>

    <a href="#" class="logo"><i class="fas fa-user-graduate"></i>Home</a>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#course">course</a></li>
            <li><a href="#teacher">more</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

    <div id="login" class="fas fa-user-circle">


    <a href="logout.php" class="logo">logout</a>
    </div>

</header>




<!-- home section starts  -->

<section class="home" id="home">
<div class="container">

    <div class="content">
        <h3>hi, <span>user</span></h3>
        <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
        <p>this is an user page</p>
        
    </div>

</div>

</div>

    <div class="shape"></div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="images/Studying-cuate.svg" alt="">
    </div>

    <div class="content">
        <h3>Lý do bạn nên học tiếng anh trên web của chúng tôi</h3>
        <h1>Học IELTS Cũng Như Xây Nhà.</h1>
        <p>Xây nhà không thể xong trong 1 sớm 1 chiều.
            Lập kế hoạch thi công, dựng thiết kế, có nền móng, mới bắt đầu xây từng viên gạch, sơn tường, trang trí...     
            Ngày qua ngày, nhà thành hình, công sức bỏ ra đã có kết quả.   
            Bạn nhận ra,    
            Muốn xây nhà cao, nền móng phải chắc.
            Muốn xây nhà nhanh, kế hoạch phải rõ ràng.     
            Học IELTS cũng vậy.  
            Bạn phải học chắc từ gốc, đúng lộ trình,  chủ động và nỗ lực không ngừng nghỉ.    
            Tuy nhiên bạn lại   
            ... quá bận rộn hoặc không có điều kiện học trực tiếp ở các trung tâm Ielts tốt 😭 .</p>
        <a href="#"><button class="btn">Tìm hiểu thêm</button></a>
    </div>

</section>


<section class="course" id="course">

<h1 class="heading">Bắt đầu học ngay</h1>    

<div class="box-container">

    <div class="box">
        <img src="images/Studying-rafiki.svg" alt="">
        <h3 class="price">free</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="/english/verbs/index.html" class="title">Học từ vựng</a>
            <p>Nối các từ lại với nhau nhằm tăng kiến thức từ vựng!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 giờ </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 tháng </h3>
                <h3> <i class="fas fa-book"></i> 500 từ vựng </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/Online learning-rafiki.svg" alt="">
        <h3 class="price">free</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="/english/speech/index.html" class="title">Học cách phát âm</a>
            <p>Đọc to những câu tiếng anh hiện trên màn hình!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 giờ </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 tháng </h3>
                <h3> <i class="fas fa-book"></i> 22 chủ đề  </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/Kids Studying from Home-rafiki.svg" alt="">
        <h3 class="price">free</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="/english/game/index.html" class="title">Play game</a>
            <p>Kéo ảnh vào các ô thích hợp để hoàn thành trò chơi.</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> ... </h3>
                <h3> <i class="far fa-calendar-alt"></i> ... </h3>
                <h3> <i class="fas fa-book"></i> ... </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/Telecommuting-pana.svg" alt="">
        <h3 class="price">free</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">update</a>
            <p>...</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> ... </h3>
                <h3> <i class="far fa-calendar-alt"></i> ... </h3>
                <h3> <i class="fas fa-book"></i> ... </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/Good team-pana.svg" alt="">
        <h3 class="price">free</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">update</a>
            <p>...</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> ... </h3>
                <h3> <i class="far fa-calendar-alt"></i> ... </h3>
                <h3> <i class="fas fa-book"></i> ... </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/Team goals-pana.svg" alt="">
        <h3 class="price">free</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">update</a>
            <p>...</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> ... </h3>
                <h3> <i class="far fa-calendar-alt"></i> ... </h3>
                <h3> <i class="fas fa-book"></i> ... </h3>
            </div>
        </div>
    </div>

</div>

</section>

<!-- course section ends -->

<!-- teacher section starts  -->

<section class="teacher" id="teacher">

<h1 class="heading">Vén màn bí mật tại lớp IELTS trực tuyến IELTS Fighter</h1>

<p>Tất cả những gì bạn cần để chinh phục 7.0+ IELTS đều có ngay đây!</p>

<a href="#"><button class="btn">tìm hiểu thêm</button></a>

</section>

<!-- teacher section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">contact us</h1>

<div class="row">

    <form action="">
        <input type="text" placeholder="full name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <input type="number" placeholder="phone number" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="your address"></textarea>
        <input type="submit" class="btn" value="send">
    </form>

    <div class="image">
        <img src="images/contact-img.png" alt="">
    </div>

</div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Khu vực</h3>
            <a href="#">Việt Nam</a>
            <a href="#">China</a>
            <a href="#">Pháp</a>
            <a href="#">Pakistan</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#course">course</a>
            <a href="#">more</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> ca mau viet nam. </p>
            <p> <i class="fas fa-envelope"></i> 200501022@student.bdu.edu.vn </p>
            <p> <i class="fas fa-phone"></i> 08573329xx </p>
            <ul>
            <li><a target="_blank" href="https://discord.gg/XeatxhVh"><i class="fab fa-discord"></i></a></li>
            <li><a target="_blank" href="https://github.com/phodev2k2"><i class="fab fa-github"></i></a></li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UCaji5iEotcL6nIwKQ1nb8IA"><i class="fab fa-youtube"></i></a></li>
            <li><a target="_blank" href="https://www.facebook.com/pleasedontripfbme"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>

    </div>

    <h1 class="credit">created by <a href="#">city</a> all rights reserved. </h1>

</div>

<!-- footer section ends -->



<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
