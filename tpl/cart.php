<div class="container checkout">
	<div class="row">
		<div class="col-md-12">
			<h1 class="my-5 fw-bold">Grozs</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 productList">
			<?php include 'tpl/cart_item_row.php'?>
			<?php include 'tpl/cart_item_row.php'?>
		</div>
		<div class="col-md-4 bg-light rounded-3 p-5">
			<h6 class="fw-bold text-uppercase my-4 p-2">kopā 1 prece</h6>
			<table class="table-primary">
				<tr class="m-4">
					<td class="p-2">Kopā</td>
					<td class="p-2">126.00 €</td>
				</tr>
				<tr>
					<td class="p-2">Kopā <span class="text-secondary">(bez piegādes)</span></td>
					<td class="p-2"><h4 class="fw-bold">126.00 €</h4></td>
				</tr>
				<tr>
					<td class="p-2 text-end" colspan="2">Cena bez PVN</td>
				</tr>
			</table>
			<p class="text-secondary mt-4">Uz veikalu piegādājam bez maksas. Cita veida piegādes cenu var redzēt nākamajā solī</p>
			<form action="/?page=checkout" method="post">
				<input type="hidden" name="action" value="checkout">
				<input type="hidden" id="product-123" name="products[123]" value="1">
				<input type="hidden" id="product-123" name="products[124]" value="1">
				<button type="submit" class="btn btn-primary btn-lg mt-2 w-100 fw-bold fs-6">
					Noformēt pasūtījumu
				</button>
			</form>
		</div>
	</div>
</div>