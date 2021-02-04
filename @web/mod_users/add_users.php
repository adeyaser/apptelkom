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
                <h1 class="h4 text-gray-900 mb-4">TAMBAH USER / PEKERJA</h1>
              </div>
              <form class="user" action="aksi_add_users.php" method="POST">
                 <div class="form-group">
                  <input type="text" name="nik" class="form-control form-control-user" placeholder="Nik">
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-user" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" placeholder="password">
                </div>
                <div class="form-group">
                   <select name="role" class="form-control">
                     <option>Pilih Role</option>
                     <option>admin</option>
                     <option>manager</option>
                     <option>pegawai</option>
                   </select>
                  </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan">
                <a class="btn btn-danger btn-user btn-block" href="?modul=users"> kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>