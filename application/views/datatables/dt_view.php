<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">

<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>

<script>
   jQuery(document).ready(function(){

       // Contoh inisialisasi Datatable tanpa konfigurasi apapun
       // #dt-basic adalah id html dari tabel yang diinisialisasi
       $('#dt-basic').DataTable();

</script>

<table id="dt-basic" class="table table-striped table-bordered">
   <thead>
       <tr>
           <th>ID</th>
           <th>Tanggal</th>
           <th>Judul</th>
           <th>Kategori</th>
           <th>Status</th>
           <th>Action</th>
       </tr>
   </thead>
   <tbody>
       <?php foreach ($data as $d) : ?>
       <tr>
           <td><?php echo $d->post_id ?></td>
           <td><?php echo $d->post_date ?></td>
           <td><?php echo $d->post_title ?></td>
           <td><?php echo $d->cat_name ?></td>
           <td><?php echo $d->post_status ?></td>
           <td><a href="<?php echo base_url('/blog/edit/') . $d->post_id ?>">Edit</a>
<a href="<?php echo base_url('/blog/delete/') . $d->post_id ?>">Delete</a></td>
       </tr>
       <?php endforeach; ?>
   </tbody>
</table>
