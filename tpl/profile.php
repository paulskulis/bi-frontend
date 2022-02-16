<div class="container">
	<div class="row mt-5">
		<div class="col-md-3">
			<?php include 'tpl/profile_sidebar.php' ?>
		</div>

		<div class="col-md-9">
			<h1 class="mb-4 fw-bolder">Lietotāja dati</h1>
			<form action="/" method="post">
				<div class="form-floating my-2">
					<input name="firstName" type="text" class="form-control" placeholder="Vārds" value="Jānis">
					<label>Vārds</label>
				</div>

				<div class="form-floating my-2">
					<input name="surName" type="text" class="form-control" placeholder="Uzvārds" value="Bērziņš">
					<label>Uzvārds</label>
				</div>

				<div class="form-floating my-2">
					<input name="email" type="email" class="form-control" placeholder="E-pasta adrese" value="janis.berzins@addc.lv">
					<label>E-pasta adrese</label>
				</div>

				<div class="form-floating my-2">
					<input name="phone" type="text" class="form-control" placeholder="Telefona numurs" value="+37120000000">
					<label>Telefona numurs</label>
				</div>

				<div class="form-floating my-2">
					<input name="address" type="text" class="form-control" placeholder="Adrese" value="Piemēra iela 1">
					<label>Adrese</label>
				</div>

				<div class="form-floating my-2">
					<?php include 'tpl/countries_select.php' ?>
					<label>Valsts</label>
				</div>

				<div class="form-floating my-2">
					<input name="city" type="text" class="form-control" placeholder="Pilsēta" value="Liepāja">
					<label>Pilsēta</label>
				</div>

				<div class="form-floating my-2">
					<input name="postCode" type="text" class="form-control" placeholder="Pasta indekss" value="LV-3401">
					<label>Pasta indekss</label>
				</div>

				<div class="form-floating mb-3">
					<input name="password" type="password" class="form-control" placeholder="Parole">
					<label for="floatingPassword">Parole</label>
				</div>

				<div class="form-floating mb-3">
					<input name="passwordConfirm" type="password" class="form-control" placeholder="Parole vēlreiz">
					<label for="floatingPassword">Parole vēlreiz</label>
				</div>
				<button class="btn btn-lg btn-primary fw-bolder" type="submit">Labot profilu</button>
			</form>
		</div>
	</div>
</div>