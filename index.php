<?php

require_once ("connection.php");

require_once ("session_check.php");


if ($sessionStatus == false) {
    header("Location: pages-login.php");
}
require('komponen/level.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | <?php echo $level ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pgasb.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/pgasb.png" alt="">
        <span class="d-none d-lg-block">PG Asembagus</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" >
            <span class="d-none d-md-block  ps-2">Dashboard | <?php echo $level?> </span>
          </a><!-- End Profile Iamge Icon --><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require('komponen/sidebar.php'); ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<?php if($level=='Admin'){ ?>
        <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-16">

          <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales">

                <div class="card-body">
                  <h5 class="card-title">Karyawan Kontrak</h5>
                   
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No.Pers</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tenggat Waktu</th>

                        <?php if($level=="Admin") : ?>
                        <th scope="col" style="min: width 80px;">Aksi</th>
                        <?php endif; ?>

                      </tr>
                    </thead>

                    <tbody>
                      <?php

                      $query = "SELECT * FROM daftar_karyawan_kontrak";
                      $result = mysqli_query($mysqli, $query);
                      
                      #foreach
                      $i=1;
                      foreach($result as $editkaryawan) {
                        ?>
                        <tr>
                          <td><?php echo $i++?></td>
                          <td><?php echo $editkaryawan['No_Pers'] ?></td>
                          <td><?php echo $editkaryawan['Nama'] ?></td>
                          <td><?php echo $editkaryawan['Posisi'] ?></td>
                          <td><?php echo $editkaryawan['Alamat'] ?></td>
                          <td><?php echo $editkaryawan['tenggat_waktu'] ?></td>
                          <td><?php echo $editkaryawan['Aksi'] ?></td>
                          <?php if($level=="Admin") :?>
                          <td>
                            <!--modal edit-->
                            <?php require('komponen/modal-edit.php'); ?>
                            <!--end modal edit-->
                            &nbsp | $nbsp
                            <a class="card-text text-decoration-none text-danger fs-6" href="#">delete</a>
                          </td>
                          <?php endif; ?>
                        </tr>
                      <?php }  ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- End Recent Sales -->
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
      </div>
    </section>
    
    <?php }elseif($level=='Karyawan'){ 

      $query = "SELECT * FROM data_diri_karyawan WHERE NIK = '$sessionNIK'";
      $result = mysqli_query($mysqli,$query);
      $dataK = mysqli_fetch_assoc($result);
    
    ?>  

      <section class="section profile">
      <div class="row">
        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profil</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Kontrak Kerja</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8"><?php echo $dataK['Nama']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8"><?php echo $dataK['Alamat']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8"><?php echo $dataK['Jenis_kelamin']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                    <div class="col-lg-9 col-md-8"><?php echo $dataK['tmp_lahir']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                    <div class="col-lg-9 col-md-8"><?php echo $dataK['tgl_lahir']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No. HP</div>
                    <div class="col-lg-9 col-md-8"><?php echo $dataK['no_hp']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Scan KTP</div>
                    <div class="col-lg-9 col-md-8"><img style="max-width: 350px;" src="<?php echo $dataK['scan_KTP'] ?>" alt="..."></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="action_edit.php" method="POST" enctype="multipart/form-data">
                    
                    <input name="id" type="text" class="form-control" id="id" value="<?php echo $dataK['id']; ?>" hidden>
                    <input name="NIK" type="text" class="form-control" id="NIK" value="<?php echo $dataK['NIK']; ?>" hidden>
                    <div class="row mb-3">
                      <label for="Nama" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Nama" type="text" class="form-control" id="Nama" value="<?php echo $dataK['Nama']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="Alamat" class="form-control" id="Alamat" style="height: 100px"><?php echo $dataK['Alamat']; ?></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Jenis_kelamin" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                      <div class="col-md-8 col-lg-9">
                        <?php

                        $Lcek="";
                        $Pcek="";
                        
                        if($dataK['Jenis_kelamin']=='Laki-laki') {
                          $Lcek="checked";
                        }
                        else if($dataK['Jenis_kelamin']=='Perempuan') {
                          $Pcek="checked";
                        }
                        ?>

                        <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo $Lcek ?>> Laki-laki<br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo $Pcek ?>> Perempuan<br></div>
                    </div>

                    <div class="row mb-3">
                      <label for="tmp_lahir" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="tmp_lahir" type="text" class="form-control" id="tmp_lahir" value="<?php echo $dataK['tmp_lahir']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="tgl_lahir" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir" value="<?php echo $dataK['tgl_lahir']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="no_hp" class="col-md-4 col-lg-3 col-form-label">No. HP</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="no_hp" type="text" class="form-control" id="no_hp" value="<?php echo $dataK['no_hp']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="gambar" class="col-md-4 col-lg-3 col-form-label">Scan KTP</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="file" name="gambar" class="form-control" id="scan_KTP" required >
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>
                  
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Download</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <?php } ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>