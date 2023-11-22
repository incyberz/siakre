<?php 
$bread = $_GET['bread'] ?? jsurl('?');
$bread2 = $_GET['bread2'] ?? jsurl('?');
$id_strategi = $_GET['id_strategi'] ?? jsurl('?');

$s = "SELECT 
a.strategi, 
b.id as id_indikator,  
b.indikator,  
c.id as id_dimensi,
c.dimensi  
FROM tb_strategi a 
JOIN tb_indikator b ON a.id_indikator=b.id 
JOIN tb_dimensi c ON b.id_dimensi=c.id 
WHERE a.id=$id_strategi";
$q = mysqli_query($cn,$s) or die(mysqli_error($cn));
$d = mysqli_fetch_assoc($q);
$id_dimensi = $d['id_dimensi'];
$id_indikator = $d['id_indikator'];
$dimensi = $d['dimensi'];
$indikator = $d['indikator'];
$strategi = $d['strategi'];

?>

<div class="pagetitle">
  <h1>Pengisian LED Online</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?">Home</a></li>
      <li class="breadcrumb-item"><a href="?led&id_dimensi=<?=$id_dimensi?>"><?=$bread?></a></li>
      <li class="breadcrumb-item"><a href="?isi&id_indikator=<?=$id_indikator?>&bread=<?=$bread?>"><?=$bread2?></a></li>
      <li class="breadcrumb-item active">Pengisian Strategi</li>
    </ol>
  </nav>
</div>

<div class="lead">Dimensi</div>
<div><?=$dimensi?></div>
<div class="lead mt-2">Indikator</div>
<div><?=$indikator?></div>
<div class="lead mt-2">Strategi</div>
<div><?=$strategi?></div>
<hr>
<div class="lead mb-2">Deskripsikan Strategi Anda:</div>

<section class="section dashboard">
  
<textarea class="form-control" rows="10"></textarea>
<button class='btn btn-primary w-100 mt-2'>Submit</button>


</section>
