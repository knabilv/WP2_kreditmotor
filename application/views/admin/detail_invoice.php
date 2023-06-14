<div class="container-fluid">
	<h4>Detail Pesanan<div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id ?></div>
	</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Jumlah Pesanan</th>
			<th>Total</th>
		</tr>

		<?php
		$total = 0;
		foreach ($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		?>

			<tr>
				<td><?php echo $psn->id_produk ?></td>
				<td><?php echo $psn->nama_produk ?></td>

				<td><?php echo number_format($psn->harga, 0, ',', '.') ?></td>
				<td><?php echo number_format($subtotal, 0, ',', '.') ?></td>
			</tr>

		<?php endforeach; ?>

		<tr>
			<td colspan="4" align="center">Total</td>
			<td align="center">Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
		</tr>


	</table>
	<div align="right">
		<a href="<?php echo base_url('admin/invoice') ?>">
			<div class="btn btn-sm btn-primary">Kembali</div>
		</a>
	</div>
</div>