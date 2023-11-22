<?php
$s = "SELECT * FROM tb_prodi";
$q = mysqli_query($cn,$s) or die(mysqli_error($cn));
$arr_prodi = [];
while($d=mysqli_fetch_assoc($q)){
  $arr_prodi[$d['id']] = $d['singkatan'];
  $arr_nama_prodi[$d['id']] = $d['nama'];
}