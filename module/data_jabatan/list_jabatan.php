 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Mata Pelajaran</div>
        <div class="card-body">
		 <div class="table-responsive">
            <table class="table table-bordered" id="datatables" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Jabatan</th>
                  <th>Gaji Pokok</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>nama_jabatan</th>
                  <th>Gaji Pokok</th>
                  <th>Opsi</th>
                </tr>
              </tfoot>
              <tbody>
               <?php
				$no=1;
				$sql=mysql_query("select * from tb_jabatan") or die(mysql_error());		
				while($data=mysql_fetch_array($sql)){
				?>
		
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $data['nama_jabatan']; ?></td>
					<td><?php echo $data['gaji_pokok']; ?></td>
					<td align="center">
						<a href="?page=jabatan&action=edit&kd_jabatan=<?php echo $data['kd_jabatan']; ?>" class="btn btn-success btn-xs">Edit</a>
						<a onclick="return confirm('yakin ingin menghapus data ?')" href="?page=jabatan&action=hapus&kd_jabatan=<?php echo $data['kd_jabatan']; ?>" class="btn btn-success btn-xs">Hapus</a>
					</td>
				</tr>
		
		<?php
			}
		?>
              </tbody>
            </table>
			<a href="?page=jabatan&action=tambah_jabatan" class="btn btn-primary btn-md">Tambah Data Jabatan</a>
          </div>
        </div>
      </div>
	  