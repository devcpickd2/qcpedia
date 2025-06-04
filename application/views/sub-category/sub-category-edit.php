<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Sub Category</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('sub-category')?>">
                    <i class="fas fa-arrow-left">
                    </i> Daftar Sub Category</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
            </ol>
        </nav>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="user" method="post" action="<?= base_url('sub-category/edit/'.$sub_category->uuid);?>">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label class="form-label font-weight-bold">Pages</label>
                            <select name="category" class="form-control <?= form_error('category') ? 'invalid' : '' ?>" >
                                <option disabled selected>Pilih Category</option>
                                <?php 
                                foreach($category as $val){ ?>
                                    <option value="<?= $val->uuid; ?>" <?= set_select('category', $val->uuid) ;?> <?= $sub_category->category==$val->uuid?'selected':'';?>><?= $val->category; ?></option>
                               <?php } ?>
                           </select>
                           <div class="invalid-feedback <?= !empty(form_error('category')) ? 'd-block' : '' ; ?> "><?= form_error('category') ?></div>
                       </div>
                       <div class="col-sm-6">
                        <label class="form-label font-weight-bold">Nama Sub Category</label>
                        <input type="text" name="sub_category" class="form-control <?= form_error('sub_category') ? 'invalid' : '' ?> " placeholder="Masukkan Sub Category" value="<?= $sub_category->sub_category; ?>">
                        <div class="invalid-feedback <?= !empty(form_error('sub_category')) ? 'd-block' : '' ; ?> ">
                            <?= form_error('sub_category') ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-md btn-success mr-2">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="<?= base_url('sub-category')?>" class="btn btn-md btn-danger">
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