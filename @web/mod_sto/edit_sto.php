 <?php 
   $id=$_GET['id']; 
   $sql=mysqli_query($koneksi,"SELECT b.namawitel,a.* FROM sto a left join witel b on a.idwitel=b.idwitel where a.nourut ='$id'");
    $data=mysqli_fetch_assoc($sql)?>
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
                <h1 class="h4 text-gray-900 mb-4">EDIT DATA STO</h1>
              </div>
              <form class="user" action="mod_sto/aksi_edit_sto.php" method="POST">
                <input type="hidden" name="nourut" class="form-control form-control-user" placeholder="Id Sto" value="<?php echo $id?>">
                 <div class="form-group">
                    <input type="text" name="idsto" class="form-control form-control-user" placeholder="Id Sto" value="<?php echo $data[idsto]?>">
                  </div>
                   <div class="form-group">
                    <input type="text" name="namasto" class="form-control form-control-user" placeholder="Id Sto" value="<?php echo $data[namasto]?>">
                  </div>
                  <div class="form-group">
                    <select name="idwitel" class="form-control">
                     <!--  Pengabilan data dari witel -->
                     <?php  
                      $sqlx=mysqli_query($koneksi,"SELECT * FROM witel");
                         while($datax=mysqli_fetch_assoc($sqlx)){
                     ?>
                      <option  <?php $selected = ($datax['idwitel']==$data['idwitel']) ? 'selected' : ''; echo $selected;?> value="<?php echo $datax[idwitel] ?>"><?php echo $datax['namawitel']?></option>
                      <?php 
                      }
                      ?>
                    </select>
                  </div>
                   <div class="form-group">
                    <textarea name="lokasi"  class="form-control form-control-user" placeholder="lokasi"><?php echo $data['lokasi']?></textarea>
                  </div>
                  <div class="form-group">
                 <input name="Longitude" tyepe="text" class="form-control form-control-user" placeholder="Longitude" value="<?php echo $data[longitude]?>">
                </div>
                <div class="form-group">
                  <input name="Latitude" tyepe="text" class="form-control form-control-user" placeholder="Latitude" value="<?php echo $data[latitude]?>">
                </div>
               <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan">
                <a class="btn btn-danger btn-user btn-block" href="?modul=sto"> kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>