<div class="container">
	<div class="row mt-5">
		<div class="col-md-3">
			<?php include 'tpl/profile_sidebar.php' ?>
		</div>

		<div class="col-md-9">
			<h1 class="mb-4 fw-bolder">Vēlmju saraksts</h1>
			<div class="row">
				<div class="col-md-4 itemGrid productItem p-4 text-center">
					<a href="/?page=product" class="text-decoration-none text-body">
						<img src="assets/img/product_pipe.png">
						<p>APS - caurule DM-200, L500</p>
						<h5 class="my-4 fw-bold">126.00 €</h5>
					</a>
					<div class="btn-group" role="group">
						<button type="button text-secondary" class="btn btn-decrement btn-outline-secondary px-3 py-2 bg-light text-body border-0">-</button>
						<button type="button" class="btn counter btn-outline-secondary disabled px-4 py-2 bg-light text-body border-0">1</button>
						<button type="button" class="btn btn-increment btn-outline-secondary px-3 py-2 bg-light text-body border-0">+</button>
						<button type="button" class="btn btn-primary addToCart" data-productid="123" data-bs-toggle="modal" data-bs-target="#cartModal"><img src="assets/img/cart.svg" style="width: 24px;height: 24px"></button>
						<button type="button" class="btn btn-light text-body toggleWishlist" data-productid="123"><div class="iconContainer desired" style="height:24px;width:24px"></div></button>
					</div>				
				</div>
			</div>

		</div>
	</div>
	<?php include 'tpl/cart_modal.php' ?>