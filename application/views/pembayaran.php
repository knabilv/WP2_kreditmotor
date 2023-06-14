<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item) {
						$grand_total = $grand_total + $item['subtotal'];
					}
					echo "<h4>total belanja adalah: Rp. ".number_format($grand_total,0,',','.');

				 ?>
			</div><br><br>
			<h3>Input alamat pengiriman dan pembayaran</h3>

			<form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama lengkap" class="form-control">

					<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">

					<div class="form-group">
					<label>No Telphone</label>
					<input type="text" name="no_telp" placeholder="Nomer Telphone"class="form-control">

					<div class="form-group">
					<label>Jasa pengiriman</label>
					<select class="form-control">
						<option>JNE</option>
						<option>JNT</option>
						<option>POS</option>
					</select>
				</div>

					<div class="form-group">
					<label>Pilih Bank</label>
					<select class="form-control">
						<option>BRI - xxxxxx</option>
						<option>BCA - xxxxxx</option>
						<option>BNI - xxxxxxx</option>
					</select>
				</div>
				<button type="submit" class="btn btn-sm btn-primary" mb-3>Pesan</button>

			</form>
			<?php
			} else{
				echo "<h4>keranjang belanja anda masih kosong";
			} ?>
		</div>

		<div class="col-md-2"></div>
	</div>
</div>
