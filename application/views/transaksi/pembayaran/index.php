
<div class="main-body">
    <div class="page-wrapper">
        
        <div class="card">
            <div class="card-block">
                <h5>Daftar Roles</h5>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title m-t-10">
                        <li class="breadcrumb-item">
                            <a href="#!">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Simple Breadcrumb</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
        
        <div class="page-body">
            <!-- Basic table card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Tabel Daftar Roles</h5>
                    <br>
                    <br>
                    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash')?>"></div>
                    <?php if ($this->session->flashdata('flash')) : ?>
                                
                    <?php endif; ?>
                    <!-- <button  type="button" class="btn btn-primary btn-sm"><i class="ti-plus"></i> Tambah</button> -->
                    <a href="<?= site_url("pembayaran/add")?>" class="btn btn-primary btn-sm"><i class="ti-plus"></i> Tambah</a>

                    <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table dataTable table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Roles</th>
                                    <th style="width: 20px;" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
</div>