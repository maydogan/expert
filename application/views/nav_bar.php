<!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <div id="header"><div class="logo"></div></div>
            <a href="<?=site_url('home/index'); ?>" class="brand" style="color: ;" >UZMANLIK ALANI VERİTABANI SİSTEMİ</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="<?=site_url('home/index'); ?>"class="navbar-link">Anasayfa</a></li>
                <li><a href="<?=site_url('home/about'); ?>" class="navbar-link">Hakkımızda</a></li>
                <li><a href="<?=site_url('home/contact'); ?>" class="navbar-link">İletişim</a></li>
                <? if ($this->session->userdata('logged_in') == FALSE): ?>
									<!-- <li><a href="<?=site_url('home/register'); ?>" class="navbar-link">Kayıt Ol</a></li> -->
									<li><a href="<?=site_url('login'); ?>" class="navbar-link">Akademisyen Girişi</a></li>
								<? else: ?>
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #32b0fc;">
											Profiline hoşgeldin <? echo $this->session->userdata('username') ?> <b class="caret"></b>
										</a>
										<? if ($this->session->userdata('user_type') == 1): ?>
												<ul class="dropdown-menu">
													<li><a href="<?=site_url('home/profile'); ?>" >Profil Sayfası</a></li>
													<li><a href="<?=site_url('login/logout'); ?>">Çıkış</a></li>
												</ul>
											<? else: ?>
												<ul class="dropdown-menu">
													<li><a href="<?=site_url('home/profile_expert'); ?>" >Profil Sayfası</a></li>
													<li><a href="<?=site_url('login/logout'); ?>">Çıkış</a></li>
												</ul>
											<? endif; ?>
									</li>
								<? endif; ?>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->