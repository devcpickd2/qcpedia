<div class="container-fluid">
    <!-- Page Heading -->
    <script type="text/javascript" src="<?= base_url('ckeditor/ckeditor.js')?>">
    </script>
    <h1 class="h3 mb-2 text-gray-800">Tambah Informasi QC</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('info')?>">
                    <i class="fas fa-arrow-left">
                    </i> Daftar Informasi QC</a>
                </li> 
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
            </ol>
        </nav>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="user" method="post" action="<?= base_url('info/edit/'.$info->id);?>">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label class="form-label font-weight-bold">Kata Kunci</label>
                            <input type="text" name="messages" class="form-control <?= form_error('messages') ? 'invalid' : '' ?> " placeholder="Masukkan Kata Kunci" value="<?= $info->messages; ?>">
                            <div class="invalid-feedback <?= !empty(form_error('messages')) ? 'd-block' : '' ; ?> ">
                                <?= form_error('messages') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label class="form-label font-weight-bold">Informasi</label>
                            <textarea class="form-control ckeditor" id="response" name="response"><?= $info->response; ?></textarea>
                            <div class="invalid-feedback <?= !empty(form_error('response')) ? 'd-block' : '' ; ?> ">
                                <?= form_error('response') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-md btn-success mr-2">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                            <a href="<?= base_url('info')?>" class="btn btn-md btn-danger">
                                <i class="fa fa-times"></i> Batal
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style type="text/css">
        .breadcrumb{
            background-color: #2E86C1;
        }
    </style>