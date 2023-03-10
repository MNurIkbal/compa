


<div class="table-responsive mailbox-messages " style="margin: 30px;">
  <h3 style="color: black !important;margin-left: 20px;">Mitra Kerja Sama</h3>
  <br>
<table id="example1" class="display table table-bordered table-hover" cellspacing="0" width="100%">
<thead>
    <tr>
        <th style="vertical-align: middle;" class="text-center" >No</th>
        <th style="vertical-align: middle;" class="text-center" >NAMA</th>
        <th style="vertical-align: middle;" class="text-center" >PEMIMPIN</th>
        <th style="vertical-align: middle;" class="text-center" >EMAIL</th>
        <th style="vertical-align: middle;" class="text-center" >WEBSITE</th>
        <th style="vertical-align: middle;" class="text-center">JENIS</th>
        <th style="vertical-align: middle;" class="text-center">ALAMAT</th>
    </tr>
</thead>
<tbody>
  <?php $no = 1; foreach($client as $row) : ?>
  <tr>
    <td><?= $no++; ?></td>
    <td><?= $row->nama; ?></td>
    <td><?= $row->pimpinan; ?></td>
    <td><?= $row->email; ?></td>
    <td><?= $row->website; ?></td>
    <td><?= $row->jenis_client; ?></td>
    <td><?= $row->alamat; ?></td>
  </tr>
  <?php endforeach; ?>
</tbody>
</table>
</div>

