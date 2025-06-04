<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <label class="form-label font-weight-bold"><?= isset($pages->pages) ? $pages->pages : 'No Page Found'; ?></label>
            </li>
        </ol>
    </nav>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form class="user" method="post" action="<?= base_url('pages2/'.$pages->uuid); ?>">
                <div class="form-group row">
                    <div class="col-sm">
                        <div>
                            <?= isset($pages->content) ? $pages->content : 'No Content Available'; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-md btn-danger" onclick="window.history.back();">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<style type="text/css">
    .breadcrumb {
        background-color: #2E86C1;
        color: #fff;
    }

    .btn-danger {
        background-color: #c0392b;
        border-color: #c0392b;
    }
</style>