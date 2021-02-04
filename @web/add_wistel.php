  <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
            <img src='img/Telkom.png' width='100%'>
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">TAMBAH DATA WISTEL</h1>
              </div>
              <form class="user" action="aksi_add_wistel.php" method="POST">
                 <div class="form-group">
                    <input type="text" name="namawistel" class="form-control form-control-user" placeholder="Nama Wistel">
                  </div>
                   <div class="form-group">
                    <textarea name="alamatwistel"  class="form-control form-control-user" placeholder="Alamat Wistel"></textarea>
                  </div>
                  <div class="form-group">
                 <div id="result">
                </div>
                <div class="form-group">
                  <p id="longitude"></p>
                </div>
                <input type="submit" class="btn btn-danger btn-user btn-block" value="Simpan">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>