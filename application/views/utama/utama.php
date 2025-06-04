<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>QC PEDIA</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="<?= base_url('favicon.ico');?>" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/utama.css') ?>" />
    <link href="<?= base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Nunito', sans-serif;
            position: relative;
        }

        .custom-container {
            max-width: 95% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .bannerArea { 
            position: relative;
            overflow: hidden;
            background: linear-gradient(to right, #fff, #376e92);
            border: 2px solid #ADD8E6;
            padding: 60px 0;
            border-radius: 5px;
            z-index: 1;
        }

        .bannerArea__title {
            font-size: 2.7rem;
            font-weight: 900;
            color: #1F618D;
            font-family: Duru Sans, Verdana, sans-serif;
        }

        .bannerArea__brief {
            font-size: 1.4rem; 
            font-weight: 500;
            color: #1F618D;
            font-family: "Times New Roman", Times, serif;
        }

        .bannerArea__buttons .btn-info {
            padding: 4px 10px; 
            font-size: 1rem; 
            border-radius: 50px;
            color: #fff; 
            background-color: #17a2b8; 
            border: 2px solid #17a2b8; 
            font-family: 'Open Sans', sans-serif;
        }

        .bannerArea__buttons .btn-info .text {
            font-size: 1.2rem;
        }

        .bannerArea__image {
            display: flex;
            justify-content: center; 
            align-items: center; 
            height: 60%; 
        }

        .bannerArea__image img {
            max-width: 70%; 
            max-height: 80%; 
            height: auto; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .templatecookie-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1001;
        }

        .purchase-btn {
            display: inline-block;
            cursor: pointer;
            margin-top: 20px;
            transition: opacity 0.3s ease; 
            position: fixed;
            bottom: 100px;  
            right: 20px;  
            z-index: 1000;
        }

        .purchase-btn.hidden {
            opacity: 0; 
            pointer-events: none; 
        }

        .purchase-btn img {
            width: 250px; 
            height: 250px;
            object-fit: contain;
            margin-right: 5px; 
        }

        .chat-popup {
            width: 380px;
            height: 600px; 
            overflow: hidden; 
            background-color: white; 
            border: 1px solid #ccc;
            border-radius: 25px; 
            position: fixed; 
            bottom: 10px;
            right: 20px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: none; 
            z-index: 1000; 
        }

        .chat-popup .popup-header {
            background: linear-gradient(to right, #fff, #376e92);
            color: #fff;
            padding-right: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
        }

        .chat-popup .popup-header h2 {
            font-size: 1.25rem;
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
            color: #fff;
            margin: 10px 0;
            text-align: left;
        }

        .chat-popup iframe {
            width: 100%;
            height: calc(100% - 50px);
            border: none;
        }

        .chat-popup .close {
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0 10px;
        }

    </style>
</head>
<body>
    <main>
        <section class="bannerArea">
            <div class="container custom-container">
                <div class="row d-flex align-items-center text-center text-lg-left">
                    <div class="col-xl-6">
                        <div class="bannerArea__wrapper" data-aos="fade-up">
                            <h1 class="bannerArea__title">Welcome to QC Pedia</h1>
                            <p class="bannerArea__brief">
                                Selamat datang di QC Pedia, pintu gerbang menuju pengetahuan yang tak terbatas! Bersiaplah untuk petualangan intelektual yang mengagumkan. Mari kita jelajahi dan belajar bersama!
                            </p>
                            <div class="bannerArea__buttons mt-4">
                                <a href="<?= base_url('auth/login') ?>" class="btn btn-info btn-icon-split">
                                    <span class="text">
                                        <i class="fa fa-sign-in-alt mr-2"></i> Login to QC PEDIA Library
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="bannerArea__image" data-aos="fade-left" data-aos-delay="500">
                            <img src="<?= base_url('assets/img/banner/banner2.png') ?>" alt="banner-image" />
                        </div>
                    </div>
                </div>
                <div class="mask-group">
                </div>
            </div>
        </section>

        <div class="templatecookie-btn">
            <a class="purchase-btn" onclick="openChat()">
                <img src="<?= base_url('assets/img/tanya3.png') ?>" alt="Sipedia Icon" />
            </a>
        </div>
        <div id="chat-popup" class="chat-popup">
            <div class="popup-header" style="height: 70px;">
                <img src="<?= base_url('assets/img/logoqcpedia.png') ?>" style="width: 140px; height: auto; vertical-align: middle; margin-top: 15px;" alt="Chat Icon">
                <h2>Chat with SiPedia</h2>
            </div>
            <iframe src="<?= base_url('chat') ?>" frameborder="5px"></iframe>
            <span class="close" onclick="closeChat()">×</span>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        function openChat() {
            document.querySelector('.purchase-btn').classList.add('hidden');
            document.getElementById('chat-popup').style.display = 'block';
        }

        function closeChat() {
            document.querySelector('.purchase-btn').classList.remove('hidden');
            document.getElementById('chat-popup').style.display = 'none';
        }

        AOS.init();

        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
            }, 500);
        });
    </script>
</body>
</html>
