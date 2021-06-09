<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Veiculo </h3>
		<form action="php_action/createveiculo.php" method="POST">
			<div class="input-field col s12">
			<i class="material-icons prefix">airport_shuttle</i>
				<input type="text" name="marca" id="marca">
				<label for="marca">marca</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">airport_shuttle</i>
				<input type="text" name="modelo" id="modelo">
				<label for="modelo">modelo</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">perm_contact_calendar</i>
				<input type="text" name="ano" id="ano">
				<label for="ano">ano</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">brush</i>
				<input type="text" name="cor" id="cor">
				<label for="cor">cor</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">airport_shuttle</i>
				<input type="text" name="placa" id="placa">
				<label for="placa">placa</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">airport_shuttle</i>
				<input type="text" name="motor" id="motor">
				<label for="motor">motor</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">airport_shuttle</i>
				<input type="text" name="km" id="km">
				<label for="km">km</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">attach_money</i>
				<input type="text" name="valor" id="valor">
				<label for="valor">valor pife</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="veiculo.php" class="btn green"> Lista de veiculos </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
