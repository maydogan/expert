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
        margin:-10px -30px;
        text-align: left;
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
	height: 100px;
	width: 100px;
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

<div id="myCarousel" class="carousel slide span6" align ="left">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item">
                    <img src="../assets/image/2.jpg" alt="">
                    <div class="carousel-caption">
                      <h4></h4>
                      <p>Çeşitli Uzmanlık Alanları İle İlgili Makalelere Ulaşabilirsiniz...</p>
                    </div>
                  </div>
                  <div class="item active">
                    <img src="../assets/image/3.jpg" alt="">
                    <div class="carousel-caption">
                      <h4></h4>
                      <p>Üniversitemizde Bulunan Akademisyenlerin Uzmanlık Alanlarını Öğrenebilirsiniz... </p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="../assets/image/4.jpg" alt="">
                    <div class="carousel-caption">
                      <h4></h4>
                      <p>Çeşitli Uzmanlık Alanları İle İlgili Makalelere Ulaşabilirsiniz...</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
              </div>          
	</div>
	<div>
         <h5 align = center>ARAMA YAPMAK İÇİN</h5><br>
         <form  action= "<?php echo site_url(). '/search_expert/result';?>" class="navbar-form" method="post"align="right">
         <select name="kategori">
			<option value="Alan">Uzmanlık Alanına Göre</option>
			<option value="Uzman">Uzman Adına Göre</option>
			<?php 
			for($i=0;$i<count($kategori);$i++){
				echo "<option value='{$kategori[$i]}'>$kategori[$i]</option>";
				}
    		?>
		 </select>
		 <input class="navbar-form input" type="text" name="kelime"  placeholder="Bir Kelime Giriniz" /> </br>
		 <button style = "margin-top:10px;" align=center class="btn  btn-primary" type = "submit" >Ara</button>
		 </form>
		 
	</div>

      <hr>

      <div  class="row-fluid " align= center> 
        <div class="span4"  >
          <h4>Bizden Haberdar Olun!!</h4>
          <p> Sadece mail adresinizi ve ilginizi çeken konuları tikleyerek uzmanları takip edin</p>
         <a class="btn btn-primary " data-toggle="modal" href="#betaModal">Aramıza katıl</a> 
<div id="betaModal" class="modal hide fade">
    <div class="modal-header">
            <button class="close" data-dismiss="modal">×</button>
            <h3>Bizden Haberdar Ol..</h3>
    </div>
<div class="modal-body">
    <div class="row-fluid">
        <div class="span12">
            <div class="span6">
            <div class="logowrapper">
                <img class="logoicon" src="" alt="App Logo"/>
            </div>
            </div>
            <div class="span6">
				<?php echo validation_errors('<p class="error">'); ?>
                <?php echo form_open("home/register"); ?>
                <form class="form-horizontal">
                  
                     <p class="help-block">
                       <h6 align=left >Email Adresi</h6>
                       <input class="navbar-form input" type="text" name="email"  placeholder="email adresini giriniz" value="<?php echo set_value('email'); ?>" /> </br>                 
                     <h6 align=left >İlgi Alanınız</h6>
                     <div class="input-prepend">
                        <select class="select" name="sex"  aria-required="true"> 
							<option value="0">Seç:</option>
							<option value="1">Unix/Linux</option>
							<option value="2">Network </option>
							<option value="2">Religion</option>
							<option value="2">Medical</option>
							<option value="2">Artifical İntelligence</option>
						</select>
	                  </div>
                      <div class="help-block">
                         <button type="submit" class="btn btn-large btn-info">İstek Gönder</button>
                     </div>
                     <?php echo form_close(); ?>
                </form>
            </div>
        </div>
    </div>
</div>
    <div class="modal-footer">
        <p><i>Omu Ceng</i></p>
    </div>
</div>
        </div>
        <div class="span4">
          <h4>OMU Duyurular</h4>
          <p> Sitemiz yenilendi, Omu uzmanlık alanı db sistemi açıldı..</p>
          <a class="btn btn-primary " data-toggle="modal" href="#betaModal">Devamını Oku >></a> 
       </div>
        <div class="span4">
           <h4>Bağlantılı Sayfalar</h4>
<p><a class="url" href="http://ce.omu.edu.tr/" title="OMU Ceng" target="_blank">OMU Ceng</a></p>
<p><a class="url" href="http://www.omuradyo.com/" title="Ondokuz Mayıs Üniversitesi" target="_blank">Omü Radyo</a></p>
          <a class="btn btn-primary " data-toggle="modal" href="#betaModal">Devamını Oku >></a> 
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

</body>
</html>
