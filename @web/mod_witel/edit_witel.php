 <?php 
      $id=$_GET['id'];
      $sql=mysqli_query($koneksi,"SELECT * FROM witel WHERE idwitel='$id'");
      $data=mysqli_fetch_assoc($sql);
    // var_dump($data);
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
                <h1 class="h4 text-gray-900 mb-4">EDIT DATA WITEL</h1>
              </div>
              <form class="user" action="mod_witel/aksi_edit_witel.php" method="POST">
                <input type="hidden" name="id" class="form-control form-control-user" placeholder="Id witel" value="<?=$data['idwitel']?>">
                 <div class="form-group">
                    <input type="text" name="namawitel" class="form-control form-control-user" placeholder="Nama witel" value="<?=$data['namawitel']?>">
                  </div>
                   <div class="form-group">
                    <textarea name="alamatwitel"  class="form-control form-control-user" placeholder="Alamat witel"><?=$data['alamatwitel']?></textarea>
                  </div>

                  <div class="form-group">
                 <input type="text" name="latitude" class="form-control form-control-user" placeholder="longitude" value="<?=$data['latitude']?>">
                </div>
            
                <div class="form-group">
                 <input type="text" name="longitude" class="form-control form-control-user" placeholder="longitude" value="<?=$data['longitude']?>">
                </div>
                <input type="submit" class="btn btn-danger btn-user btn-block" value="Simpan">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>