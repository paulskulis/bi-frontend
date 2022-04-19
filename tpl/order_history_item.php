<div class="container orderHistory">
	<div class="row mt-5">
		<div class="col-md-3">
			<?php include 'tpl/profile_sidebar.php' ?>
		</div>

		<div class="col-12 col-md-9">
			<h1 class="mb-4 fw-bolder mb-4">Pasūtījums: LV0000000</h1>
			<div class="mt-2"></div>
			<?php include 'tpl/order_history_item_row.php' ?>
			<?php include 'tpl/order_history_item_row.php' ?>
			<?php include 'tpl/order_history_item_row.php' ?>
			<?php include 'tpl/order_history_item_row.php' ?>

			<div class="bg-light rounded-3 p-3">
				<h6 class="fw-bold text-uppercase p-2">kopā 1 prece</h6>
				<table class="table-primary">
					<tbody>
						<tr class="m-4">
							<td class="p-2">Starpsumma	</td>
							<td class="p-2">126,00&nbsp;&euro;</td>
						</tr>
						<tr class="m-4">
							<td class="p-2">PVN</td>
							<td class="p-2">26,46&nbsp;&euro;</td>
						</tr>
						<tr>
							<td class="p-2">Kopā</span></td>
							<td class="p-2"><h4 class="fw-bold">126,00&nbsp;&euro;</h4></td>
						</tr>
					</tbody>
				</table>
				<button class="btn btn-primary btn-lg mt-2 w-100 fw-bold fs-6">
					Noformēt pasūtījumu
				</button>
			</div>
		</div>
	</div>
</div>
