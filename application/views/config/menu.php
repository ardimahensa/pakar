<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>MENU UTAMA</b></li>
                <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>
                <li class="list-group-item"><a href="<?php echo base_url()?>"><i class="glyphicon glyphicon-home"></i>Dashboard </a></li>
                
                <?php 
                if ($this->session->userdata('level') == "admin") {
                 ?>
                <li>
                  <a href="#demo4" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-home"></i>Input  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo4">
                      <a href="<?php echo base_url()?>gejala" class="list-group-item">1.1 Input Gejala</a>
                      <a href="<?php echo base_url()?>vargejala" class="list-group-item">1.2 Input Variabel Gejala</a>
                      <a href="<?php echo base_url()?>ciri" class="list-group-item">1.2 Input Ciri-ciri</a>
                      <a href="<?php echo base_url()?>varciri" class="list-group-item">1.2 Input Variabel Ciri-ciri</a>
                      <a href="<?php echo base_url()?>penyakit" class="list-group-item">1.3 Input Rule Penyakit</a>
                    </li>
                </li>

                <li>
                  <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-home"></i>Proses  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo5">
                      <a href="<?php echo base_url('user')?>" class="list-group-item">2.1 Data User</a>
                      <a href="<?php echo base_url('app/history')?>" class="list-group-item">2.2 Hasil Diagnosa</a>
                    </li>
                </li>
                <li class="list-group-item"><a href="<?php echo base_url()?>app/konsultasi"><i class="glyphicon glyphicon-home"></i>Konsultasi </a></li>
                <?php 
                } elseif($this->session->userdata('level') == "user") {
                 ?>
                <li class="list-group-item"><a href="<?php echo base_url()?>app/konsultasi"><i class="glyphicon glyphicon-home"></i>Konsultasi </a></li>
                <li class="list-group-item"><a href="<?php echo base_url()?>app/history"><i class="glyphicon glyphicon-home"></i>History Diagnosa </a></li>
                <?php } ?>

                <li class="list-group-item"><a href="<?php echo base_url()?>app/logout"><i class="glyphicon glyphicon-home"></i>Logout </a></li>

              </ul>
          </div>