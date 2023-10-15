<style>
  .persen-big{font-size:30px; font-weight:bold; color:#228}
  .count_uploaded{font-size:14px; color: #888}
</style>
<style>
  .img-profil{
    width: 70px;
    height: 70px;
    border-radius: 50%;
    margin-bottom: 5px;
    transition:.2s;
  }
  .img-profil:hover{transform:scale(1.2)}
  .profil-p {border: solid 4px #f7f;}
  .profil-l {border: solid 4px #77f;}
  .nama-p {color: #c5c}
  .nama-l {color: #55c}
  .flexy-item{
    width: 90px;
    text-align: center;
    border: solid 1px #ccc;
    border-radius: 10px;
    padding: 15px 5px 10px 5px;
    font-size: 10px;
  }
</style>
<?php

$total['led'] = 734;
$finished['led'] = 233;
$persen['led'] = number_format($finished['led']*100/($total['led']),2);
$green_color = intval($persen['led']/100*155);
$red_color = intval((100-$persen['led'])/100*255);
$rgb = "rgb($red_color,$green_color,50)";

$progres['led'] = "
  <div class=progress>
    <div class='progress-bar' style='width:$persen[led]%; background:$rgb'></div>
  </div>
";


$total['dkps'] = 145;
$finished['dkps'] = 85;
$persen['dkps'] = number_format($finished['dkps']*100/($total['dkps']),2);
$green_color = intval($persen['dkps']/100*155);
$red_color = intval((100-$persen['dkps'])/100*255);
$rgb = "rgb($red_color,$green_color,50)";

$progres['dkps'] = "
  <div class=progress>
    <div class='progress-bar' style='width:$persen[dkps]%; background:$rgb'></div>
  </div>
";


# =====================================================
# EDITORS
# =====================================================
$editors = ['Iin Sholihin', 'Topan Trianto', 'Ahmad Firdaus','Salwa Fatimah','Furqon Muhyidin','Denta Lidya', 'Dasep Galvamino'];
$genders = ['l', 'l', 'l','p', 'l','p', 'l'];
$points = [3421, 3211, 2786,2453, 1987,1765, 675];

$editors_item = '';
foreach ($editors as $key => $editor) {
  $gender = $genders[$key];

  $path_img_default = "assets/img/icons/student-$gender.png";
  // if($d2['folder_uploads']==''){
  if(1){
    $path_img = $path_img_default;
  }else{
    $path_profile = "../mhs/uploads/$d2[folder_uploads]/_profile_$d2[id_mhs].jpg";
    if(file_exists($path_profile)){
      $path_img = $path_profile;
    }else{
      $path_img = "../assets/img/icons/student-warning.png";
    }
  }
  $img_profil = "<img src='$path_img' class='img-profil profil-$gender' />";

  $editors_item.="
  <div class='flexy-item'>
    <div>
      $img_profil
    </div>
    <div class='nama-$gender'>$editor</div>
    <div class='nama-$gender'>$points[$key] <i class='bi bi-award-fill'></i></div>

  </div>";
  
}

$editors_show = "
<div class=wadahzzz>
  <div class='flexy kecil'>$editors_item</div>
</div>";





# =====================================================
# VERIFIKATORS
# =====================================================
$verifikators = ['Yudhy', 'Fahmi Nugraha', 'Dadang Sudrajat', 'Dian Ade Kurnia'];
$genders = ['l', 'l', 'l', 'l'];
$points = [47,42,37,14];

$verifikators_item = '';
foreach ($verifikators as $key => $verifikator) {
  $gender = $genders[$key];

  $path_img_default = "assets/img/icons/student-$gender.png";
  // if($d2['folder_uploads']==''){
  if(1){
    $path_img = $path_img_default;
  }else{
    $path_profile = "../mhs/uploads/$d2[folder_uploads]/_profile_$d2[id_mhs].jpg";
    if(file_exists($path_profile)){
      $path_img = $path_profile;
    }else{
      $path_img = "../assets/img/icons/student-warning.png";
    }
  }
  $img_profil = "<img src='$path_img' class='img-profil profil-$gender' />";

  $verifikators_item.="
  <div class='flexy-item'>
    <div>
      $img_profil
    </div>
    <div class='nama-$gender'>$verifikator</div>
    <div class='nama-$gender'>$points[$key] <i class='bi bi-award-fill'></i></div>

  </div>";
  
}

$verifikators_show = "
<div class=wadahzzz>
  <div class='flexy kecil'>$verifikators_item</div>
</div>";

?>
<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Progres LED <span>| hari ini</span></h5>
              <div class='mb3'>
                <div>
                  <span class="persen-big" style=''><?=$persen['led']?>%</span>
                  <span>&nbsp;</span> 
                  <span class="count-uploaded" style=''><?=$finished['led']?> of <?=$total['led']?> finished</span>
                </div>
                <?=$progres['led']?>
              </div>

              <div class="kanan">
                <a href="#">
                  lihat detail <i class="bi bi-arrow-right-square-fill"></i>
                </a>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">


            <div class="card-body">
              <h5 class="card-title">Progres DKPS <span>| hari ini</span></h5>

              <div class='mb3'>
                <div>
                  <span class="persen-big" style=''><?=$persen['dkps']?>%</span>
                  <span>&nbsp;</span> 
                  <span class="count-uploaded" style=''><?=$finished['dkps']?> of <?=$total['dkps']?> uploaded</span>
                </div>
                <?=$progres['dkps']?>
              </div>

              <div class="kanan">
                <a href="#">
                  lihat detail <i class="bi bi-arrow-right-square-fill"></i>
                </a>
              </div>

            </div>
          </div>
        </div><!-- End Revenue Card -->

        <!-- <div class="col-xxl-4 col-xl-12"> -->
        <div class=" col-xl-12">

          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Poin Terbaik</a></li>
                <li><a class="dropdown-item" href="#">Kinerja Tercepat</a></li>
                <li><a class="dropdown-item" href="#">Input Terbanyak</a></li>
                <li><a class="dropdown-item" href="#">Update Terbanyak</a></li>
                <li><a class="dropdown-item" href="#">Upload Terbanyak</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Editors <span>| Poin Terbaik</span></h5>
              <div class="flexy">
                <?=$editors_show ?>
              </div>
            </div>

          </div>

        </div>

        <div class=" col-xl-12">
          <div class="card info-card customers-card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Kinerja Terbaik</a></li>
                <li><a class="dropdown-item" href="#">Verifikasi Terbanyak</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Verifikators <span>| Kinerja Terbaik</span></h5>
              <div class="flexy">
                <?=$verifikators_show ?>
              </div>
            </div>

          </div>

        </div>



      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

      <!-- Recent Activity -->
      <?php include 'pages/recent_activity.php'; ?>


    </div><!-- End Right side columns -->

  </div>
</section>
