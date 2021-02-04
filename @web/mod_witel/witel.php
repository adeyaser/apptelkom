            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">Data Witel</h6>
              <hr>
               <a href="?modul=add_witel" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"></i> Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Id Witel</th>
                      <th>Nama Witel</th>
                      <th>Alamat Witel</th>
                      <th>Latitude</th>
                      <th>Longitude</th>
                      <th style="width:150px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php 
                   $no=1;
                   $result_=mysqli_query($koneksi,"SELECT * FROM witel");
                     while($data=mysqli_fetch_assoc($result_)){
                ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$data['idwitel']?></td>
                      <td><?=$data['namawitel']?></td>
                      <td><?=$data['alamatwitel']?></td>
                      <td><?=$data['latitude']?></td>
                      <td><?=$data['longitude']?></td>
                      <td>
                        <a href="?modul=detail_witel&id=<?php echo $data[idwitel]?>" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-th-large"></i>
                        <a href="?modul=edit_witel&id=<?php echo $data[idwitel]?>" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-edit"></i>
                      <a href="?modul=hapus_witel&id=<?php echo $data[idwitel]?>" class="btn btn-danger btn-circle btn-sm">
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