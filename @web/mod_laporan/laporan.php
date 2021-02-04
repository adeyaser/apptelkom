            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">Laporan Data Project</h6>
              <hr>
              <form action="" method="GET" accept-charset="utf-8">
                    <div class="form-group">
                    <input type="hidden" name="modul" value="laporan">
                    <select name="tanggalawal">
                     <?php  
                      $sql=mysqli_query($koneksi,"SELECT distinct tanggalcomite FROM project ORDER BY tanggalcomite ASC");
                      echo "<option> Pilih Tanggal Comites </option>";
                         while($data=mysqli_fetch_assoc($sql)){
                     ?>
                      <option value="<?php echo $data[tanggalcomite]?>"><?php echo $data['tanggalcomite']?></option>
                      <?php 
                      }
                      ?>
                    </select>
                    Sampai
                    <select name="tanggalakhir">
                     <!--  Pengabilan data dari witel -->
                     <?php  
                      $sql=mysqli_query($koneksi,"SELECT distinct tanggalcomite FROM project ORDER BY tanggalcomite ASC");
                      echo "<option> Pilih Tanggal Comites </option>";
                         while($data=mysqli_fetch_assoc($sql)){
                     ?>
                      <option value="<?php echo $data[tanggalcomite]?>" ><?php echo $data['tanggalcomite']?></option>
                      <?php 
                      }
                      ?>
                    </select>
                    <input type="submit" name="submit" value="kirim" class="btn btn-danger btn-sm">
                  </form>
              </div>
              <?php if(isset($_GET['tanggalawal'])){
              $WHERE='';
              if($_GET['tanggalawal'] !=null){
                $tanggalawal=$_GET['tanggalawal'];
                $tanggalakhir=$_GET['tanggalakhir'];
                $WHERE .=" WHERE PR.TANGGALCOMITE between '$tanggalawal' AND '$tanggalakhir'";
                echo "<a href='mod_laporan/cetaklaporan.php?where=$WHERE' class='d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm' style='float:right; border=2px''></i> Cetak Laporan </a>";
              }
            }
              ?>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Pid</th>
                      <th>Stf</th>
                      <th>Id Witel</th>
                      <th>Nama Witel</th>
                      <th>Lokasi Witel</th>
                      <th>Id Sto</th>
                      <th>Nama Sto</th>
                      <th>Lokasi Sto</th>
                      <th>Status Go Live Lop</th>
                      <th>Status Fisik</th>
                      <th>Port</th>
                      <th>Jumlah Port</th>
                      <th>Tanggal Comites</th>
                      <th>Tanggal UT</th>
                      <th>Status Golive</th>
                      <th>Tanggal Go Live</th>
                      <th>Ide Sw Awal</th>
                      <th>Ide Sw Akhir</th>
                      <th>Nik</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php 
                   //echo "SELECT ST.IDSTO,ST.NAMASTO,ST.LOKASI,WS.NAMAWITEL,WS.ALAMATWITEL,PR.* FROM PROJECT PR LEFT JOIN STO ST ON ST.NOURUT = PR.NOURUTSTO LEFT JOIN WITEL WS ON WS.IDWITEL =PR.IDWITEL $WHERE "; die();
                   $no=1;
                   $statusgolive="";
                   $result_=mysqli_query($koneksi,"SELECT ST.IDSTO,ST.NAMASTO,ST.LOKASI,WS.NAMAWITEL,WS.ALAMATWITEL,PR.* FROM PROJECT PR LEFT JOIN STO ST ON ST.NOURUT = PR.NOURUTSTO LEFT JOIN WITEL WS ON WS.IDWITEL =PR.IDWITEL $WHERE");
                     while($data=mysqli_fetch_assoc($result_)){
                      if($data['tanggalgolive'] != null){ $statusgolive="OK";}
                ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$data['pid']?></td>
                      <td><?=$data['stf']?></td>
                      <td><?=$data['idwitel']?></td>
                      <td><?=$data['NAMAWITEL']?></td>
                      <td><?=$data['ALAMATWITEL']?></td>
                      <td><?=$data['IDSTO']?></td>
                      <td><?=$data['NAMASTO']?></td>
                      <td><?=$data['LOKASI']?></td>
                      <td><?=$data['statusgolive']?></td>
                      
                      <td><?=$data['statusfisik']?></td>
                      <td><?=$data['port']?></td>
                      <td><?=$data['jumlahport']?></td>
                      <td><?=$data['tanggalcomite']?></td>
                      <td><?=$data['tanggalut']?></td>
                      <td><?=$statusgolive?></td>
                      <td><?=$data['tanggalgolive']?></td>
                      <td><?=$data['ideswawal']?></td>
                      <td><?=$data['ideswakhir']?></td>
                      <td><?=$data['nik']?></td>
                    </tr>
                  <?php }?>  
                  </tbody>
                </table>
                </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>