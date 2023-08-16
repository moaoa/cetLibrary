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
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    </head>
<body class="antialiased">

          @include('includes/header')
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
    @include('includes/configScript')
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/all.min.js')}}"></script>
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

