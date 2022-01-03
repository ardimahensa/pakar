<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Gejala <?php echo form_error('gejala') ?></label>
            <input type="text" class="form-control" name="gejala" id="gejala" placeholder="Gejala" value="<?php echo $gejala; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Kd Gejala <?php echo form_error('kd_gejala') ?></label>
            <input type="text" class="form-control" name="kd_gejala" id="kd_gejala" placeholder="G1" value="<?php echo $kd_gejala; ?>" />
        </div>
        <input type="hidden" name="id_gejala" value="<?php echo $id_gejala; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('gejala') ?>" class="btn btn-default">Cancel</a>
    </form>