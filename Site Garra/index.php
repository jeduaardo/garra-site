<!DOCTYPE html>
<html>
<?php include ("header.php"); ?>
<body class="pagina-inicial">
	<!-- __________________________________________________________________________________________________________________________________ -->
	<section class="slides">
		<!-- Carousel -->
		<div id="carousel-principal" class="carousel slide carousel-fade" data-ride="carousel">
			<!-- Indicadores -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-principal" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-principal" data-slide-to="1"></li>
			</ol>
			<!-- Fim dos indicadores -->
			<!-- Imagens dos slides -->
			<div class="carousel-inner" role="listbox">                   
				<div class="item active">
					<a href="processo-seletivo.php"><img src="assets/img/slide1.png" class="img-responsive"></a>
				</div>
				<div class="item">
					<img src="assets/img/slide2.png" class="img-responsive"> 
				</div>
			</div>
		</div>
	</section>
	<!-- Fim imagens dos slides -->
	<!-- Fim do carousel -->
	<!-- __________________________________________________________________________________________________________________________________ -->
	<main>
		<div id="wrapper" class="container">
			<div class="row">
				<div class="col-lg-5 menus">                         
					<h4 class="titulo">
						<span class="text">TV GARRA</span>
					</h4>
					<div class="conteudo">
						<div class="embed-container">
							<iframe src="https://www.youtube.com/embed/DDcNraGWFdw?list=PLMs39LzqFePqDBbRmZh4rFMrPFir4NRXA" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="foto col-lg-5 menus">                         
					<h4 class="titulo">
						<span class="text">Galeria de fotos</span>
					</h4>
					<div class="conteudo">
						<section class="fotos">
							<!-- Carousel -->
							<div id="carousel-fotos" class="carousel slide carousel-fade" data-ride="carousel">
								<!-- Indicadores -->
								<ol class="carousel-indicators">
									<li data-target="#carousel-fotos" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-fotos" data-slide-to="1"></li>
								</ol>
								<!-- Fim dos indicadores -->
								<!-- Imagens dos slides -->
								<div class="carousel-inner" role="listbox">                   
									<div class="item active">
										<img src="assets/img/slide1.png" class="img-responsive">
									</div>
									<div class="item">
										<img src="assets/img/slide2.png" class="img-responsive"> 
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
			<div class="formulario col-md-4 menus">
				<h4 class="titulo">
					<span class="text">Converse com a gente!</span>
				</h4>
				<div class="conteudo">
					<div id="div-formulario"">						
					<!-- action="email.php" --><form  class="contato-formulario" method="post">
						<div class="form-row">
							<div class="row">
								<div class="form-group col-md-12" id="div-nome">
									<label for="contato-nome" class="col-form-label"></label>
									<input type="text" class="form-control" id="contato-nome" name="nome" placeholder="Nome" required>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12" id="div-email">
									<label for="contato-email" class="col-form-label"></label>
									<input type="email" class="form-control" id="contato-email" name="email" placeholder="E-mail" required>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12" id="div-assunto">
									<label for="contato-assunto" class="campo"></label>
									<input id="contato-assunto" class="form-control" type="text" name="telefone" placeholder="Assunto">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12" id="div-mensagem">
									<label for="contato-mensagem" class="campo"></label>
									<textarea id="contato-mensagem" class="form-control" type="text" placeholder="Mensagem" name="msg" rows="5" required></textarea>
								</div>
							</div>
							<button type="submit" class="btn btn-success" value="Enviar" id="contato-enviar">Enviar</button>
						</div>
					</form>
				</div>
				</div>
			</div>
			
			<div class="col-md-3 menus">                         
				<h4 class="titulo">
					<span class="text">Faça uma visita!</span>
				</h4>
				<div class="conteudo">
					<div id="map" class="menus"></div>
				</div>
			</div>
			<div class="col-md-3 menus">                         
				<h4 class="titulo">
					<span class="text">Conheça a nossa página!</span>
				</h4>
				<div class="conteudo">
					<div class="fb-page" data-href="https://www.facebook.com/garracursinhopopular/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/garracursinhopopular/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/garracursinhopopular/">Garra - Cursinho Popular</a></blockquote></div>
				</div>
			</div>
			<script>
				function initMap() {
					var uluru = {lat: -21.775238, lng: -43.370357};
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 15,
						center: uluru
					});
					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				}
			</script>
			<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDsgAUf-w2b-AHm8uK_i-X-f6p23tE51M&callback=initMap">
		</script>
	</div>	
</main>
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php include ("footer.php"); ?>
</body>
</html>