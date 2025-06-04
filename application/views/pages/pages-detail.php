<div class="container-fluid">
    <!-- Page Heading -->
    <!-- <script type="text/javascript" src="<?= base_url('ckeditor/ckeditor.js')?>"></script> -->
    <h1 class="h3 mb-2 text-gray-800">Content</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('pages')?>">
                    <i class="fas fa-arrow-left">
                    </i>Daftar Pages</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Detail Content</li>
            </ol>
        </nav>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="user" method="post" action="<?= base_url('pages/detail/'.$pages->uuid);?>">
                    <div class="form-group row">
                        <div class="col-sm">
                            <label class="form-label font-weight-bold"><?= $pages->pages; ?></label>
                            <tr>
                                <td>
                                    <?= $pages->content; ?>
                                </td>
                            </tr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="<?= base_url('pages')?>" class="btn btn-md btn-danger">
                                <i class="fa fa-arrow-left"></i> Kembali
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