<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Material Design for Bootstrap fonts and icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

  <!-- fonts-->
  <link href="https://fonts.googleapis.com/css?family=Itim|Sriracha|Jua" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- main css-->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/main.css')}}">
  <title>@yield('title')</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar wow fadeInUp Slow" id="mainNav">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="home" target="_blank">
        <img src="img/logohome.png" id="logo" >
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mx-auto">
          <li class="nav-item @yield('nav-home')">
            <a class="nav-link text-uppercase text-expanded" href="home">หน้าแรก</a>
            <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item @yield('nav-about')">
            <a class="nav-link text-uppercase 0text-expanded" href="about">เกี่ยวกับเรา</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle py-2 text-uppercase text-expanded " data-toggle="dropdown">บริการ</a>
            <ul class="dropdown-menu wow fadeIn" aria-labelledby="navbarDropdown" style="background-color: #1C2331;">
              <li><a class="dropdown-item text-uppercase text-expanded" href="#">ทรีทเมนต์</a></li>
              <li><a class="dropdown-item text-uppercase text-expanded" href="#">แพ็คเกจ</a></li>
            </ul>
          </li>
          <li class="nav-item @yield('nav-team')">
            <a class="nav-link text-uppercase 0text-expanded" href="team">ทีมของเรา</a>
          </li>
          <li class="nav-item @yield('contact')">
            <a class="nav-link text-uppercase 0text-expanded" href="contact">ติดต่อเรา</a>
          </li>
        </ul>

        <!-- Right-->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="booking" class="nav-link border border-light rounded" id="booking"  target="_blank">
              จองทันที
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
  @yield('content')

  <!--Footer-->
  <footer class="page-footer text-center font-small wow fadeIn Slower">
    <div class="row">


      <!--Windows-->
      <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="list-group">
          <li class="list-group-item disabled FontSize Color">หน้าต่าง</li>
          <a href="#" class="list-group-item list-group-item-action">หน้าแรก</a>
          <a href="#" class="list-group-item list-group-item-action">เกี่ยวกับเรา</a>
          <a href="#" class="list-group-item list-group-item-action">ทีมของเรา</a>
        </div>
      </div>
      <!--End Windows-->

        <!--บริการ-->
      <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="list-group">
          <li class="list-group-item disabled FontSize Color">บริการของเรา</li>
          <a href="#" class="list-group-item list-group-item-action">ทรีทเมนต์</a>
          <a href="#" class="list-group-item list-group-item-action">แพ็คเกจ</a>
        </div>
      </div>
        <!--End บริการ-->

      <!-- Contact Us -->
      <div class="col-sm-12 col-md-3 col-lg-3 pb-4">
        <a class="navbar-brand" href="home" target="blank">
          <img src="img/logohome.png" id="logoFooter" >
        </a>
        <div class="FontSize Color">
          <b>ติดต่อเรา</b>
        </div>
        <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fa fa-facebook mr-3 mt-3"></i>
      </a>
        <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fa fa-instagram mr-3 mt-3"></i>
      </a>
      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
      <i class="fa fa-envelope mr-3 mt-3"></i>
    </a> <br>
    <span class="pt-3">โทร. 091-808-4163 </span>

      </div>
      <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="mt-3">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.056529084387!2d102.81419171495213!3d16.4219551886638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228a02a838d51b%3A0xbf25e8f6c8586d1b!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lig4Liy4LiE4LiV4Liw4Lin4Lix4LiZ4Lit4Lit4LiB4LmA4LiJ4Li14Lii4LiH4LmA4Lir4LiZ4Li34Lit!5e0!3m2!1sth!2sth!4v1536586367955" width="240" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <!-- End Contact Us -->
    </div>
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="#"> HealthLandMassage&Spa.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
  <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
</body>

</html>
