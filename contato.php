<?php
require_once("inc/header.php");
?>

<!--
<div class="home">
	<div class="overlay"></div>
	<div class="home-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_2.jpg);">
		<div class="desc animate-box">
			<h2><strong>Contact</strong> Us</h2>
			<span>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></span>
			<span><a class="btn btn-primary btn-lg" href="#">Donate Now</a></span>
		</div>
	</div>

</div>
-->
<div id="fh5co-contact" class="animate-box">
	<div class="container">
		<form action="#">
			<div class="row">
				<div class="col-md-6">
					<h3 class="section-title">Fale Conosco!</h3>
					<p>Temos uma comunicação aberta a todos que queiram entrar em contato. Envie sua mensagem a nós e responderemos o quanto antes!</p>
					<ul class="contact-info">
						<li><i class="icon-location-pin"></i>Av. Dr. Cardoso de Melo, 90 - Vila Olímpia São Paulo - SP</li>
						<!-- <li><i class="icon-phone2"></i>+ 1235 2355 98</li> -->
						<li><i class="icon-mail"></i><a href="#">paginasdobem@contato.com</a></li>
						<!-- <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li> -->
					</ul>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Nome">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Mensagem"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Enviar" class="btn btn-primary">
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- END fh5co-contact -->
<section class="map">
	<div class="mapouter">
		<div class="gmap_canvas">
			<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Av%20Doutor%20Cardoso%20de%20Melo%2C%2090&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		</div>
	</div>
</section>
<!-- END map -->


<?php
require_once("inc/footer.php");
?>