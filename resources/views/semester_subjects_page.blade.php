<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>المـواد</title>
  <link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('assets/css/subjects.css')}}">
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
  <nav class="arro d-flex" style="--bs-breadcrumb-divider: '<'; " aria-label="breadcrumb ">
    <ol class="arro breadcrumb ">
      <li class="breadcrumb-item">
        <a class="arro_link" href="#">
          {{$semester->name}} 
        </a>
      </li>
      <li class="breadcrumb-item">
        <a class="arro_link" href="/departments">
          {{$semester->department->name}}
        </a>
      </li>
    </ol>
  </nav>
  <div class=" allMaoadlist ">

    <div class="container_row ">
      <div class="row">

        @foreach ($semester->subjects as $subject)
        <div class=" sub col-lg-4 col-sm-12 col-md-4">
          <div class="maoad card h-100 ">
            <img src="/imgs/cisco.jpg" class="imgmnh card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title fs-4 fw-bolder">{{$subject->name}}</h5>
              <div class="btn-group w-100 p-3" role="group" aria-label="Basic outlined example">
                <a type="button" class="btn" href="#">الاسئلة</a>
                <a type="button" class="btn" href="{{ url('/curriculum/' . $subject->id) }}">المناهج</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <!-- <div class="container_row ">
      <div class="row">
        <div class=" sub col-lg-4 col-sm-12 col-md-4">

          <div class="maoad card h-100 ">
            <img src="/imgs/code-bug-fix-1920x12801616505288.jpg" class="imgmnh card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title fs-4 fw-bolder" id="key">اختبار برمجات</h5>
              <div class="btn-group w-100 p-3" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn">الاسئلة</button>
                <button type="button" class="btn">المناهج</button>
              </div>
            </div>
          </div>
        </div>
        <div class=" sub col-lg-4 col-sm-12 col-md-4">
          <div class="maoad card h-100">
            <img src="/imgs/coding_languages.webp" class="imgmnh card-img-top" alt="...">
            <div class="card-body fs-4 fw-bolder">
              <h5 class="card-title fs-4 fw-bolder ">تطبيقات البرمجة الهدفية</h5>
              <div class="btn-group w-100 p-3" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn">الاسئلة</button>
                <button type="button" class="btn">المناهج</button>
              </div>
            </div>
          </div>
        </div>
        <div class=" sub col-lg-4 col-sm-12 col-md-4">

          <div class="maoad card h-100">
            <img src="/imgs/GettyImages-1358149692.webp" class="imgmnh card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title fs-4 fw-bolder">مواضيع مختارة</h5>
              <div class="btn-group w-100 p-3" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn">الاسئلة</button>
                <button type="button" class="btn">المناهج</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div> -->
  </div>
  <!-- الي هنا -->
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/all.min.js')}}"></script>
  <script src="{{asset('assets/js/subjects.js')}}"></script>
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