<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Informasi QC</h1>
        <a href="<?= base_url('info/tambah')?>" class="btn btn-md btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>Tambah</a>
    </div>

    <?php if($this->session->flashdata('success_msg')): ?>
        <div class="alert alert-success text-center">
            <i class="fas fa-check"></i>
            <?= $this->session->flashdata('success_msg') ?>
        </div>
        <br>
    <?php endif ?>

    <?php if($this->session->flashdata('error_msg')): ?>
        <div class="alert alert-danger text-center">
            <i class="fas fa-check"></i>
            <?= $this->session->flashdata('error_msg') ?>
        </div>
        <br>
    <?php endif ?> 

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="form-group" id="cpi">
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kata Kunci</th>
                            <!-- <th>Informasi</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($info as $val) {
                            ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $val->messages; ?></td>
                                <!-- <td><?= $val->response; ?></td> -->
                                <td class="text-center">
                                    <a href="<?= base_url('info/edit/'.$val->id);?>" class="btn btn-primary btn-icon-split">
                                        <span class="text">Edit</span>
                                    </a> 
                                </td>
                            </tr>
                            <?php 
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>  
    </div>
</div>