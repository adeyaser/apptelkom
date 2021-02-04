   <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <br>
        <div class="text-center">
          <h1 class="h4 text-gray-900 mb-4">TAMBAH PROJECT</h1>
        </div>
      <form class="user" action="mod_project/aksi_add_project.php" method="POST">
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block">
             <input type="hidden" name="nik" class="form-control form-control-user" placeholder="nik" value="<?php echo $_SESSION[nik]?>">
              <div class="form-group">
                <input type="text" name="pid" class="form-control form-control-user" placeholder="Pid">
                  </div>

                   <div class="form-group">
                    <input type="text" name="stf" class="form-control form-control-user" placeholder="Id stf">
                  </div>

                   <div class="form-group">
                    <select name="idwitel" class="form-control">
                     <!--  Pengabilan data dari witel -->
                     <?php  
                      $sql=mysqli_query($koneksi,"SELECT * FROM witel");
                      echo "<option> Pilih Witel </option>";
                         while($data=mysqli_fetch_assoc($sql)){
                     ?>
                      <option value="<?php echo $data[idwitel]?>"><?php echo $data['namawitel']?></option>
                      <?php 
                      }
                      ?>
                    </select>
                  </div>

                <div class="form-group">
                    <select name="nourutsto" class="form-control">
                     <!--  Pengabilan data dari sto -->
                     <?php  
                      $sql=mysqli_query($koneksi,"SELECT * FROM sto");
                      echo "<option> Pilih sto </option>";
                         while($data=mysqli_fetch_assoc($sql)){
                     ?>
                      <option value="<?php echo $data[nourut]?>"><?php echo $data['idsto']?> - <?php echo $data['namasto']?></option>
                      <?php 
                      }
                      ?>
                    </select>
                </div>

                <div class="form-group">
                 <select name="statusgolivelop" class="form-control">
                   <option value="">Pilih Status Golive Loop</optio>
                   <option value="drop">Drop</optio>
                   <option value="ut">Ut</option>
                   <option value="golive">Go Live</option>
                   <option value="selesai">Selesai</option>
                 </select>
                </div>

                <div class="form-group">
                 <select name="ststusfisik" class="form-control">
                   <option value="">Pilih Status Fisik</optio>
                   <option value="drop">Drop</optio>
                   <option value="selesai">Selesai</option>
                 </select>
                </div>

                <div class="form-group">
                 <select name="port" class="form-control">
                   <option value="">Pilih Port</optio>
                   <option value="8">8</optio>
                   <option value="16">16</option>
                 </select>
                </div>
               <div class="form-group">
                 <input type="number" name="jumlahport" class="form-control form-control-user" placeholder="jumlahport">
              </div>   
               <a href="?modul=project" class="btn btn-warning btn-user btn-block">kembali</a>             
          </div>
          <div class="col-lg-6">
  

                   <div class="form-group">
                    <label class="form-control"> Tanggal Comites</label>
                    <input type="date" name="tanggalcomite" class="form-control form-control-user" placeholder="tanggalcomite">
                  </div>

                   <div class="form-group">
                    <label class="form-control"> Tanggal UT</label>
                    <input name="tanggalut" type="date" class="form-control form-control-user" placeholder="Tanggal UT">
                  </div>

                   <div class="form-group">
                      <label class="form-control"> Tanggal Golive</label>
                    <input name="tanggalgolive" type="date" class="form-control form-control-user" placeholder="tanggalgolive">
                  </div>

                  <div class="form-group">
                 <input name="ideswawal" type="text" class="form-control form-control-user" placeholder="ideswawal">
                 </div>
                    <div class="form-group">
                 <input name="ideswakhir" type="text" class="form-control form-control-user" placeholder="ideswakhir">
                 </div>

                <button type="submit" class="btn btn-danger btn-user btn-block">Simpan</button>
               
                <br>
            </div>
        </div>
      </div>
    </div>

  </div>