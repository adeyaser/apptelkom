            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">Data Project</h6>
              <hr>
               <a href="?modul=add_project" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"></i> Tambah Data</a>
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
                      <th style="width:150px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php 
                   $no=1;
                   $statusgolive="";
                   $result_=mysqli_query($koneksi,"SELECT ST.IDSTO,ST.NAMASTO,ST.LOKASI,WS.NAMAWITEL,WS.ALAMATWITEL,PR.* FROM PROJECT PR LEFT JOIN STO ST ON ST.NOURUT = PR.NOURUTSTO LEFT JOIN WITEL WS ON WS.IDWITEL =PR.IDWITEL");
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
                      <td>
                        <a href="?modul=detail_project&id=<?php echo $data[pid]?>" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-th-large"></i>
                        <a href="?modul=edit_project&id=<?php echo $data[pid]?>" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-edit"></i>
                      <a href="?modul=hapus_project&id=<?php echo $data[pid]?>" class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                      </a>
                       </form>
                      </a>
                      </td>
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