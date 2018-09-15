 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Guru</div>
        <div class="card-body">
		 <div class="table-responsive">
            <table class="table table-bordered" id="datatables" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Guru</th>
                  <th>Jabatan</th>
                  <th>Status</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Guru</th>
                  <th>Jabatan</th>
                  <th>Status</th>
                  <th>Opsi</th>
                </tr>
              </tfoot>
              <tbody>
               <?php
				$no=1;
				$sql=mysql_query("select * from tb_guru") or die(mysql_error());		
				while($data=mysql_fetch_array($sql)){
				?>
		
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $data['nama_guru']; ?></td>
					<td><?php echo $data['jabatan']; ?></td>
					<td><?php echo $data['status']; ?></td>
					<td align="center">
						<a href="?page=data_guru&action=edit&kd_guru=<?php echo $data['kd_guru']; ?>" class="btn btn-success btn-xs">Edit</a>
						<a onclick="return confirm('yakin ingin menghapus data ?')" href="?page=data_guru&action=hapus&kd_guru=<?php echo $data['kd_guru']; ?>" class="btn btn-success btn-xs">Hapus</a>
					</td>
				</tr>
		
		<?php
			}
		?>
              </tbody>
            </table>
			<a href="?page=data_guru&action=tambah_guru" class="btn btn-primary btn-md">Tambah Data Guru</a>
          </div>
        </div>
      </div>
	  