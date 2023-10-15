<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="index.html">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <!-- ====================================== -->
    <!-- PRE BAB -->
    <!-- ====================================== -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#prebab-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Pre-Bab | Intro</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="prebab-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li><a href="#"><i class="bi bi-circle"></i><span>Inisiasi Opsi</span></a></li>
        <li><a href="#"><i class="bi bi-circle"></i><span>Identitas Pengusul</span></a></li>
        <li><a href="#"><i class="bi bi-circle"></i><span>Tim Penyusun LED</span></a></li>
        <li><a href="#"><i class="bi bi-circle"></i><span>Kata Pengantar</span></a></li>
        <li><a href="#"><i class="bi bi-circle"></i><span>Ringkasan Eksekutif</span></a></li>
        <li><a href="#"><i class="bi bi-circle"></i><span>Daftar Isi</span></a></li>
      </ul>
    </li>
    <!-- End ====================================== -->

    <!-- ====================================== -->
    <!-- PRE BAB -->
    <!-- ====================================== -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#pendahuluan-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Bab I Pendahuluan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="pendahuluan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li><a href="#"><i class="bi bi-circle"></i><span>A. Dasar Penyusunan</span></a></li>
        <li><a href="#"><i class="bi bi-circle"></i><span>B. Tim Penyusun Dan Tanggungjawabnya</span></a></li>
        <li><a href="#"><i class="bi bi-circle"></i><span>C. Mekanisme Kerja Penyusunan LED</span></a></li>
      </ul>
    </li>
    <!-- End ====================================== -->

    <li class="nav-heading">Criteria</li>

    <?php
    $criterias = [
      1=>'VMTS',
      2=>'TTK',
      3=>'MHS',
      4=>'SDM',
      5=>'KESAR',
      6=>'PENDIDIKAN',
      7=>'PENELITIAN',
      8=>'PKM',
      9=>'LUARAN'
    ];

    foreach ($criterias as $key => $criteria) {

      $persen_rand = rand(5,100);
      $green_color = intval($persen_rand/100*155);
      $red_color = intval((100-$persen_rand)/100*255);
      $rgb = "rgb($red_color,$green_color,50)";
      
      echo "
        <li class='nav-item'>
          <a class='nav-link collapsed' data-bs-target='#c$key-nav' data-bs-toggle='collapse' href='#'>
            <i class='bi bi-menu-button-wide'></i><span style='color:$rgb'>C$key $criteria ~ $persen_rand%</span><i class='bi bi-chevron-down ms-auto'></i>
          </a>
          <ul id='c$key-nav' class='nav-content collapse ' data-bs-parent='#sidebar-nav'>
            <li><a href='#'><i class='bi bi-circle'></i><span>A. ...</span></a></li>
            <li><a href='#'><i class='bi bi-circle'></i><span>B. ...</span></a></li>
            <li><a href='#'><i class='bi bi-circle'></i><span>C. ...</span></a></li>
          </ul>
        </li>
      ";
    }
    ?>

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-person"></i>
        <span>Manage Users</span>
      </a>
    </li><!-- End Profile Page Nav -->

  </ul>

</aside>
