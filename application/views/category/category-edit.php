<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Category</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('category')?>">
                    <i class="fas fa-arrow-left">
                    </i> Daftar Category</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="user" method="post" action="<?= base_url('category/edit/'.$category->uuid);?>">
                    <div class="form-group row">
<!--                         <div class="col-sm-6">
                            <label class="form-label font-weight-bold">Pages</label>
                            <select name="pages" class="form-control <?= form_error('pages') ? 'invalid' : '' ?>" >
                                <option disabled selected>Pilih Pages</option>
                                <?php 
                                foreach($pages as $val){ ?>
                                    <option value="<?= $val->uuid; ?>" <?= set_select('pages', $val->uuid) ;?> <?= $pages->pages==$val->uuid?'selected':'';?>><?= $val->pages; ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback <?= !empty(form_error('pages')) ? 'd-block' : '' ; ?> "><?= form_error('pages') ?></div>
                        </div> -->
                        <div class="col-sm-6">
                            <label class="form-label font-weight-bold">Nama Category</label>
                            <input type="text" name="category" class="form-control <?= form_error('category') ? 'invalid' : '' ?> " placeholder="Masukkan Nama Category" value="<?= $category->category; ?>">
                            <div class="invalid-feedback <?= !empty(form_error('category')) ? 'd-block' : '' ; ?> ">
                                <?= form_error('category') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-md btn-success mr-2">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                            <a href="<?= base_url('category')?>" class="btn btn-md btn-danger">
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