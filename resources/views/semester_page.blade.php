<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التخصص</title>
    <link rel="icon" href="../../imgs/logolibray1.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/semester.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body> 
          @include('includes/header')
            
          <div class="container mt-5">
    <h1 class="majors">اختر تخصصك</h1>
    <div class="accordion accordion-flush" id="accordionFlushExample">


      @foreach ($departments as $department)
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" id="callbtn" data-bs-toggle="collapse" data-bs-target="{{'#flush-collapse-' . $department->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
            <i class="{{$department->icon}}" id="callfa" style="color: #29658d;"></i> {{$department->name}}
          </button>
        </h2>
        @foreach ($department->semesters as $semester)
        <div id="{{'flush-collapse-' . $department->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body" id="nameofsamester">
            <ul class="list-group">
              <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                <a 
                class="pdfitems" 
                href="{{route('semester.subjects', ['department' => $department->slug, 'semester' => $semester->id])}}">{{$semester->name}}</a>
               
              </li>
              <!-- <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                <a class="pdfitems" href="#">الفصل الثاني</a>
              </li> -->
            </ul>
          </div>
        </div>
        @endforeach
      </div>
      @endforeach 
      <!-- <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            <i class="fa-solid fa-chalkboard-user fa-xl ms-2" style="color: #29658d;"></i> العام
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <ul class="list-group">
              <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                <a class="pdfitems" href="#">الفصل الاول</a>
               
              </li>
              <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                <a class="pdfitems" href="#">الفصل الثاني</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            <i class="fa-solid fa-code fa-xl ms-2" style="color: #29658d;"></i>  الحاسب الآلي
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <ul class="list-group">
                <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل الثالث-هندسة برمجيات</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل الرابع-هندسة برمجيات</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل الخامس-هندسة برمجيات</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل السادس-هندسة برمجيات</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل السابع-هندسة برمجيات</a>
                  </li>
                  
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            <i class="fa-solid fa-network-wired fa-xl ms-2" style="color: #29658d;"></i> الاتصالات
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <ul class="list-group">
                <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل الثالث-هندسة اتصالات</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل الرابع-هندسة اتصالات</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل الخامس-هندسة اتصالات</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل السادس-هندسة اتصالات</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل السابع-هندسة اتصالات</a>
                  </li>
                  
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapsev">
            <i class="fa-solid fa-robot fa-xl ms-2" style="color: #29658d;"></i>   التحكم
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <ul class="list-group">
                <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل الثالث-هندسه تحكم الي</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل الرابع-هندسه تحكم الي</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل الخامس-هندسه تحكم الي</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل السادس-هندسه تحكم الي</a>
                  </li>
                  <li class="mnahg list-group-item d-flex justify-content-end align-items-end">
                    <a class="pdfitems" href="#">الفصل السابع-هندسه تحكم الي</a>
                  </li>
                  
            </ul>
          </div>
        </div>
      </div> -->
    </div>
  </div>
            
    <!-- الي هنا -->
    @include('includes/configScript')
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/all.min.js')}}"></script>
    <script src="{{asset('assets/js/semester.js')}}"></script>
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