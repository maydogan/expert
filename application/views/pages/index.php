    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <link href="<?php echo base_url('assets/css/mycarusel.css'); ?>" rel="stylesheet">
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo base_url('assets/image/2.jpg'); ?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h3>Üniversitedeki Akademisyenlerin Uzmanlık Alanlarını Öğrenebilirsiniz</h3>
              <p class="lead"></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url('assets/image/3.jpg'); ?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h3>Çeşitli Uzmanlık Alanlarıyla İlgili Makalelere Ulaşabilirsiniz...</h3>
              <p class="lead"></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url('assets/image/4.jpg'); ?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h</h3>
            	<p class="lead"> </p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

		<div class="container marketing">

		<!-- Three columns of text below the carousel -->
			<div class="row">
				<div class="span4">
					<form>
						<fieldset>
							<legend><h4>BİZDEN HABERİNİZ OLSUN!</h4></legend>
							<label>Burası iş ilanı</label>
							<span class="help-block"></span>
							<button type="submit" class="btn">devamını oku</button>
						</fieldset>
				  </form>
				</div><!-- /.span4 -->
				<div class="span4">
					<form>
						<fieldset>
							<legend><h4>OMU DUYURULAR</h4></legend>
								<label>Burası Duyuru</label>
								<span class="help-block"></span>
								<button type="submit" class="btn">devamını oku</button>
							</fieldset>
					</form>
				</div><!-- /.span4 -->
				<div class="span4">
					<form>
						<fieldset>
							<legend><h4>BAĞLANTILAR</h4></legend>
							<p><a class="url" href="http://ce.omu.edu.tr/" title="OMU Ceng" target="_blank">OMU Ceng</a></p>
							<p><a class="url" href="http://www.omuradyo.com/" title="Ondokuz Mayıs Üniversitesi" target="_blank">Omü Radyo</a></p>
					</form>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
