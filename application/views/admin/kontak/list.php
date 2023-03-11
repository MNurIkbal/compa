<?php
// Form buka utk delete multiple
echo form_open(base_url('admin/user/proses'));
?>
<input type="hidden" name="pengalihan" value="<?php echo str_replace('index.php/', '', current_url()) ?>">


<div class="table-responsive mailbox-messages">
  
<table id="example1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th class="text-center" width="5%">
       <!-- Check all button -->
        #
    </th>
    <th>NAMA</th>
    <th>EMAIL</th>
    <th>PESAN</th>
    <th>ACTION</th>
  </tr>
  </thead>
  <tbody>

  <?php 
  // Looping data user dg foreach
  $i=1;
  foreach($kontak as $user) {
  ?>

  <tr>
    <td><?= $i++; ?></td>
    <td><?php echo $user->nama ?></td>
    <td><?php echo $user->email ?></td>
    <td><?php echo $user->pesan ?></td>
    <td>
      <div class="btn-group">
        <!-- <a href="<?php echo base_url('admin/Kontak/kirim_email/'.$user->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-send"></i> Kirim Email</a> -->
        <a href="<?php echo base_url('admin/Kontak/delete/'.$user->id) ?>" class="btn btn-danger btn-sm" onclick="confirmation(event)"><i class="fa fa-trash-o"></i> Hapus</a>
      </div>
    </td>
  </tr>

  <?php $i++; } //End looping ?>
</tbody>
</table>

</div>
<!-- /.mail-box-messages -->
<?php 
// Form tutup
echo form_close(); 
?>
