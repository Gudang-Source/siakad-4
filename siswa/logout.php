<?php
include_once "../function/core.php";
//logout();
//
unset($_SESSION['siswa']['id_card']);
unset($_SESSION['siswa']['pass']);

redirect('login');
?>
