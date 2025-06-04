<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><h4><?= htmlspecialchars($category_name) ?></h4></li>
        </ol>
    </nav>

    <div class="card shadow mb-4">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php 
                $active = 'active'; 
                foreach ($sub_category2 as $subcategory) { ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link <?= $active ?>" id="subcategory-<?= $subcategory->uuid ?>-tab" data-toggle="tab" href="#subcategory-<?= $subcategory->uuid ?>" role="tab" aria-controls="subcategory-<?= $subcategory->uuid ?>" aria-selected="true">
                            <i class="fas fa-folder-open"></i> <?= $subcategory->sub_category ?>
                        </a>
                    </li>
                    <?php 
                    $active = ''; 
                }
                ?>
            </ul>

            <div class="form-group" id="cpi">
              <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <?php 
                    $active = 'show active'; 
                    foreach ($sub_category2 as $subcategory) { ?>
                        <div class="tab-pane fade <?= $active ?>" id="subcategory-<?= $subcategory->uuid ?>" role="tabpanel" aria-labelledby="subcategory-<?= $subcategory->uuid ?>-tab">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Page Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <?php 
                                        $no = 1;
                                        foreach ($pages as $val) {
                                            if ($val->sub_category == $subcategory->uuid) { ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td style="text-align: left;"><?= isset($val->pages) ? $val->pages : 'N/A'; ?></td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url('pages2/'.$val->uuid);?>" class="btn btn-primary btn-icon-split">
                                                            <span class="icon text-white-45">
                                                                <i class="fas fa-file-alt"></i>
                                                            </span>
                                                            <span class="text">Open File</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php 
                        $active = ''; 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<style type="text/css">

    .breadcrumb {
        background: linear-gradient(to right, #fff, #376e92);
        padding: 10px;
        border-radius: 5px; 
        display: flex;
        align-items: center;
        justify-content: center; 
    }

    .breadcrumb-item h4 {
        font-size: 20px;
        margin: 0; 
        font-weight: bold; 
        color:  #fff;
    }

    .table {
        border-collapse: collapse;
        width: 100%;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 12px;
        vertical-align: middle;
    }

    .table th {
        background-color: #f4f4f4;
        text-align: center;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
        cursor: pointer;
    }

    .nav-tabs {
        background-color: #f8f9fa; 
        border-radius: 5px;
        padding: 10px;
    }

    .nav-tabs .nav-link {
        color: #2E86C1;
        border: none;
        background-color: #f8f9fc;
        font-weight: bold;
    }

    .nav-tabs .nav-link.active {
        color: #fff;
        background-color: #376e92;
    }

    .btn-icon-split {
        display: inline-flex;
        align-items: center;
    }

    .btn-icon-split .icon {
        padding: 0.5rem;
        background-color: rgba(255, 255, 255, 0.15);
        margin-right: 0.5rem;
        border-radius: 0.35rem;
    }

    .btn-primary {
        background-color: #3498DB;
        border: none;
    }

    .btn-primary:hover {
        background-color: #2980B9;
    }

    .text-center {
        text-align: center;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
</style>
