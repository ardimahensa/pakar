<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Kd Vargejala <?php echo form_error('kd_vargejala') ?></label>
            <input type="text" class="form-control" name="kd_vargejala" id="kd_vargejala" placeholder="G1.1" value="<?php echo $kd_vargejala; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Vargejala <?php echo form_error('vargejala') ?></label>
            <input type="text" class="form-control" name="vargejala" id="vargejala" placeholder="Vargejala" value="<?php echo $vargejala; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Kd Gejala <?php echo form_error('kd_gejala') ?></label>
            <!-- <input type="text" class="form-control" name="kd_gejala" id="kd_gejala" placeholder="Kd Gejala" value="<?php echo $kd_gejala; ?>" /> -->
            <select name="kd_gejala" class="form-control">
                <option value="">--Pilih Gejala--</option>
                <?php 
                $sql = $this->db->query("SELECT * from gejala ORDER BY id_gejala ASC");
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->kd_gejala; ?>"><?php echo $row->kd_gejala; ?></option>
                <?php } ?>
            </select>
        </div>
        <input type="hidden" name="id_vargejala" value="<?php echo $id_vargejala; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('vargejala') ?>" class="btn btn-default">Cancel</a>
    </form>