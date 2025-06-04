<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <label class="form-label font-weight-bold">Contacts</label>
            </li>
        </ol>
    </nav>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form class="user" method="post" action="<?= base_url('about'); ?>">
                <div class="form-group row">
                    <div class="col-sm">
                        <div>
                            <h5>Contact Developer</h5>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
                                <h6><i class="fa fa-envelope"></i> adminqc.rtm@cp.co.id</h6>
                                <h6><i class="fa fa-envelope"></i> putri.harnis@cp.co.id</h6>

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