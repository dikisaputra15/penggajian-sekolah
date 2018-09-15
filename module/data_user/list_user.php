 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data User</div>
        <div class="card-body">
		 <div class="table-responsive">
            <table class="table table-bordered" id="datatables" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Opsi</th>
                </tr>
              </tfoot>
              <tbody>
               <?php
				$no=1;
				$sql=mysql_query("select * from tb_user") or die(mysql_error());		
				while($data=mysql_fetch_array($sql)){
				?>
		
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $data['nama_lengkap']; ?></td>
					<td><?php echo $data['username']; ?></td>
					<td><?php echo $data['password']; ?></td>
					<td><?php echo $data['level']; ?></td>
					<td align="center">
						<a href="?page=user&action=edit&kd_user=<?php echo $data['kd_user']; ?>" class="btn btn-success btn-xs">Edit</a>
						<a onclick="return confirm('yakin ingin menghapus data ?')" href="?page=user&action=hapus&kd_user=<?php echo $data['kd_user']; ?>" class="btn btn-success btn-xs">Hapus</a>
					</td>
				</tr>
		
		<?php
			}
		?>
              </tbody>
            </table>
			<a href="?page=user&action=tambah_user" class="btn btn-primary btn-md">Tambah Data User</a>
          </div>
        </div>
      </div>
	  