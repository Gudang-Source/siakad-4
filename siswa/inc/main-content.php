<?php
$page = @$_GET['page'];

  if ($page == "") {
?>

<script type="text/javascript">
  $(document).ready(function(){
    $("#list-data").dataTable({
      'pageLength':5
    });

    $(".dataTables_length, #list-data_info").css({'display':'none'});

    $("#list-data_wrapper > .row:last > .col-sm-5").remove();
    $("#list-data_wrapper > .row:last > .col-sm-7").attr({
      'class':'col-sm-12'
    });

    $(".dataTables_filter").css({'float':'right'});
    $("footer").css({'bottom':'0px'});
  });
</script>
<div class="col-md-6">
  <h4>Hallo, <?= $x->nama; ?>!</h4>
  <p>
    Apa kabar hari ini ?
  </p>
  <hr>
  <?php
    if ($cekyo != 0) {
      echo "Anda adalah siswa <b>".$k->nama_kelas."</b><br>";
    }

  ?>
</div> <!-- end of class col-md-6 -->
<div class="col-md-6">
  <h4>Kehadiran Anda :</h4>
  <table class="table table-bordered" id="list-data">
    <thead>
      <tr>
        <th>No.</th>
        <th>Hari</th>
        <th>Tanggal</th>
        <th>Jam Masuk</th>
        <th>Jam Pulang</th>
      </tr>
    </thead>
    <tbody>

    <?php while ($g = mysqli_fetch_object($data)) : ?>

      <tr>
        <td><?= $no++; ?></td>
        <td><?= $g->hari; ?></td>
        <td><?= $g->tanggal; ?></td>
        <td><?= $g->jam_msk; ?></td>
        <td><?= $g->jam_plg; ?></td>
      </tr>

    <?php endwhile; ?>

    </tbody>
  </table>
</div> <!-- end of claa col md 6 -->

<?php
  } else if($page == "data-jadwal") {
    include_once 'inc/data-jadwal.php';
    echo active('data-jadwal');

  } else if($page == "data-siswa") {
    include_once 'inc/data-siswa.php';
    echo active('data-siswa');

  } else if($page == "data-kelas") {
    include_once 'inc/data-kelas.php';
    echo active('data-kelas');

  } else if($page == "detail-kelas") {
    include_once 'inc/detail-kelas.php';
    echo active('data-kelas');

  } else if($page == "lihat-nilai") {
    include_once 'inc/lihat-nilai.php';
    echo active('lihat-nilai');

  } else if($page == "hasil-nilai") {
    include_once 'inc/hasil-nilai.php';
    echo active('lihat-nilai');

  } else if($page == "pengaturan") {
    include_once 'inc/pengaturan.php';
    echo active('pengaturan');

  } else if($page == "upload") {
    include_once 'inc/upload.php';

  } else if($page == "hubungi-admin") {
    include_once 'inc/hubungi-admin.php';
    echo active('hub-admin');

  } else if($page == "nilai-rapot") {
    include_once 'inc/nilai-rapot.php';
    echo active('nilai-rapot');

  } else if($page == "data-rapot") {
    include_once 'inc/data-rapot.php';
    echo active('data-rapot');

  } else if($page == "act") {
    include_once 'inc/act.php';

  } else if($page == "detail-siswa") {
    include_once 'inc/detail-siswa.php';

  } else if($page == "export-kelas") {
    include_once 'inc/export-kelas.php';
    
  } else {
    echo "<script>sweetAlert('Oops!', 'Halaman tidak ditemukan!', 'error');</script>";
    echo location(base('guru'));
  }
?>
