<?php
$id_dimensi = $_GET['id_dimensi'] ?? die(erid('id_dimensi'));
$s = "SELECT a.singkatan, a.dimensi, b.no FROM tb_dimensi a 
JOIN tb_criteria b ON a.id_criteria=b.id  
WHERE a.id=$id_dimensi";
$q = mysqli_query($cn,$s) or die(mysqli_error($cn));
$d = mysqli_fetch_assoc($q);
$dimensi = $d['dimensi'];
$bread = "C$d[no]~$d[singkatan]";
?>
<div class="pagetitle">
  <h1>LED Online</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?">Home</a></li>
      <li class="breadcrumb-item active"><?=$bread?></li>
    </ol>
  </nav>
</div>

<div class="lead">Dimensi</div>
<div><?=$dimensi?></div>

<section class="section dashboard">
  <?php
  $s = "SELECT *, id as id_indikator FROM tb_indikator WHERE id_dimensi=$id_dimensi";
  $q = mysqli_query($cn,$s) or die(mysqli_error($cn));
  $i = 0;
  while($d=mysqli_fetch_assoc($q)){
    $i++;
    $id_indikator=$d['id_indikator'];
    echo "
      <div>
        <div class='lead darkblue mb-2 mt-4 f20'>Indikator-$i</div>
        <div class='mb-2'>$d[indikator]</div>
        <div>
          <a href='?isi&bread=$bread&id_indikator=$id_indikator'>Pengisian LED <img src=assets/img/icons/next.png height=20px></a>
        </div>
        
      </div>
      <hr>
    ";
  }


  ?>
  


</section>
