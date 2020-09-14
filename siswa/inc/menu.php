<?php
$page = @$_GET['page'];
$clsnm = substr($k->nama_kelas, 0,2);
$cekwali = $cekyo;
?>
<script type='text/javascript'>
  $(function(){
    $("#list-of-data").hide();
    $("#list-nilai").hide();
    $(".xyz").click(function(){
      $("#list-of-data").slideToggle('slow');
      $("#list-nilai").slideUp(1000);
    });
    $(".click-nilai").click(function(){
      $("#list-nilai").slideToggle("slow");
      $("#list-of-data").slideUp(1000);
    });
  });
</script>
<ul class="nav nav-pills nav-stacked">

    <li role="presentation" class="data-jadwal">
            <a href="<?= base('siswa/data-jadwal');?>"><span class="glyphicon glyphicon-calendar"></span>&nbsp; Data Jadwal</a>
    </li>
    <li role="presentation" class="nilai-rapot">
          <a href="<?= base('siswa/nilai-rapot');?>"><span class="glyphicon glyphicon-book"></span>&nbsp;   Nilai Rapot</a>
    </li>

  <li role="presentation" style="height: 600px;background: #eee;">&nbsp;</li>
</ul>
