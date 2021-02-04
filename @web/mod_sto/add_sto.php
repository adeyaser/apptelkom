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
                <h1 class="h4 text-gray-900 mb-4">TAMBAH DATA STO</h1>
              </div>
              <form class="user" action="mod_sto/aksi_add_sto.php" method="POST">
                 <div class="form-group">
                    <input type="text" name="idsto" class="form-control form-control-user" placeholder="Id Sto">
                  </div>
                   <div class="form-group">
                    <select name="idwitel" class="form-control">
                     <!--  Pengabilan data dari witel -->
                     <?php  
                      $sql=mysqli_query($koneksi,"SELECT * FROM witel");
                      echo "<option> Pilih witel </option>";
                         while($data=mysqli_fetch_assoc($sql)){
                     ?>
                      <option value="<?php echo $data[idwitel]?>"><?php echo $data['namawitel']?></option>
                      <?php 
                      }
                      ?>
                    </select>
                  </div>
                   <div class="form-group">
                    <input name="namasto" tyepe="text" class="form-control form-control-user" placeholder="Nama Sto">
                  </div>
                   <div class="form-group">
                    <textarea name="lokasi"  class="form-control form-control-user" placeholder="lokasi"></textarea>
                  </div>
                  <div class="form-group">
                 <div id="result">
                </div>
                <div class="form-group">
                  <p id="longitude"></p>
                </div>
               <input type="submit" class="btn btn-danger btn-user btn-block" value="Simpan">
                <a class="btn btn-warning btn-user btn-block" href="?modul=sto"> kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>