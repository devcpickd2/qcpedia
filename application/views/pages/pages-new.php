        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>CKEditor Example</title>
            <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>

            <style type="text/css">
                .breadcrumb {
                    background-color: #2E86C1;
                }
                #content {
                    visibility: visible !important;
                }
            </style>
        </head>
        <body>
            <div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800">New Pages</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('pages')?>">
                                <i class="fas fa-arrow-left"></i> Daftar Pages
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">New Pages</li>
                    </ol>
                </nav>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <form class="user" method="post" action="<?= base_url('pages/new/'.$pages->uuid);?>" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label class="form-label font-weight-bold"><?= $pages->pages; ?></label>
                                    <textarea class="form-control ckeditor" id="content" name="content"><?= $pages->content; ?></textarea>
                                    <div class="invalid-feedback <?= !empty(form_error('content')) ? 'd-block' : '' ; ?> ">
                                        <?= form_error('content') ?>
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
    </body>
    </html>
    <script>
        CKEDITOR.replace('content', {
            extraPlugins: 'uploadimage,image2',
            removePlugins: 'easyimage,cloudservices',
            height: 300,
            filebrowserUploadUrl: '<?php echo base_url("pages/upload_image"); ?>',
            filebrowserImageUploadUrl: '<?php echo base_url("pages/upload_image"); ?>',
            filebrowserUploadMethod: 'form'
        });
    </script>

