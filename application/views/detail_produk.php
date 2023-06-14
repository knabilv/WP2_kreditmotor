<div class="container-fluid">

	<div class="card">
		<h5 class="card-header">Detail Produk</h5>
		<div class="card-body">
			<?php foreach ($produk as $Produk) : ?>
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo base_url() . '/uploads/' . $Produk->gambar ?>" class="card-img-top">

					</div>

					<div class="col-md-8">
						<table class="table">
							<tr>
								<td>Nama Produk</td>
								<td><strong><?php echo $Produk->nama_produk ?></strong></td>
							</tr>

							<tr>
								<td>Keterangan</td>
								<td><strong><?php echo $Produk->keterangan ?></strong></td>
							</tr>

							<tr>
								<td>Kategori</td>
								<td><strong><?php echo $Produk->kategori ?></strong></td>
							</tr>

							<tr>
								<td>Stok</td>
								<td><strong><?php echo $Produk->stok ?></strong></td>
							</tr>

							<tr>
								<td>Harga</td>
								<td><strong>
										<div class="btn btn-sm btn-success">Rp. <?php echo number_format($Produk->harga, 0, ',', '.') ?></div>
									</strong></td>
							</tr>
						</table>

						<?php echo anchor('dashboard/tambah_ke_keranjang/' . $Produk->id_produk, '<div class="btn btn-sm btn-primary">Keranjang</div>') ?>


						<?php echo anchor('', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>