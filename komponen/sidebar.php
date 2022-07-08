<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-heading">Layanan</li>
      
      <?php
      if($level=='Admin'){ ?> 
      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Daftar Karyawan Kontrak</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " href="daftar-profil.php">
          <i class="bi bi-journal-text"></i></i>
          <span>Daftar Profil Karyawan </span>
        </a>
      </li><!-- End Dashboard Nav -->

      <?php }elseif ($level=='Karyawan') {

        ?>  
        <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-person"></i>
          <span>Profil Karyawan</span>
        </a>
      </li><!-- End Profile Page Nav --> 
      <?php
      }
      ?>
      


      <li class="nav-heading">Pages</li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside>