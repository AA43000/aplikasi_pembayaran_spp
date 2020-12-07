<table class="table table-striped">
				<thead class="bg-dark" style="color: #fff;">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Id pembayaran</th>
						<th scope="col">Id petugas</th>
						<th scope="col">NISN</th>
						<th scope="col">tgl</th>
						<th scope="col">bulan</th>
						<th scope="col">tahun</th>
						<th scope="col">id spp</th>
						<th scope="col">jumlah bayar</th>
						<?php if(@$_SESSION['admin']) { ?><th>Aksi</th> <?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$count = 0;
					$cari = @$_GET['cari'];
					$row = show("pembayaran", "nisn = '$cari'");
					if ($row == false) {
                        ?>
                        <tr>
                            <td colspan="9" align="center">data kosong</td>
                        </tr>
                        <?php
                    } else {
					foreach($row as $data) {
					$count++;
					?>
					<tr>
						<th><?php echo $count; ?></th>
						<td><?php echo $data['id_pembayaran']; ?></td>
						<td><?php echo $data['id_petugas']; ?></td>
						<td><?php echo $data['nisn']; ?></td>
						<td><?php echo $data['tgl_bayar']; ?></td>
						<td><?php echo $data['bulan_bayar']; ?></td>
						<td><?php echo $data['tahun_bayar']; ?></td>
						<td><?php echo $data['id_spp']; ?></td>
						<td>Rp <?php echo $data['jumlah_bayar']; ?></td>
						<?php if(@$_SESSION['admin']) { ?>
						<td>
							<a class="badge badge-success" href="?page=edit_pembayaran&id_pembayaran=<?php echo $data['id_pembayaran']; ?>">Edit</a>
							<a onclick="return confirm('Yakin ingin menghapus data ini??');" class="badge badge-danger" href="?page=hapus_pembayaran&id_pembayaran=<?php echo $data['id_pembayaran']; ?>">Hapus</a>
						</td>
						<?php } ?>
					</tr>
					<?php } } ?>
				</tbody>
			</table>