<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="varchar">Kd Penyakit <?php echo form_error('kd_penyakit') ?></label>
            <input type="text" class="form-control" name="kd_penyakit" id="kd_penyakit" placeholder="P1" value="<?php echo $kd_penyakit; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Penyakit <?php echo form_error('penyakit') ?></label>
            <input type="text" class="form-control" name="penyakit" id="penyakit" placeholder="Penyakit" value="<?php echo $penyakit; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('penyakit') ?></label>
            <input type="file" class="form-control" name="gambar" id="penyakit" placeholder="Penyakit"  />
        </div>
        <div class="form-group">
            <label for="varchar">Solusi <?php echo form_error('penyakit') ?></label>
            <textarea class="form-control" name="solusi" rows="5"><?php echo $solusi; ?></textarea>
        </div>
        <div class="form-group">
            <label for="varchar">G1 <?php echo form_error('g1') ?></label>
            <!-- <input type="text" class="form-control" name="g1" id="g1" placeholder="G1" value="<?php echo $g1; ?>" /> -->
            <select name="g1" class="form-control">
                <option value="tidak ada">tidak ada</option>
                <?php 
                $sql = $this->db->query("SELECT * FROM vargejala WHERE kd_gejala='g1' ");
                foreach ($sql->result() as $row) {
                    $selected = '';
                    if($row->kd_vargejala == $g1){
                        $selected = 'selected';
                    }
                 ?>
                <option value="<?php echo $row->kd_vargejala; ?>" <?php echo $selected; ?>><?php echo $row->kd_vargejala; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">G2 <?php echo form_error('g2') ?></label>
            <!-- <input type="text" class="form-control" name="g2" id="g2" placeholder="G2" value="<?php echo $g2; ?>" /> -->
            <select name="g2" class="form-control">
                <option value="tidak ada">tidak ada</option>
                <?php 
                $sql = $this->db->query("SELECT * FROM vargejala WHERE kd_gejala='g2' ");
                foreach ($sql->result() as $row) {
                    $selected = '';
                    if($row->kd_vargejala == $g2){
                        $selected = 'selected';
                    }
                 ?>
                <option value="<?php echo $row->kd_vargejala; ?>" <?php echo $selected; ?>><?php echo $row->kd_vargejala; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">G3 <?php echo form_error('g3') ?></label>
            <!-- <input type="text" class="form-control" name="g3" id="g3" placeholder="G3" value="<?php echo $g3; ?>" /> -->
            <select name="g3" class="form-control">
                <option value="tidak ada">tidak ada</option>
                <?php 
                $sql = $this->db->query("SELECT * FROM vargejala WHERE kd_gejala='g3' ");
                foreach ($sql->result() as $row) {
                    $selected = '';
                    if($row->kd_vargejala == $g3){
                        $selected = 'selected';
                    }
                 ?>
                <option value="<?php echo $row->kd_vargejala; ?>" <?php echo $selected; ?>><?php echo $row->kd_vargejala; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">G4 <?php echo form_error('g4') ?></label>
            <!-- <input type="text" class="form-control" name="g4" id="g4" placeholder="G4" value="<?php echo $g4; ?>" /> -->
            <select name="g4" class="form-control">
                <option value="tidak ada">tidak ada</option>
                <?php 
                $sql = $this->db->query("SELECT * FROM vargejala WHERE kd_gejala='g4' ");
                foreach ($sql->result() as $row) {
                    $selected = '';
                    if($row->kd_vargejala == $g4){
                        $selected = 'selected';
                    }
                 ?>
                <option value="<?php echo $row->kd_vargejala; ?>" <?php echo $selected; ?>><?php echo $row->kd_vargejala; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">G5 <?php echo form_error('g5') ?></label>
            <!-- <input type="text" class="form-control" name="g5" id="g5" placeholder="G5" value="<?php echo $g5; ?>" /> -->
            <select name="g5" class="form-control">
                <option value="tidak ada">tidak ada</option>
                <?php 
                $sql = $this->db->query("SELECT * FROM vargejala WHERE kd_gejala='g5' ");
                foreach ($sql->result() as $row) {
                    $selected = '';
                    if($row->kd_vargejala == $g5){
                        $selected = 'selected';
                    }
                 ?>
                <option value="<?php echo $row->kd_vargejala; ?>" <?php echo $selected; ?>><?php echo $row->kd_vargejala; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">C1 <?php echo form_error('c1') ?></label>
            <!-- <input type="text" class="form-control" name="c1" id="c1" placeholder="C1" value="<?php echo $c1; ?>" /> -->
            <select name="c1" class="form-control">
                <option value="tidak ada">tidak ada</option>
                <?php 
                $sql = $this->db->query("SELECT * FROM varciri WHERE kd_ciri='c1' ");
                foreach ($sql->result() as $row) {
                    $selected = '';
                    if($row->kd_varciri == $c1){
                        $selected = 'selected';
                    }
                 ?>
                <option value="<?php echo $row->kd_varciri; ?>" <?php echo $selected ?>><?php echo $row->kd_varciri; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">C2 <?php echo form_error('c2') ?></label>
            <!-- <input type="text" class="form-control" name="c2" id="c2" placeholder="C2" value="<?php echo $c2; ?>" /> -->
            <select name="c2" class="form-control">
                <option value="tidak ada">tidak ada</option>
                <?php 
                $sql = $this->db->query("SELECT * FROM varciri WHERE kd_ciri='c2' ");
                foreach ($sql->result() as $row) {
                    $selected = '';
                    if($row->kd_varciri == $c2){
                        $selected = 'selected';
                    }
                 ?>
                <option value="<?php echo $row->kd_varciri; ?>" <?php echo $selected ?>><?php echo $row->kd_varciri; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">C3 <?php echo form_error('c3') ?></label>
            <!-- <input type="text" class="form-control" name="c3" id="c3" placeholder="C3" value="<?php echo $c3; ?>" /> -->
            <select name="c3" class="form-control">
                <option value="tidak ada">tidak ada</option>
                <?php 
                $sql = $this->db->query("SELECT * FROM varciri WHERE kd_ciri='c3' ");
                foreach ($sql->result() as $row) {
                    $selected = '';
                    if($row->kd_varciri == $c3){
                        $selected = 'selected';
                    }
                 ?>
                <option value="<?php echo $row->kd_varciri; ?>" <?php echo $selected ?>><?php echo $row->kd_varciri; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">C4 <?php echo form_error('c4') ?></label>
            <!-- <input type="text" class="form-control" name="c4" id="c4" placeholder="C4" value="<?php echo $c4; ?>" /> -->
            <select name="c4" class="form-control">
                <option value="tidak ada">tidak ada</option>
                <?php 
                $sql = $this->db->query("SELECT * FROM varciri WHERE kd_ciri='c4' ");
                foreach ($sql->result() as $row) {
                    $selected = '';
                    if($row->kd_varciri == $c4){
                        $selected = 'selected';
                    }
                 ?>
                <option value="<?php echo $row->kd_varciri; ?>" <?php echo $selected ?>><?php echo $row->kd_varciri; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">C5 <?php echo form_error('c5') ?></label>
            <!-- <input type="text" class="form-control" name="c5" id="c5" placeholder="C5" value="<?php echo $c5; ?>" /> -->
            <select name="c5" class="form-control">
                <option value="tidak ada">tidak ada</option>
                <?php 
                $sql = $this->db->query("SELECT * FROM varciri WHERE kd_ciri='c5' ");
                foreach ($sql->result() as $row) {
                    $selected = '';
                    if($row->kd_varciri == $c5){
                        $selected = 'selected';
                    }
                 ?>
                <option value="<?php echo $row->kd_varciri; ?>" <?php echo $selected ?>><?php echo $row->kd_varciri; ?></option>
                <?php } ?>
            </select>
        </div>
        <input type="hidden" name="id_penyakit" value="<?php echo $id_penyakit; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('penyakit') ?>" class="btn btn-default">Cancel</a>
    </form>