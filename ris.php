<!DOCTYPE html>
<html>
<?php include('head.php');?>
<body>

	<?php include('navbar2.php');?>

	<h1>RIS Immagini e Referti</h1>

	<!DOCTYPE html>
	<html>

	<body>



		<form>
			<div class="row">
				<div class="col-md-4 mb-3">
					<label for="validationDefault01">NOME</label>
					<input type="text" class="form-control" id="validationDefault01" placeholder="nome" minlength="2" required>
				</div>
				<div class="col-md-4 mb-3">
					<label for="validationDefault02">COGNOME</label>
					<input type="text" class="form-control" id="validationDefault02" placeholder="cognome" minlength="2" required>
					<div class="invalid-feedback">
						Please provide a valid name.
					</div>      
				</div>
				<div class="col-md-4 mb-3">
					<label for="validationDefault01">CODICE FISCALE</label>
					<input type="text" class="form-control" id="validationDefault01" placeholder="codice fiscale" minlength="2" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-3">
					<label for="validationDefault01">DATA DI NASCITA</label>
					<input class="form-control" id="validationDefault01"id="date" type="date">
				</div>
				<div class="col-md-4 mb-3">

					<label>SESSO</label><br>
					<label class="custom-control custom-radio">
						<input id="radio1" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Maschio</span>
					</label>
					<label class="custom-control custom-radio">
						<input id="radio2" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Femmina</span>
					</label>

				</div>

				<div class="col-md-4 mb-3">
					<label for="validationDefault01">DATA DI PRENOTAZIONE</label>
					<input class="form-control" id="validationDefault01"id="date" type="date">
				</div>

				<div class="col-md-4 mb-3">

					<div class="form-group">
						<label for="exampleFormControlSelect2">Seleziona il tipo di esame</label>
						<select  class="form-control" id="exampleFormControlSelect2">
							
					    <option>Ecografia</option>
						<option>Medicina Nucleare</option>
						<option>Mammografia</option>
						<option>Radiografia</option>
						<option>Risonanza Magnetica</option>
						<option>Tomografia Computerizzata</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">

				
			</div>
		</div>

		<button class="btn btn-primary" type="submit">Invia</button>
	</form>

	<?php include('script.php');?>
</body>
</html>









<?php include('script.php');?>
</body>

</html>