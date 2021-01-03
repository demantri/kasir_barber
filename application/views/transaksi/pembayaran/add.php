
<div class="main-body">
    <div class="page-wrapper">
        
        <div class="card">
            <div class="card-block">
                <h5>Pembayaran</h5>
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

                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID Transaksi</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="id" name="id" value="PB20200301" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tgl_transaksi" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="tgl_transaksi" name="tgl_transaksi" value="<?= date("Y-m-d")?>" readonly>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-sm">

                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="id_list_cukur" class="col-sm-4 col-form-label">Jasa </label>
                                <div class="col-sm-8">
                                    <select name="list_cukur" id="id_list_cukur" class="form-control">
                                        <option value="">Pilih Jasa</option>
                                        <?php foreach ($jasa as $data) {?>
                                        <option value="<?= $data->id?>"><?= $data->nama_list?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id_pelanggan" class="col-sm-4 col-form-label">Pelanggan</label>
                                <div class="col-sm-8">
                                    <select name="pelanggan" id="id_pelanggan" class="form-control">
                                        <option value="">Pilih Pelanggan</option>
                                        <?php foreach ($pelanggan as $data) {?>
                                        <option value="<?= $data->id?>"><?= $data->nama_pelanggan?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>

                            <input type="submit" value="+ Tambah" class="btn btn-sm btn-primary">
                        </form>

                    </div>

                    <!-- detail -->
                    <div class="col-sm">

                        <h4>Detail pembayaran</h4>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Detail Jasa</th>
                                    <th>Total</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dede</td>
                                    <td>Cukur regular</td>
                                    <td class="text-right">Rp. 25.000</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                </div>
            </div>
        </div>

    </div>
</div>