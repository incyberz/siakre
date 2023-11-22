<?php
if($id_prodi==''){
  $nama_prodi = '';
  $prodi = '';
}else{
  $s = "SELECT a.* 
  FROM tb_prodi a WHERE a.id='$id_prodi'";
  $q = mysqli_query($cn, $s) or die(mysqli_error($cn));
  if(mysqli_num_rows($q)==0) die('Data prodi tidak ada.');

  $d = mysqli_fetch_assoc($q);
  $nama_prodi = $d['nama'];
  $prodi = $d['singkatan'];
}