<div class="pagetitle">
  <h1>DKPS Reports</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?">Home</a></li>
      <li class="breadcrumb-item active">DKPS Reports</li>
    </ol>
  </nav>
</div>

<?=$debug?>


<section class="section dashboard">
  <div class="row">

    <?php 
    $id_prodi = $_SESSION['siakre_id_prodi'] ?? '';
    if(isset($_GET['id_prodi']) || $id_prodi!=''){
      $id_prodi = $_GET['id_prodi'] ?? $id_prodi;
      include 'dkps_report_show.php';

    }else if(isset($_POST['btn_tampilkan_reports'])){
      jsurl("?dkps_reports&id_prodi=$_POST[id_prodi]");
    }else{
      echo "
        <form method=post>
          <div class='mb-3'>
            <label class='form-label' for='id_prodi'>Jenjang / Program Studi</label>
            <select class='form-control' id='id_prodi' name='id_prodi' aria-describedby='id_prodi_ket'>
              <option value=1>S1 - Teknik Informatika</option>
              <option value=2>S1 - Teknik Industri</option>
            </select>
            <div id='id_prodi_ket' class='form-text'>Dokumen LED dan Tabel DKPS akan disesuaikan dengan Prodi yang dipilih</div>
          </div>
          <button type='submit' class='btn btn-primary w-100' name=btn_tampilkan_reports>Tampilkan Reports</button>
        </form>
      ";
    }
    ?>



  </div>
</section>
