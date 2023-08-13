<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>التخصص</title>
        <link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="posting_page.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('/css/all.min.css')}}">
    </head>
<body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-expand-md d-sm-fixed  ">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="barmeun fa-solid fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="searchWeb d-none">
              <form action="">
                <input class="searchwebinput" type="search">
              </form>
            </div>
            <div class="search me-auto ps-3 pe-3 d-none ">
              <i class="fa-solid fa-magnifying-glass "></i>
              <a class="navbar-brand" href="#"></a></div>
            <ul class="navbar-nav mb-2 mb-lg-0 fw-bolder ms-auto ">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fs-5 p-2 p-lg-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  حول
                </a>
                <ul class="navdropdown dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="linktomagr dropdown-item fs-6" href="#">عن اتحاد الطلبة </a></li>
                  <li><a class="linktomagr dropdown-item fs-6" href="#">عن الكلية</a></li>

                </ul>
              </li>
              <!---->

              <li class="nav-item">
                <a class="nav-link fs-5 p-2 p-lg-4 " href="#">تطبيقات مفيدة</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 p-2 p-lg-4 " href="#">المشاركات</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link fs-5 p-2 p-lg-4" href="#" >
                  اختر تخصصك
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 p-2 p-lg-4" href="../../index.html">الرئيسية</a>
              </li>
            </ul >
            <a class="navbar-brand d-none" href="#">
              <img class="logonav" src="../../imgs/logocuet.png" alt="">
            </a>
            <!--من هنا تقدر تمسح لانه هذا تبع المحتوي الصفحه-->
        </div>

      </nav>
              <!-- nav bar  -->
            <!--من هنا تقدر تمسح لانه هذا تبع المحتوي الصفحه-->

            <div class="row justify-content-center bg-image mx-0 mb-5" id="form-list">
                <div class="col-lg-6 py-5" >
                    <div class="bg-white p-5 my-5"  style="    box-shadow: 20px 0px 20px 8px #2f7ca961;border-top-right-radius: 12px ;border-bottom-right-radius: 12px;">
                        <h1 class="text-center mb-4">شارك معلوماتك مع غيرك</h1>
                        <div class="container">
                            <h1 class="text-center mb-4">باب المشاركات</h1>

                            <form id="file-upload-form">
                              <div class="form-group">
                                <select id="department" name="department" class="form-control">
                                    <option class="text-center mb-4" value="">حدد قسمك</option>
                                  <option class="text-center mb-4" value="1">العام</option>
                                  <option class="text-center mb-4" value="2">الحاسب الالى</option>
                                  <option class="text-center mb-4" value="3">التحكم الالى</option>
                                  <option class="text-center mb-4" value="3">الاتصالات</option>
                                </select>
                              </div>
                              <br>
                              <div class="form-group">

                                <select id="course" name="Sem" class="form-control">
                                  <option class="text-center mb-4" >حدد فصلك</option>
                                  <option class="text-center mb-4" value=" 1">فصل الاول</option>
                                  <option class="text-center mb-4" value=" 2">فصل الثاني</option>
                                  <option class="text-center mb-4" value=" 3">فصل الثالث</option>
                                  <option class="text-center mb-4" value="4">فصل الرابع</option>
                                  <option class="text-center mb-4" value="5">فصل الخامس</option>
                                  <option class="text-center mb-4" value="6">فصل السادس</option>
                                  <option class="text-center mb-4" value="7">فصل السابع</option>
                                  <option class="text-center mb-4" value="8">فصل الثامن</option>

                                </select>
                              </div>
                              <br>
                              <div class="form-group">

                                <input type="text" id="subject"  name="subject" placeholder="اسم المادة" style="text-align: center;" class="form-control">
                              </div>
                              <br>
                              <div class="form-group">

                                <input type="text" id="instructor" name="instructor"placeholder="اسم استاذ المادة" style="text-align: center;" class="form-control">
                              </div>

                              <br>
                              <div class="form-group">
                              <div id="dropzone">
                                <h6>قم بسحب وإفلات الملف هنا</h6>
                              </div>
                              <div id="result"></div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" id="sendbtn" >إرسال</button>
                            </form>
                          </div>
                    </div>
                </div>
            </div>
    <!-- الي هنا -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/all.min.js"></script>
    <script src="{{asset('assets/js/posting_page.js')}}"></script>
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

