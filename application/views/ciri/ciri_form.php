<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Kd Ciri <?php echo form_error('kd_ciri') ?></label>
            <input type="text" class="form-control" name="kd_ciri" id="kd_ciri" placeholder="C1" value="<?php echo $kd_ciri; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Ciri Ciri <?php echo form_error('ciri_ciri') ?></label>
            <input type="text" class="form-control" name="ciri_ciri" id="ciri_ciri" placeholder="Ciri Ciri" value="<?php echo $ciri_ciri; ?>" />
        </div>
        <input type="hidden" name="id_ciri" value="<?php echo $id_ciri; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('ciri') ?>" class="btn btn-default">Cancel</a>
    </form>