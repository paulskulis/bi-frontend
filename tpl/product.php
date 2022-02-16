<?php include 'tpl/breadcrumbs.php'?>

<div class="container productPageContainer">
	<div class="row">
		<div class="col-md-6">
			<a href="/assets/img/pipe_full.jpg" data-lightbox="image" target="_blank"><img src="/assets/img/pipe_full.jpg"></a>
		</div>
		<div class="col-md-6">
			<h1>APS - caurule L-500</h1>
			<span class="text-secondary">Preces kods: XXXX</span>
			<p class="mt-4 text-secondary">SIA LLP ir radījis produktu APS (Abrazīvā Cauruļu Sistēma).</p>
			<p class="mt-4 text-secondary">APS sistēma ir vienkārši un ērti uzstādāma. APS caurules kalpos desmit reizes ilgāk par metāla graudu caurplūdes caurulēm.</p>
			<p class="mt-4 text-secondary">APS sauklis ir “Gara mūža caurules”, jo pēc laika, kad plastmasa ir izdilusi, jānomaina ir tikai pati plastmasa, nevis viss komplekts.</p>
			<p class="mt-4 text-secondary">Plastmasas nomaiņa ir tik vienkārša, ka klients to var izdarīt pats un bez speciālām palīgierīcēm.</p>
			<p class="mt-4 text-body">Noliktavas atlikums:  <span class="text-body fw-bold">12</span></p>

			<h2 class="fw-bold mt-2">126.00 €</h2>
			<span>Cena bez PVN</span>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-md-6">
			<div class="row" style="min-height:200px">
				<div class="owl-carousel">
					<a href="https://via.placeholder.com/512" data-lightbox="image-1" target="_blank"><img src="https://via.placeholder.com/512"></a>
					<a class="owl-video" href="https://www.youtube.com/watch?v=JkaxUblCGz0"></a>
					<a href="https://via.placeholder.com/512" data-lightbox="image-2" target="_blank"><img src="https://via.placeholder.com/512"></a>
					<a href="https://via.placeholder.com/512" data-lightbox="image-3" target="_blank"><img src="https://via.placeholder.com/512"></a>
					<a href="https://via.placeholder.com/512" data-lightbox="image-4" target="_blank"><img src="https://via.placeholder.com/512"></a>
					<a href="https://via.placeholder.com/512" data-lightbox="image-5" target="_blank"><img src="https://via.placeholder.com/512"></a>
					<a href="https://via.placeholder.com/512" data-lightbox="image-6" target="_blank"><img src="https://via.placeholder.com/512"></a>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6">

			<div class="row d-flex justify-content-start align-items-center">

				<div class="col-auto">
					<div class="btn-group mt-2 productCounter" role="group">
						<button type="button text-secondary" class="btn btn-decrement btn-outline-secondary px-3 py-2 bg-light text-body border-0">-</button>
						<button type="button" class="btn counter btn-outline-secondary disabled px-4 py-2 bg-light text-body border-0">1</button>
						<button type="button" class="btn btn-increment btn-outline-secondary px-3 py-2 bg-light text-body border-0">+</button>
					</div>
				</div>

				<div class="col-auto flex-grow-1">
					<button type="button" class="btn btn-warning py-2 text-body border-0 fw-bold w-100 mt-2 addToCart" data-productId="123" data-bs-toggle="modal" data-bs-target="#cartModal"> <img src="assets/img/cart.svg" class="pe-4">Pievienot grozam</button>
				</div>
			</div>

		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-6">
			<h5 class="fw-bold text-uppercase mb-4">Kopējais raksturojums</h5>
			<p><span class="text-secondary">Plastmasas biezums:	<span class="text-body float-end">10 mm</span></span></p>
			<p><span class="text-secondary">Metāla biezums:	<span class="text-body float-end">2 mm</span></span></p>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-12">
			<h5 class="fw-bold text-uppercase mb-4">līdzīgas preces</h5>
		</div>
		<div class="col-md-12">
			<?php include 'tpl/suggested_products.php'?>
		</div>

	</div>
	<?php include 'tpl/cart_modal.php' ?>