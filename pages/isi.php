<?php 
$bread = $_GET['bread'] ?? jsurl('?');
$id_indikator = $_GET['id_indikator'] ?? jsurl('?');

$s = "SELECT a.indikator, b.id as id_dimensi, b.dimensi  
FROM tb_indikator a 
JOIN tb_dimensi b ON a.id_dimensi=b.id 
WHERE a.id=$id_indikator";
$q = mysqli_query($cn,$s) or die(mysqli_error($cn));
$d = mysqli_fetch_assoc($q);
$id_dimensi = $d['id_dimensi'];
$dimensi = $d['dimensi'];
$indikator = $d['indikator'];

?>

<div class="pagetitle">
  <h1>Pengisian LED Online</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?">Home</a></li>
      <li class="breadcrumb-item"><a href="?led&id_dimensi=<?=$id_dimensi?>"><?=$bread?></a></li>
      <li class="breadcrumb-item active">Pengisian LED</li>
    </ol>
  </nav>
</div>

<div class="lead">Dimensi</div>
<div><?=$dimensi?></div>
<div class="lead mt-2">Indikator</div>
<div><?=$indikator?></div>
<hr>
<div class="lead mb-2">Strategies:</div>

<section class="section dashboard">
  <?php
  $s = "SELECT *, id as id_strategi FROM tb_strategi WHERE id_indikator=$_GET[id_indikator]";
  $q = mysqli_query($cn,$s) or die(mysqli_error($cn));
  $i = 0;
  while($d=mysqli_fetch_assoc($q)){
    $i++;
    $id_strategi=$d['id_strategi'];
    echo "
      <div>
        <div class='mb-2'>$d[strategi]</div>
        <div>
          <a href='?isi_strategi&id_strategi=$id_strategi&bread=$bread&bread2=indikator'>Pengisian Strategi <img src=assets/img/icons/next.png height=20px></a>
        </div>
        
      </div>
      <hr>
    ";
  }


  ?>
  


</section>
