<!DOCTYPE html>
<html>
<?php include ("header.php"); ?>
<body class="contato-inicial">
	<main>
		<h4 class="titulo">
			<span class="text">Fale com a gente!</span>
		</h4>
		<div class="conteudo container">
			<div class="formulario col-md-6">
				<div id="div-formulario"">						
					<form class="contato-formulario">
						<div class="form-row">
							<div class="row">
								<div class="form-group col-md-12" id="div-nome">
									<label for="contato-nome" class="col-form-label">Nome</label>
									<input type="text" class="form-control" id="contato-nome" placeholder="Seu nome" required>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12" id="div-email">
									<label for="contato-email" class="col-form-label">E-mail</label>
									<input type="email" class="form-control" id="contato-email" placeholder="seu@email.com" required>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12" id="div-assunto">
									<label for="contato-assunto" class="campo">Assunto</label>
									<input id="contato-assunto" class="form-control" type="text" placeholder="Qual é o assunto?">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12" id="div-mensagem">
									<label for="contato-mensagem" class="campo">Mensagem</label>
									<textarea id="contato-mensagem" class="form-control" type="text" placeholder="Digite a mensagem" rows="5" required></textarea>
								</div>
							</div>
							<button type="submit" class="btn btn-success" id="contato-enviar">Enviar</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6">                         
				<div id="map" class="menus"></div>
			</div>
		</div>
	</main>
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
<?php include ("footer.php"); ?>
</body>