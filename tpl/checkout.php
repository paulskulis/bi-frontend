<div class="container checkout">
	<div class="row">
		<div class="col-md-12">
			<h1 class="my-5 fw-bold">Pasūtījuma noformēšana</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h1 class="my-5 fw-bold" style="display: inline;"></h1><h1 class="pe-4 fw-bold text-danger" style="display: inline">1</h1><h6 class="text-uppercase fw-bold pb-2" style="display: inline;">Kopējais raksturojums</h6>
		</div>
		<div class="col-md-6">
			<p><span class="text-danger">*</span>  –  obligāti aizpildāmi lauki<br>
			** –  3,4% no pirkuma summas + 0,35 € apstrādes izmaksas + 21% PVN</p>
		</div>
	</div>
	<form action="/?page=checkout" method="post">
		<div class="row">

			<div class="row">
				<div class="col-md-6">
					<div class="form-floating my-2">
						<div class="btn-group w-100" role="group">
							<input type="radio" name="business" class="btn-check" id="checkBoxType1" value="false" checked="">
							<label class="btn btn-light" for="checkBoxType1">Privātpersona</label>

							<input type="radio" name="business" class="btn-check" id="checkBoxType2" value="true">
							<label class="btn btn-light" for="checkBoxType2">Juridiska persona</label>
						</div>
					</div>
				</div>
			</div>



			<div class="col-md-6">
				<div class="form-floating my-2">
					<input name="firstName" type="text" class="form-control" placeholder="Vārds">
					<label>Vārds</label>
				</div>

				<div class="form-floating my-2">
					<input name="surName" type="text" class="form-control" placeholder="Uzvārds">
					<label>Uzvārds</label>
				</div>

				<div class="form-floating my-2">
					<input name="email" type="email" class="form-control" placeholder="E-pasta adrese" required="">
					<label>E-pasta adrese</label>
				</div>

				<div class="form-floating my-2">
					<input name="phone" type="text" class="form-control" placeholder="Telefona numurs">
					<label>Telefona numurs</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-floating my-2 ">
					<input name="address" type="text" class="form-control" placeholder="Adrese">
					<label>Adrese</label>
				</div>

				<div class="form-floating my-2">
					<?php include 'tpl/countries_select.php' ?>
					<label>Valsts</label>
				</div>

				<div class="form-floating my-2">
					<input name="city" type="text" class="form-control" placeholder="Pilsēta">
					<label>Pilsēta</label>
				</div>

				<div class="form-floating my-2">
					<input name="postCode" type="text" class="form-control" placeholder="Pasta indekss">
					<label>Pasta indekss</label>
				</div>

			</div>
			<div class="row my-4">
				<div class="col-md-6">
					<div class="form-check mb-4">
						<input class="form-check-input" name="createAccount" type="checkbox" value="true" checked>
						<label class="form-check-label">
							Izveidot kontu (parole tiks nosūtīta e-pastā)
						</label>
					</div>
				</div>
				<div class="col-md-6">
					<p>Jau ir konts? <a href="/?page=register" class="text-danger fw-bolder">Autorizējieties</a>, lai dati tiktu aizpildīti automātiski un saglabātos pasūtījumu vēsture.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h1 class="my-5 fw-bold" style="display: inline;"></h1><h1 class="pe-4 fw-bold text-danger" style="display: inline">2</h1><h6 class="text-uppercase fw-bold pb-2" style="display: inline;">Piegādes veids</h6>
				</div>
			</div>

			<div class="row mb-4">
				<div class="col-md-4 border mt-4 rounded">
					<div class="row">
						<div class="col-md-3">
							<input class="form-check-input my-2" type="radio" name="delivery" value="store" checked>
							<img src="/assets/img/icon_package.png" class="m-4">
						</div>
						<div class="col-md-9">
							<h6 class="mt-4">Saņemt veikalā</h6>
							<p class="text-secondary">Bezmaksas</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 border mt-4 rounded">
					<div class="row">
						<div class="col-md-3">
							<input class="form-check-input my-2" type="radio" name="delivery" value="post">
							<img src="/assets/img/icon_car.png" class="m-4">
						</div>
						<div class="col-md-9">
							<h6 class="mt-4">Piegāde ar kurjeru</h6>
							<p class="text-secondary">Piegādes izmaksas tiks precizētas pēc pasūtījuma saņemšanas.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-md-12">
					<h1 class="my-5 fw-bold" style="display: inline;"></h1><h1 class="pe-4 fw-bold text-danger" style="display: inline">3</h1><h6 class="text-uppercase fw-bold pb-2" style="display: inline;">Apmaksas veids</h6>
				</div>
			</div>

			<div class="row mb-5">
				<div class="col-md-6 mt-4 pt-1">
					<select class="form-select" name="payment">
						<option disabled selected>Izvēlieties apmaksas veidu</option>
						<option value="1">Bankas pārskaitījums</option>
						<option value="2">PayPal + 3,4% **</option>
					</select>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-2 text-center">
							<img src="/assets/img/icon_info.png" class="m-4">
						</div>
						<div class="col-md-10">
							<p class="text-secondary mt-4">Pēc pasūtījuma noformēšanas, mēs aprēķināsim piegādes izmaksas un nosūtīsim Jums gala rēķinu tuvāko dienu laikā.</p>
						</div>
					</div>
				</div>
			</div>

			<button class="w-100 btn btn-lg btn-primary fw-bolder" type="submit">Apstiprināt</button>
		</form>
	</div>
</div>