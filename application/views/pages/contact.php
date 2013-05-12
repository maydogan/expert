	
<!DOCTYPE html>
<html lang="en"
  <head>
    <meta charset="utf-8">
    <title>Carousel Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">



<form class="well span9"  >
  <div class="row">
		<table>
		<td>
		<div class="span3">
			<?php echo validation_errors('<p class="error">'); ?>
			<?php echo form_open("home/add_contact"); ?>
			<label>İsim:</label>
			<input class="span3" placeholder="Your First Name" type="input" name="first_name"value="<?php echo set_value('first_name'); ?>" >
			<label>Soyisim:</label>
			<input class="span3" placeholder="Your Last Name" type="input" name="last_name" value="<?php echo set_value('last_name'); ?>">
			<label>Email Adresi:</label>
			<input class="span3" placeholder="Your email address" type="input" name="email" value="<?php echo set_value('email'); ?>">
          	<label>Konu</label>
			<select id="subject" name="subject" class="span3"  name="subject"value="<?php echo set_value('subject'); ?>">
				<option value="na" selected="">Seçiniz:</option>
				<option value="service">Genel Kullanıcı Servisi</option>
				<option value="suggestions">Öneriler</option>
				<option value="product">Ürün Desteği</option>
			</select>
		</div>
		</td>
		<td>
		<div class="span6" >
			<label style="text-align: right">Mesaj</label>
			<textarea name="message" id="message" class="span5 pull-right" rows="12" name="message" value="<?php echo set_value('message'); ?>"></textarea>
		</div>	
		<button type="submit" class="btn btn-primary pull-right">Gönder</button></td>
		<?php echo form_close(); ?>
		</table>
	</div>
</form>





