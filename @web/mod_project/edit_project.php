<?php 
   $id=$_GET['id']; 
   $sql=mysqli_query($koneksi,"SELECT ST.NOURUT,ST.IDSTO,ST.NAMASTO,ST.LOKASI,WS.NAMAWITEL,WS.ALAMATWITEL,PR.* FROM PROJECT PR LEFT JOIN STO ST ON ST.NOURUT = PR.NOURUTSTO LEFT JOIN WITEL WS ON WS.IDWITEL =PR.IDWITEL WHERE pid='$id'");
    $data=mysqli_fetch_assoc($sql);
?>
   <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <br>
        <div class="text-center">
          <h1 class="h4 text-gray-900 mb-4">EDIT PROJECT</h1>
        </div>
      <form class="user" action="mod_project/aksi_edit_project.php" method="POST">
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block">
             <input type="hidden" name="nik" class="form-control form-control-user" placeholder="nik" value="<?php echo $_SESSION[nik]?>">
              <div class="form-group">
                <input type="text" name="pid" class="form-control form-control-user" placeholder="pid" value="<?php echo $data[pid]?>" >
                  </div>

                   <div class="form-group">
                    <input type="text" name="stf" class="form-control form-control-user" placeholder="Id stf" value="<?php echo $data[stf]?>">
                  </div>

                   <div class="form-group">
                    <select name="idwitel" class="form-control">
                     <!--  Pengabilan data dari witel -->
                     <?php  
                      $sql=mysqli_query($koneksi,"SELECT * FROM witel");
                      echo "<option> Pilih Witel </option>";
                         while($datax=mysqli_fetch_assoc($sql)){
                     ?>
                     <option  <?php $selected = ($datax['idwitel']==$data['idwitel']) ? 'selected' : ''; echo $selected;?> value="<?php echo $datax[idwitel] ?>"><?php echo $datax['namawitel']?></option>
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
                         while($datay=mysqli_fetch_assoc($sql)){
                     ?>
                     <option  <?php $selected = ($datay['nourut']==$data['NOURUT']) ? 'selected' : ''; echo $selected;?> value="<?php echo $datay[nourut] ?>"><?php echo $datay['idsto']?>-<?php echo $datay['namasto']?></option>
                      <?php 
                      }
                      ?>
                    </select>
                </div>

             <div class="form-group">
              <select name="statusgolivelop" class="form-control">
                <option value="">Pilih Status Golive Loop</optio>
                  <option  <?php $selected = ($data['statusgolive']=="drop") ? 'selected' : ''; echo $selected;?> value="drop"> Drop</option>
                  <option  <?php $selected = ($data['statusgolive']=="ut") ? 'selected' : ''; echo $selected;?> value="ut">Ut</option>
                  <option  <?php $selected = ($data['statusgolive']=="golive") ? 'selected' : ''; echo $selected;?> value="golive">Go Live</option>
                  <option  <?php $selected = ($data['statusgolive']=="selesai") ? 'selected' : ''; echo $selected;?> value="selesai">Selesai</option>
              </select>
            </div>

                <div class="form-group">
                 <select name="ststusfisik" class="form-control">
                   <option value="">Pilih Status Fisik</optio>
                   <option  <?php $selected = ($data['statusfisik']=="drop") ? 'selected' : ''; echo $selected;?> value="drop"> Drop</option>
                  <option  <?php $selected = ($data['statusfisik']=="selesai") ? 'selected' : ''; echo $selected;?> value="selesai">Selesai</option>
                 </select>
                </div>

                <div class="form-group">
                 <select name="port" class="form-control">
                   <option value="">Pilih Port</optio>
                    <option  <?php $selected = ($data['port']=="8") ? 'selected' : ''; echo $selected;?> value="8"> 8</option>
                    <option  <?php $selected = ($data['port']=="16") ? 'selected' : ''; echo $selected;?> value="16"> 16</option>
                 </select>
                </div>
               <div class="form-group">
                 <input type="number" name="jumlahport" class="form-control form-control-user" placeholder="jumlahport" value="<?php echo $data['jumlahport']?>">
              </div>   
               <a href="?modul=project" class="btn btn-warning btn-user btn-block">kembali</a>             
          </div>
          <div class="col-lg-6">
  

                   <div class="form-group">
                    <label class="form-control"> Tanggal Comites</label>
                    <input type="date" name="tanggalcomite" class="form-control form-control-user" placeholder="tanggalcomite" value="<?php echo $data['tanggalcomite'] ?>">
                  </div>

                   <div class="form-group">
                    <label class="form-control"> Tanggal UT</label>
                    <input name="tanggalut" type="date" class="form-control form-control-user" placeholder="Tanggal UT" value="<?php echo $data['tanggalut'] ?>">
                  </div>

                   <div class="form-group">
                      <label class="form-control"> Tanggal Golive</label>
                    <input name="tanggalgolive" type="date" class="form-control form-control-user" placeholder="tanggalgolive" value="<?php echo $data['tanggalgolive'] ?>">
                  </div>

                  <div class="form-group">
                 <input name="ideswawal" type="text" class="form-control form-control-user" placeholder="ideswawal" value="<?php echo $data['ideswawal'] ?>">
                 </div>
                    <div class="form-group">
                 <input name="ideswakhir" type="text" class="form-control form-control-user" placeholder="ideswakhir" value="<?php echo $data['ideswakhir'] ?>">
                 </div>

                <button type="submit" class="btn btn-danger btn-user btn-block">Simpan</button>
               
                <br>
            </div>
        </div>
      </div>
    </div>

  </div>