<?php
// Notifikasi error
echo validation_errors('<p class="alert alert-warning">','</p>');

// Form open
echo form_open(base_url('admin/Kontak/send'));
?>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Nama User <span class="text-danger">*</span></label>
			<input type="text" name="nama" class="form-control form-control-lg" value="<?php echo $kontak['nama'] ?>" readonly	 placeholder="Nama User" required>
		</div>
	</div>
	
	


	<div class="col-md-6">
	<div class="form-group">
			<label>Email <span class="text-danger">*</span></label>
			<input type="email" name="email" class="form-control form-control-lg" value="<?php echo $kontak['email'] ?>" readonly placeholder="Email" required>
		</div>
	</div>

	

	<div class="col-md-12">
		<div class="form-group">
			<label>Deskripsi User</label>
			<textarea name="keterangan" class="form-control textarea" placeholder="Keterangan" required rows="5"><?php echo set_value('keterangan') ?></textarea>
		</div>

		<div class="form-group">
			<div class="btn-group">
				<button class="btn btn-success btn-lg" name="submit" type="submit">
					<i class="fa fa-save"></i> Simpan
				</button>
				<button class="btn btn-info btn-lg" name="reset" type="reset">
					<i class="fa fa-times"></i> Reset
				</button>
				<a href="<?php echo base_url('admin/kontak') ?>" class="btn btn-warning btn-lg">
					<i class="fa fa-backward"></i> Kembali
				</a>
			</div>
		</div>
	</div>
</div>
<?php 
// Form close
echo form_close();
?>