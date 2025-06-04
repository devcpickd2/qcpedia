<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Pages</h1>
        <a href="<?= base_url('pages/tambah')?>" class="btn btn-md btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>New Pages</a>
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
                            <th style="text-align: center;">Category</th>
                            <th style="text-align: center;">Page Name</th>
                            <th style="text-align: center;">Edit</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($pages as $val) {
                            ?>                                                                                 
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $val->sub_category; ?></td>
                                <td><?= $val->pages; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('pages/edit/'.$val->uuid);?>" class="btn btn-info btn-icon-split">
                                        <span class="text">Page Name</span>
                                    </a>
                                    <a href="<?= base_url('pages/new/'.$val->uuid);?>" class="btn btn-danger btn-icon-split">
                                        <span class="text">Content</span>
                                    </a>
                                    <a href="<?= base_url('pages/detail/'.$val->uuid);?>" class="btn btn-warning btn-icon-split">
                                        <span class="text">Detail</span>
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
</div>
</div>
