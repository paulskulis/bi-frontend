<div class="container orderHistory">
	<div class="row mt-5">
		<div class="col-md-3">
			<?php include 'tpl/profile_sidebar.php' ?>
		</div>

		<div class="col-12 col-md-9">
			<h1 class="mb-4 fw-bolder">Pasūtījumu vēsture</h1>
			<table class="table table-hover table-responsive-md" style="vertical-align: middle">
				<thead>
					<th class="text-uppercase">Pasūtījums</th>
					<th  class="text-uppercase">Summa</th>
				</thead>
				<tr>
					<td>
						<a href="?page=order_history_item" class="lh-lg fw-bolder text-decoration-none">LV0000000</strong></a> - Pabeigts <br>
						<span class="fs-6">06.08.2021</span> <br>
					</td>
					<td>257,87&nbsp;&euro;</td>
				</tr>
				<tr>
					<td>
						<a href="?page=order_history_item" class="lh-lg fw-bolder text-decoration-none">LV0000002</strong></a> - Apstrādē <br>
						<span class="fs-6">24.09.2021</span>
					</td>
					<td>3 621,53&nbsp;&euro;</td>
				</tr>
			</table>
			<?php include 'tpl/pagination.php'?>
		</div>
	</div>
