        <?php
          $lokasi_k=mysqli_query($koneksi,"SELECT COUNT(*) jumlah_pekerja from users where role not in('admin','manager')");
          $count_k=mysqli_fetch_assoc($lokasi_k);

          $lokasi_=mysqli_query($koneksi,"SELECT DISTINCT COUNT(LOKASI) jumlah_pekerjaan from sto");
          $count_=mysqli_fetch_assoc($lokasi_);

          $lokasi__=mysqli_query($koneksi,"SELECT COUNT(*) jumlah_pekerjaan from project");
          $count__=mysqli_fetch_assoc($lokasi__);

          //print_r($count__['jumlah_pekerjaan']);die();
          $persentase=($count__['jumlah_pekerjaan'] / $count_['jumlah_pekerjaan'] ) * 100;
        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Lokasi Project</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$count_['jumlah_pekerjaan']?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-home fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Project</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$count__['jumlah_pekerjaan']?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pekerja</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$count_k['jumlah_pekerja']?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-9">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-danger">LOKASI PROJECT</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <iframe src="mod_peta/peta.php" align="center" width="100%" height="500px" frameborder="yes" scrolling="yes" ></iframe>
                  </div>
                </div>
              </div>
            </div>
              
          