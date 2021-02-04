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
                <h1 class="h4 text-gray-900 mb-4">DETAIL DATA STO</h1>
              </div>
              <form class="user" action="mod_sto/aksi_add_sto.php" method="POST">
                 <div class="form-group">
                    <input type="text" name="idsto" class="form-control form-control-user" placeholder="Id Sto" value="<?php echo $data[idsto]?>">
                  </div>
                   <div class="form-group">
                    <input type="text" name="witel" class="form-control form-control-user" placeholder="Id Sto" value="<?php echo $data['namawitel']?>">
                  </div>
                   <div class="form-group">
                    <input name="namasto" tyepe="text" class="form-control form-control-user" placeholder="Nama Sto" value="<?php echo $data[namasto]?>">
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
                <button href="?modul=sto" class="btn btn-danger btn-user btn-block"> Kembali</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>