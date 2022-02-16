<!-- Modal start -->
<div class="modal fade" id="cartModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header border-0">
				<h3 class="fw-bold">Prece pievienota grozam</h3>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body ">
				<div class="row">
					<div class="col-md-6">
						<img src="assets/img/product_pipe.png">
					</div>
					<div class="col-md-6 mt-4">
						<span class="text-secondary">Caurules ar plastmasas oderi</span>
						<p>APS - caurule L-500</p>
						<h5 class="fw-bold"><span id="modalCount">1</span> gab.</h5>
					</div>
				</div>
			</div>
			<div class="modal-body border-0">
				<div class="row">
					<div class="col-12 col-md-6 w">
						<button type="button" class="btn btn-secondary fw-bold w-100 mt-2" data-bs-dismiss="modal">Turpināt iepirkšanos</button>
					</div>
					<div class="col-12 col-md-6">
						<button type="button" class="btn btn-primary fw-bold w-100 mt-2"><a href="/?page=cart" class="text-decoration-none text-body">Noformēt pasūtījumu</a></button>
					</div>
				</div>
			</div>
			<div class="mt-2" style="box-shadow: 0 2px 35px 0 rgba(0,0,0,0.10)">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h3 class="m-2 mt-4 fw-bold">Varētu būt noderīgi</h3>
						</div>
					</div>
				</div>

				<?php include 'tpl/suggested_products.php' ?>
			</div>

		</div>
	</div>
</div>
<!-- Modal end -->
