<link href="<?php echo base_url('assets/css/iletisim-base.css'); ?>" media="screen" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/iletisim-about.css'); ?>" media="screen" rel="stylesheet" type="text/css" />

<div class="box-top">
	<h2>İletişim</h2>
</div>
<div id="about-content">
	<h3>Lütfen gönderdiğiniz mail&rsquo;in türünü belirtiniz</h3>
	<form id="contact-form" autocomplete="off" method="post">
			<input type="text" class="textfield" id="name" name="name" title="isim ve soyisim" value=""/>
			<input type="text" class="textfield" id="email" name="email" title="email adres" value="" />
			<input type="text" class="textfield" id="phone" name="phone" title="telefon numarası" value="" />
			<select class="select" class="textfield" id="company-name" name="subject" title="konu türünü seçiniz...">
				<option value="0" selected>konu türünü seçiniz...</option>
				<option value="offer">Öneri</option>
				<option value="complaint">Şikayet</option>
				<option value="support">Yardım</option>
				<option value="other">Diğer</option>
			</select>
		<textarea type="text" class="textfield" id="message" name="message" title="mesajınız" /></textarea>
		<button type="submit" class="contact-submit btnlar blue-45"><span>Gönder</span></button>
	</form>
</div>
<div style="margin-right:100px;" id="about-sidebar">
	<h3>İletişim Bilgileri</h3>
	<div class="box inset-box pad clearfix">
		<strong>Genel Sorular</strong><br />
		<a href="mailto:web@bil.omu.edu.tr">web@bil.omu.edu.tr</a>
		<hr />
		<strong>Yardım için</strong><br />
		<a href="mailto:destek@bil.omu.edu.tr">destek@bil.omu.edu.tr</a>
		<hr />
		<strong>Telefon</strong><br />
		(0362) 319 19 19 -Santral
	</div>
</div>
