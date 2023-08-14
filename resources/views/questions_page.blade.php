<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الاسئـلة</title>
    <link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/questions.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
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
                  <a href="#">الاسئـلة
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

<div class="boxofQ container   ">
  <ul class="rowarray list-unstyled" id="materials-list">
    <!-- <li class="questions me-2 ms-5  ">
      <a class="pdfitems" href=" ">
        
      <img class="imgass" src="imgs/exam.png" alt="">
      نهائي خريف<br>
      2018-2017
      </a>
    </li>
    <li class="questions me-2 ms-5  ">
      <a class="pdfitems" href=" ">
        
      <img class="imgass" src="imgs/exam.png" alt="">
      نهائي خريف<br>
      2018-2017
      </a>
    </li>
    <li class="questions me-2 ms-5  ">
      <a class="pdfitems" href=" ">
        
      <img class="imgass" src="imgs/exam.png" alt="">
      نهائي خريف<br>
      2018-2017
      </a>
    </li>
    <li class="questions me-2 ms-5  ">
      <a class="pdfitems" href=" ">
        
      <img class="imgass" src="imgs/exam.png" alt="">
      نهائي خريف<br>
      2018-2017
      </a>
    </li>
    <li class="questions me-2 ms-5  ">
      <a class="pdfitems" href=" ">
        
      <img class="imgass" src="imgs/exam.png" alt="">
      نهائي خريف<br>
      2018-2017
      </a>
    </li>
    <li class="questions me-2 ms-5  ">
      <a class="pdfitems" href=" ">
        
      <img class="imgass" src="imgs/exam.png" alt="">
      نهائي خريف<br>
      2018-2017
      </a>
    </li>
    <li class="questions me-2 ms-5  ">
      <a class="pdfitems" href=" ">
        
      <img class="imgass" src="imgs/exam.png" alt="">
      نهائي خريف<br>
      2018-2017
      </a>
    </li>
    <li class="questions me-2 ms-5  ">
      <a class="pdfitems" href=" ">
        
      <img class="imgass" src="imgs/exam.png" alt="">
      نهائي خريف<br>
      2018-2017
      </a>
    </li> -->

  </ul>
</div>

    <!-- الي هنا -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/all.min.js')}}"></script>
    <script src="{{asset('assets/js/questions.js')}}"></script>
    <!-- <script src="js/index.js"></script> -->
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