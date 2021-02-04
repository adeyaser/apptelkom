 <?php 
   $id=$_GET['id']; 
   $sql=mysqli_query($koneksi,"SELECT ST.IDSTO,ST.NAMASTO,ST.LOKASI,WS.NAMAWITEL,WS.ALAMATWITEL,PR.* FROM PROJECT PR LEFT JOIN STO ST ON ST.NOURUT = PR.NOURUTSTO LEFT JOIN WITEL WS ON WS.IDWITEL =PR.IDWITEL WHERE pid='$id'");
    $data=mysqli_fetch_assoc($sql);
    if($data['tanggalgolive'] != null){ $statusgolive="OK";}
    ?>

   <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <br>
        <div class="text-center">
          <h1 class="h4 text-gray-900 mb-4">DETAIL PROJECT</h1>
        </div>
      <form class="user" action="" method="POST">
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
              <div class="form-group">
                <input type="text" name="pid" class="form-control form-control-user" placeholder="Id Sto" value="<?php echo $data[pid]?>">
                  </div>

                   <div class="form-group">
                    <input type="text" name="stf" class="form-control form-control-user" placeholder="Id Sto" value="<?php echo $data[stf]?>">
                  </div>

                   <div class="form-group">
                    <input name="namasto" type="text" class="form-control form-control-user" placeholder="idWITEL" value="<?php echo $data[idWITEL]?>">
                  </div>

                  <div class="form-group">
                 <input name="namaWITEL" type="text" class="form-control form-control-user" placeholder="namaWITEL" value="<?php echo $data[NAMAWITEL]?>">
                </div>

                   <div class="form-group">
                    <textarea name="alamatWITEL"  class="form-control form-control-user" placeholder="alamatWITEL"><?php echo $data['ALAMATWITEL']?></textarea>
                  </div>



                <div class="form-group">
                  <input name="isto" type="text" class="form-control form-control-user" placeholder="idsto" value="<?php echo $data[IDSTO]?>">
                </div>

                <div class="form-group">
                  <input name="namasto" type="text" class="form-control form-control-user" placeholder="namasto" value="<?php echo $data[NAMASTO]?>">
                </div>

                <div class="form-group">
                 <input name="statusgolive" type="text" class="form-control form-control-user" placeholder="statusgolive" value="<?php echo $data[statusgolive]?>">
                </div>

                <div class="form-group">
                  <input name="statusfisik" type="text" class="form-control form-control-user" placeholder="statusfisik" value="<?php echo $data[statusfisik]?>">
                </div>

                <div class="form-group">
                  <input name="port" type="text" class="form-control form-control-user" placeholder="port" value="<?php echo $data[port]?>">
                </div>

          </div>
          <div class="col-lg-7">
            
                 <div class="form-group">
                    <input type="text" name="jumlahport" class="form-control form-control-user" placeholder="jumlahport" value="<?php echo $data[jumlahport]?>">
                  </div>

                   <div class="form-group">
                    <input type="text" name="tanggalcomite" class="form-control form-control-user" placeholder="Id Sto" value="<?php echo $data[tanggalcomite]?>">
                  </div>

                   <div class="form-group">
                    <input name="tanggalut" type="text" class="form-control form-control-user" placeholder="Tanggal UT" value="<?php echo $data[tanggalut]?>">
                  </div>

                   <div class="form-group">
                    <textarea name="lokasi"  class="form-control form-control-user" placeholder="lokasi"><?php echo $data['LOKASI']?></textarea>
                  </div>

                  <div class="form-group">
                 <input name="Longitude" type="text" class="form-control form-control-user" placeholder="Longitude" value="<?php echo $statusgolive?>">
                </div>

                <div class="form-group">
                  <input name="tanggalgolive" type="text" class="form-control form-control-user" placeholder="tanggalgolive" value="<?php echo $data[tanggalgolive]?>">
                </div>

                <div class="form-group">
                  <input name="ideswawal" type="text" class="form-control form-control-user" placeholder="ideswawal" value="<?php echo $data[ideswawal]?>">
                </div>

                  <div class="form-group">
                 <input name="ideswakhir" type="text" class="form-control form-control-user" placeholder="ideswakhir" value="<?php echo $data[ideswakhir]?>">
                </div>

                <div class="form-group">
                  <input name="nik" type="text" class="form-control form-control-user" placeholder="nik" value="<?php echo $data[nik]?>">
              </div>
              <br>
              <hr>
                <a href="?modul=project" class="btn btn-danger btn-user btn-block"> Kembali</a>
                <br>
            </div>
        </div>
      </div>
    </div>

  </div>