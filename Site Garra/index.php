<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Site Garra</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>

<body class="pagina-inicial">
	<!-- __________________________________________________________________________________________________________________________________ -->
	<section class="slides">
		<!-- Carousel -->
		<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
			<!-- Indicadores -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			</ol>
			<!-- Fim dos indicadores -->
			<!-- Imagens dos slides -->
			<div class="carousel-inner" role="listbox">                   
				<div class="item active">
					<img src="assets/img/slide1.jpeg" class="img-responsive">
				</div>
				<div class="item">
					<img src="assets/img/slide2.jpeg" class="img-responsive"> 
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
				<div class="col-md-3">                         
					<h4 class="titulo">
						<span class="text">BLOGARRA</span>
					</h4>
					<p>Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada. Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rhoncus. Aenean id metus id velit ullamcorper pulvinar. Vestibulum fermentum tortor id mi. Pellentesque ipsum. Nulla</p>
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-3">                         
					<h4 class="titulo">
						<span class="text">TV GARRA</span>
					</h4>
					<p>Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada. Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rhoncus. Aenean id metus id velit ullamcorper pulvinar. Vestibulum fermentum tortor id mi. Pellentesque ipsum. Nulla</p>
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-2">                         
					<h4 class="titulo">
						<span class="text">Galeria de fotos</span>
					</h4>
					<p>Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada. Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rhoncus. Aenean id metus id velit ullamcorper pulvinar. Vestibulum fermentum tortor id mi. Pellentesque ipsum. Nulla</p>
				</div>
			</div>
			
			<div id="div-formulario">							
				<form class="contato-formulario">
					<div class="form-row">
						<div class="row">
							<div class="form-group col-md-3" id="div-nome">
								<h4 class="titulo">Fale com a gente!</h4>
								<label for="contato-nome" class="col-form-label">Nome</label>
								<input type="text" class="form-control" id="contato-nome" placeholder="Seu nome" required>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-3" id="div-email">
								<label for="contato-email" class="col-form-label">E-mail</label>
								<input type="email" class="form-control" id="contato-email" placeholder="seu@email.com" required>
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-md-3" id="div-assunto">
								<label for="contato-assunto" class="campo">Assunto</label>
								<input id="contato-assunto" class="form-control" type="text" placeholder="Qual é o assunto?">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-3" id="div-mensagem">
								<label for="contato-mensagem" class="campo">Mensagem</label>
								<textarea id="contato-mensagem" class="form-control" type="text" placeholder="Digite a mensagem" rows="5" required></textarea>
							</div>
						</div>
						<button type="submit" class="btn btn-success" id="contato-enviar">Enviar</button>
					</div>
				</form>
			</div>

			<div class="fb-page" data-href="https://www.facebook.com/projetogarra" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/projetogarra" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/projetogarra">Projeto Garra - Cursinho Popular</a></blockquote></div>
			<div id="map" class="container"></div>
			<script>
				function initMap() {
					var uluru = {lat: -21.7642, lng: -43.3496};
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




<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script src="assets/js/jquery-1.9.1.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
