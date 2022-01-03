<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Lengkap</th>
			<th>Penyakit</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		if ($this->session->userdata('level') == 'admin') {
			$sql = $this->db->query("select * from history order by id_history desc");
		} elseif ($this->session->userdata('level') == 'user') {
			$nama = $this->session->userdata('nama');
			$sql = $this->db->query("select * from history where nama='$nama'");
		}

		foreach ($sql->result() as $row) {
		 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->penyakit; ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>