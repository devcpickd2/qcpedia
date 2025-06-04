<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <label class="form-label font-weight-bold">About Us</label>
            </li>
        </ol>
    </nav>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form class="user" method="post" action="<?= base_url('about'); ?>">
                <div class="form-group row">
                    <div class="col-sm">
                        <div>
                            <h5>PT. CHAROEN POKPHAND INDONESIA</h5>
                            <h6>Kawasan Modern Industrial Estate. Jl. Raya Modern Industri II No. 15</h6>
                            <h6>Nambo Ilir, Kec. Cikande, Kabupaten Serang, Banten 42186</h6>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<style type="text/css">
    .breadcrumb {
        background: linear-gradient(to right, #fff, #376e92);
        padding: 5px;
        padding-top: 15px;
        border-radius: 4px; 
        display: flex;
        align-items: center;
        justify-content: center; 
    }

    .btn-danger {
        background-color: #c0392b;
        border-color: #c0392b;
    }
</style>