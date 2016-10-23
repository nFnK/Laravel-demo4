 <title>Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="footer, address, phone, icons" />
    <link rel="stylesheet" href="{{asset('css/footer-distributed-with-address-and-phones.css')}}"> 
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="footer, address, phone, icons" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    
    <style type="text/css">
    body{
      background: url('http://files.vividscreen.info/soft/d231c0d846c26070a8ae2d1255c19036/Cool-Abstract-Background-1920x1080.jpg');
      background-size: 100% auto;
    }
    </style>
<header>
         <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="/library">My Library</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/library/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/library/signin"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
    </ul>
  </div>
</nav>
</header>
@yield ('header&footer')
<footer class="footer-distributed" style="opacity:0.8">
  <div class="footer-left">
      <h3>Omar<span>Salama</span></h3>
      <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blog</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
      </p>
  </div>
  <div class="footer-center">
      <div>
          <i class="fa fa-map-marker"></i>
          <p><span>21 Amer Street</span> Dokki, Egypt</p>
      </div>
      <div>
          <i class="fa fa-phone"></i>
          <p>+2 0112 0879 248</p>
      </div>
      <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">omarfawzi96@gmail.com</a></p>
      </div>
  </div>
  <div class="footer-right">
    <br>
    <br>
      <div class="footer-icons">
          <a href="http://fb.com/ofawzi" target="_blank"><i class="fa fa-facebook"></i></a> &nbsp
          <a href="https://www.linkedin.com/in/omar-salama-8ba469104" target="_blank"><i class="fa fa-linkedin"></i></a> &nbsp
          <a href="https://www.instagram.com/omarsalama96" target="_blank"><i class="fa fa-instagram"></i></a>
      </div>
  </div>
</footer>
