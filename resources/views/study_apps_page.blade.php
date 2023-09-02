<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المناهج</title>
    <link rel="icon" href="../../imgs/logolibray1.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/study_apps.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body> 
    
          @include('includes/header')

              <!-- nav bar  -->
            <!--من هنا تقدر تمسح لانه هذا تبع المحتوي الصفحه-->
            <nav class=" arro d-flex" style="--bs-breadcrumb-divider: '<'; " aria-label="breadcrumb ">
              <ol class="arro breadcrumb ">
                <li class=" breadcrumb-item d-flex">
                  <a href="#">المناهج
                </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">اختبار برمجات
              </a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">الفصل السابع
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">قسم الحاسب الالي
          </a>
        </li>
              </ol>
            </nav>
            <!-- <div class="btn-group-vertical">
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-primary">Left</button>
              <button type="button" class="btn btn-primary">Middle</button>
              <button type="button" class="btn btn-primary">Right</button>
            </div>
            </div> -->
            
            <div class="ControlsMenu btn-group-vertical d-lg-block d-md-block d-none">
              <a href="#" class="buttonMeunn btn">
                <i class=" fa-solid fa-book-open"></i>
                المناهج
              </a>
              <a href="#" class="buttonMeunn btn btn-">
                <i class="fa-solid fa-clipboard-question"></i>
                اسئلة
              </a>
              <a href="#" class="buttonMeunn btn btn-">
                <i class="fa-solid fa-laptop-code"></i>
                عملي
              </a>
            </div>
            



            <div class="mobileControlsMenu btn-group d-lg-none d-md-none d-block d-flex justify-content-center align-items-center" role="group" aria-label="Basic example">
              <a href="#" class="mobilebuttonMeunn btn btn-">
                <i class="fa-solid fa-book-open me-2"></i>
                عملي
              </a>
              <a href="#" class="mobilebuttonMeunn btn btn-">
                <i class="fa-solid fa-clipboard-question me-2"></i>
                اسئلة
              </a>
              <a href="#" class="mobilebuttonMeunn btn btn-">
                <i class="fa-solid fa-laptop-code me-2"></i>
                المناهج
              </a>
            </div>
            
<div class="boxofmnahg container mt-1 text-center">
  <ul class="list-unstyled" id="materials-list">
     <!-- <li class="mnahg col-12 mb-4 me-2 ms-2 mt-2  pr-2 d-flex justify-content-end align-items-end">
      <a class="pdfitems" href=" ">منهج محمد د. الفرجاني (رحمه الله)</a>
      <img class="imgass" src="imgs/folder.png" alt="">
    </li> -->
  </ul>
</div>

    <!-- الي هنا -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/all.min.js')}}"></script>
    <script src="{{asset('assets/js/study_materials.js')}}"></script>
    <!-- <script src="js/index.js"></script> -->
    <!-- هذم سكربت متع البوتس تراب -->
    <footer class="footer text-white py-3">
      <div class="contact">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-youtube fa-sm"></i></a>
          <a href="#"><i class="fa-brands fa-telegram"></i></a>
          <a href="#"><i class="fa-solid fa-at"></i></i></a>
      </div>
      <div class="logocuet">
          <p>تنفيذ</p>
          <div class="logoandP">
              <img src="../../imgs/logocuet.png" alt="Logo">
              <p>اتحاد طلبة كلية التقنية الالكترونية</p>
          </div>
      </div>
  </footer>
</body>
</html>