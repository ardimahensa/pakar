<form class="form-data">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Gejala yang anda alami.</h3>
				</div>
				<div class="panel-body">
				<?php 
				$sql = $this->db->query("SELECT * FROM gejala ORDER BY id_gejala ASC");
				foreach ($sql->result() as $row) {
				 ?>	
					<div class="form-group">
						<label><?php echo $row->gejala; ?></label>
						<select name="<?php echo $row->kd_gejala; ?>" class="form-control">
							<option value="tidak ada">tidak ada</option>
							<?php 
							$kd = $row->kd_gejala;
							$sql1 = $this->db->query("SELECT * FROM vargejala WHERE kd_gejala='$kd'");
							foreach ($sql1->result() as $row1) {
							 ?>
							<option value="<?php echo $row1->kd_vargejala; ?>"><?php echo $row1->vargejala; ?></option>
							<?php } ?>
						</select>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Ciri-ciri yang anda alami.</h3>
				</div>
				<div class="panel-body">
				<?php 
				$sql = $this->db->query("SELECT * FROM ciri ORDER BY id_ciri ASC");
				foreach ($sql->result() as $row) {
				 ?>	
					<div class="form-group">
						<label><?php echo $row->ciri_ciri; ?></label>
						<select name="<?php echo $row->kd_ciri; ?>" class="form-control">
							<option value="tidak ada">tidak ada</option>
							<?php 
							$kd = $row->kd_ciri;
							$sql1 = $this->db->query("SELECT * FROM varciri WHERE kd_ciri='$kd'");
							foreach ($sql1->result() as $row1) {
							 ?>
							<option value="<?php echo $row1->kd_varciri; ?>"><?php echo $row1->varciri; ?></option>
							<?php } ?>
						</select>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<a class="btn btn-primary btn-block" id="kirim">Kirim</a>
		</div>
		<div class="col-md-6">
			<input type="reset" class="btn btn-warning btn-block" value="Batal">
		</div>
	</div>

</form>

<script type="text/javascript">
	$(document).ready(function() {
		$("#kirim").click(function(){
			var data = $('.form-data').serialize();
			$.ajax({
				type: 'POST',
				url: "<?php echo base_url()?>app/cek_penyakit",
				dataType: 'json',
				data: data,
				success: function(json) {
					if (json.status == '1') {
						//swal('Setelah kami Analisa Anda mengalami penyakit Kulit '+json.pesan);
						swal(
						  'Setelah kami Analisa, Anda '+json.pesan+'<br><br> <img src="<?php echo base_url('gambar') ?>/'+json.gambar+'" style="height: 200px; width: 200px;"><br> <h3>Solusi</h3><p>'+json.solusi+'</p> ',
						);
					} else if (json.status == '0') {
						swal(
							  'Data di Admin Gak ada, Jadi Mungkin Bisa Aja Anda Kecanduan Game Online / Bisa juga Tidak <br><br> <img src="<?php echo base_url('gambar/gaada.png') ?>" style="height: 200px; width: 200px;"><br>',
							);
					}
				}
			});
		});
	})
</script>