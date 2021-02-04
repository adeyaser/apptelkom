            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">Data Users </h6>
              <hr>
               <a href="?modul=add_users" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"></i> Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nik</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Role</th>
                      <th style="width:100px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php 
                   $no=1;
                   $result_=mysqli_query($koneksi,"SELECT * FROM users");
                     while($data=mysqli_fetch_assoc($result_)){
                ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$data['nik']?></td>
                      <td><?=$data['username']?></td>
                      <td><?=$data['password']?></td>
                      <td><?=$data['role']?></td>
                      <td>
                      <a href="?modul=detail_users&id=<?php echo $data[nik]?>" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-th-large"></i>
                        <a href="?modul=edit_users&id=<?php echo $data[nik]?>" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-edit"></i>
                      <a href="?modul=hapus_users&id=<?php echo $data[nik]?>" class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
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