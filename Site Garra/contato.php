<!DOCTYPE html>
<html>
<?php include ("header.php"); ?>
<body class="contato-inicial">
	<main>
		<div class="conteudo container">
			<h4 class="titulo">
				<span class="text">Fale com a gente!</span>
			</h4>
			<div class="formulario col-md-6">
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