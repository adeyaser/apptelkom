  <?php 
      $id=$_GET['id'];
      $result=mysqli_query($koneksi,"SELECT * FROM users where nik='$id'");
      $data=mysqli_fetch_array($result);
  ?>

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
                <h1 class="h4 text-gray-900 mb-4">DETAIL USER / PEKERJA</h1>
              </div>
              <form class="user" action="aksi_edit_users.php" method="POST">
                 <div class="form-group">
                  <input type="text" name="nik" class="form-control form-control-user" placeholder="Nik" value="<?=$data[nik]?>" readonly>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nama" class="form-control form-control-user" placeholder="Name" value="<?=$data[nama]?>" >
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="username" class="form-control form-control-user" placeholder="Username" value="<?=$data[username]?>" >
                  </div>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" placeholder="password" value="<?=$data[password]?>">
                </div>
                 <div class="form-group">
                   <select name="role" class="form-control">
                      <option  <?php $selected = ($data['role']=='admin') ? 'selected' : ''; echo $selected;?> value="unasigned">admin</option>
                          <option  <?php $selected = ($data['role']=='manager') ? 'selected' : ''; echo $selected;?> value="onprogress">Manager</option>
                          <option  <?php $selected = ($data['role']=='pegawai') ? 'selected' : ''; echo $selected; ?> value="close">Pegawai</option>
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