

          <form action="" method="post">
          	<div class="control-group">
          		<div class="form-group floating-label-form-group controls mb-0 pb-2">
          			<label style="color:white">Nama</label>
          			<input type="text" class="form-control" name="nama" placeholder="Nama" required="required" data-validation-required-message="Masukkan nama anda.">
          			<p class="help-block text-danger"></p>
          		</div>
          	</div>
          	<div class="control-group">
          		<div class="form-grup floating-label-form-group controls mb-0 pb-2">
          			<label>Nisn</label>
          			<input type="text" class="form-control" name="nisn" placeholder="Nisn" required="required" data-validation-required-message="Masukkan nisn anda.">
          			<p class="help-block text-danger"></p>
          		</div>
          	</div>
          	<div class="control-group">
      			<div class="form-group floating-label-form-group controls mb-0 pb-2">
      				<label>Pesan</label>
      				<textarea class="form-control" name="pesan" rows="5" placeholder="pesan" required="required" data-validation-required-message="Masukkan pesan anda."></textarea>
      				<p class="help-block text-danger"></p>
      			</div>
          	</div>
          	<br>
          	<div id="success"></div>
          	<div class="form-group">
          		<input type="submit" name="kirim" value="kirim" class="btn btn-primary btn-xl">
          	</div>
          </form>
<?php
$kirim = @$_POST['kirim'];
$nama = @$_POST['nama'];
$nisn = @$_POST['nisn'];
$pesan = @$_POST['pesan'];

if ($kirim) {
	mysqli_query($db, "insert into pesan (nama, nisn, pesan) values ('$nama', '$nisn', '$pesan')") or die ($db->error);
	?>
	<div class="alert alert-success">
		Pesan anda telah terkirim
	</div>
	<?php
}
?>