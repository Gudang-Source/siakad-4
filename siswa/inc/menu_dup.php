<?php

$page = @$_GET['page'];

?>

<ul class="nav nav-pills nav-stacked">

  <li role="presentation" class="data-jadwal">
    <a href="data-jadwal"><span class="glyphicon glyphicon-calendar"></span>&nbsp; Data Jadwal</a>
  </li>
  <li role="presentation" class="lihat-nilai dropdown">
    <a href="lihat-nilai" class=""><span class="glyphicon glyphicon-file"></span>&nbsp; Lihat Nilai</a>
  </li>
  
  <?php if($cekyo != 0){ ?>

  <li role="presentation" class="dropdown">
    <a href="nilai-rapot"><span class="glyphicon glyphicon-book"></span>&nbsp; Nilai Rapot</a>
  </li>

  <?php } else { } ?>

  <li role="presentation" class="pengaturan">
    <a href="pengaturan"><span class="glyphicon glyphicon-cog"></span>&nbsp; Pengaturan</a>
  </li>
  <li role="presentation" class="hub-admin">
    <a href="hubungi-admin"><span class="glyphicon glyphicon-earphone"></span>&nbsp; Hub. Admin</a>
  </li>
  <li role="presentation">&nbsp;</li>
</ul>
