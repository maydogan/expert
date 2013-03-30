<html lang="en"><head>
    <meta charset="utf-8">
    <title>Template · Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
      .carousel  {
	height: 500px;
	width: 998px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">



      <!-- Jumbotron -->
      <div class="jumbotron">

<div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item">
                    <img src="../assets/image/2.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item active">
                    <img src="../assets/image/3.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="../assets/image/4.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
              </div>
              
         <h5 align = center>ÜNİVERSİTEMİZDEN ARAMAK İSTEDİĞİNİZ UZMANLIK ALANINI GİRİNİZ</h5><br>
         <form action=<?php echo site_url(). '/search_expert/result'; ?> class="navbar-form align=center" method= "post">
           <input name="name" type="text" class="span3 search-query" placeholder="Search"><br><br>
           <button type="submit" value="submit" class=" spn1btn btn-large btn-success">Ara</button>
         </form>
         <h5 align = center>ÜNİVERSİTEMİZDEN ARAMAK İSTEDİĞİNİZ UZMANLIK ADINI GİRİNİZ</h5><br>
         <form class="navbar-form align=center">
           <input type="text" class="span3 search-query" placeholder="Search"><br><br>
           <button type="submit" class=" spn1btn btn-large btn-success">Ara</button>
        </form>
<br>
        
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid" align= center>
        <div class="span4"  >
          <h3>Bizden Haberdar Olun!!</h3>
          <p>Email adresinizle sistemimize kayıt yaptırarak uzmanlarımızı takip edebilirsiniz.. </p>
          <p><a class="btn" href="#">Devamını Oku»</a></p>
        </div>
        <div class="span4">
          <h3>OMU Duyurular</h3>
          <p> Sitemiz yenilendi, Omu uzmanlık alanı db sistemi açıldı..</p>
          <p><a class="btn" href="#">Devamını Oku »</a></p>
       </div>
        <div class="span4">
           <h3>Bağlantılı Sayfalar</h3>
							<p><a class="url" href="http://ce.omu.edu.tr/" title="OMU Ceng" target="_blank">OMU Ceng</a></p>
							<p><a class="url" href="http://www.omuradyo.com/" title="Ondokuz Mayıs Üniversitesi" target="_blank">Omü Radyo</a></p>
          <p><a class="btn" href="#">Devamını Oku »</a></p>
        </div>
      </div>

      <hr>

     

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  

</body></html>
