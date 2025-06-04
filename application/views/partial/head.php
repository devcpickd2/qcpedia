<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico');?>" type="image/x-icon">
    <title>QC PEDIA</title>
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>">
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <!-- Add Bootstrap JS for Mobile responsiveness -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white topbar shadow mb-4">

        <!-- Navbar toggler for mobile devices -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mr-5" id="navbarNavDropdown">
            <a class="navbar-brand d-flex align-items-center" href="<?= base_url('utama');?>">
                <div class="ml-4">
                    <img src="<?= base_url('assets/img/logoqcpedia.png') ?>" class="logo-image">
                </div>
            </a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= $active_nav == 'utama' ? 'active' : '';?>">
                    <a class="nav-link" href="<?= base_url('utama');?>">
                        <i class="fa fa-home mr-2"></i>Dashboard
                    </a>
                </li>

                <li class="nav-item dropdown <?= $active_nav == 'category2' ? 'active' : '';?>">
                    <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-sticky-note mr-2"></i>List Category
                    </a>    
                    <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                        <?php foreach ($category2 as $val): ?>
                            <a class="dropdown-item" href="<?= base_url('sub-category2/'.$val->uuid) ?>">
                                <?= $val->category ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </li>

                <li class="nav-item <?= $active_nav == 'about' ? 'active' : '';?>">
                    <a class="nav-link" href="<?= base_url('about');?>">
                        <i class="fa fa-user mr-2"></i>About
                    </a>
                </li>
                <li class="nav-item <?= $active_nav == 'contact' ? 'active' : '';?>">
                    <a class="nav-link" href="<?= base_url('contact');?>">
                        <i class="fa fa-paper-plane mr-2"></i>Contacts
                    </a>
                </li>
            </ul>
        </div>

    </nav>
</body>
</html>


<style>
/* Logo image styling */
.logo-image {
    width: 100%;
    max-width: 160px; /* Ukuran maksimal agar tidak menabrak */
    height: auto;
    margin-top: 10px;
}

/* Topbar styling */
.topbar {
    background: linear-gradient(to right, #fff, #376e92);
    border: 2px solid #ADD8E6;
    padding: 10px 0;  /* Ensure some padding around the topbar */
    position: relative; /* Memastikan navbar bisa menjadi referensi posisi dropdown */
    z-index: 1050; /* Pastikan navbar tetap berada di atas konten */
}

/* Navbar brand styling */
.navbar-brand {
    font-size: 20px;
    color: white;
}

/* Styling untuk navbar items */
.navbar-nav .nav-item .nav-link {
    color: white;
}

.navbar-nav .nav-item.active .nav-link {
    font-weight: bold;
}

/* Styling untuk dropdown menu */
.nav-item .dropdown-menu {
    background-color: #ffffff;
    border-radius: 0.25rem;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    padding: 5px;
    min-width: 200px;
    width: auto;
    margin-right: 10px;
    margin-left: 10px;
    position: absolute; /* Menjadikan dropdown muncul di bawah tombol */
    top: 100%; /* Pastikan dropdown muncul di bawah elemen tombol */
    left: 0;
    z-index: 1050; /* Menambahkan z-index lebih tinggi agar dropdown tetap di atas konten */
}

/* Dropdown menu item styling */
.nav-item .dropdown-menu .dropdown-item {
    padding: 10px 20px;
    font-size: 16px;
    color: #2E86C1;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.nav-item .dropdown-menu .dropdown-item:hover {
    background-color: #2E86C1;
    color: #fff;
}

.dropdown-menu a {
    white-space: nowrap; 
    padding: 10px 20px;
    display: block;
}

/* Optional: Mengatur dropdown-toggle agar tombol dropdown tidak mengganggu layout */
.dropdown-toggle::after {
    display: none; /* Menyembunyikan tanda panah default dari dropdown */
}

/* Animasi fade in untuk elemen yang muncul */
.animated.fadeIn {
    animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Styling untuk icon di navbar */
.mr-2 {
    font-size: 18px;
    font-weight: bold;
    margin-right: 8px;
}

@media (max-width: 767px) {
    .navbar-collapse {
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .navbar-nav {
        width: 100%;
        text-align: center;
    }

    .navbar-nav .nav-item {
        width: 100%;
    }

    .navbar-nav .nav-link {
        padding: 12px;
        display: block;
        width: 100%;
    }

    .navbar-nav .dropdown-menu {
        position: static !important;
        width: 100%;
        border: none;
        box-shadow: none;
        background-color: #f8f9fa;
    }

}

</style>
