<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Kd Varciri <?php echo form_error('kd_varciri') ?></label>
            <input type="text" class="form-control" name="kd_varciri" id="kd_varciri" placeholder="C1.1" value="<?php echo $kd_varciri; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Varciri <?php echo form_error('varciri') ?></label>
            <input type="text" class="form-control" name="varciri" id="varciri" placeholder="Varciri" value="<?php echo $varciri; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Kd Ciri <?php echo form_error('kd_ciri') ?></label>
            <!-- <input type="text" class="form-control" name="kd_ciri" id="kd_ciri" placeholder="Kd Ciri" value="<?php echo $kd_ciri; ?>" /> -->
            <select name="kd_ciri" class="form-control">
                <option value="">--Pilih Varciri--</option>
                <?php 
                $sql = $this->db->query("SELECT * from ciri ORDER BY id_ciri ASC");
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->kd_ciri; ?>"><?php echo $row->kd_ciri; ?></option>
                <?php } ?>
            </select>
        </div>
        <input type="hidden" name="id_varciri" value="<?php echo $id_varciri; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('varciri') ?>" class="btn btn-default">Cancel</a>
    </form>