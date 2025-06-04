<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">New Pages</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('pages')?>">
                    <i class="fas fa-arrow-left">
                    </i> Daftar Pages</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">New Pages</li>
            </ol>
        </nav>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="user" method="post" action="<?= base_url('pages/tambah');?>">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label class="form-label font-weight-bold">Sub Category</label>
                            <select name="sub_category" class="form-control <?= form_error('sub_category') ? 'invalid' : '' ?>" >
                                <option disabled selected>Pilih Sub Category</option>
                                <?php 
                                foreach($sub_category as $val){ ?>
                                    <option value="<?= $val->uuid; ?>" <?= set_select('sub_category', $val->uuid) ;?>><?= $val->sub_category; ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback <?= !empty(form_error('sub_category')) ? 'd-block' : '' ; ?> "><?= form_error('sub_category') ?></div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label font-weight-bold">Nama File</label>
                            <input type="text" name="pages" class="form-control <?= form_error('pages') ? 'invalid' : '' ?> " placeholder="Masukkan Nama Pages" value="<?= set_value('pages '); ?>">
                            <div class="invalid-feedback <?= !empty(form_error('pages')) ? 'd-block' : '' ; ?> ">
                                <?= form_error('pages') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-md btn-success mr-2">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                            <a href="<?= base_url('pages')?>" class="btn btn-md btn-danger">
                                <i class="fa fa-times"></i> Batal
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .breadcrumb{
        background-color: #2E86C1;
    }
</style>