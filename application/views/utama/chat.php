<!DOCTYPE html>
<html>

<head>
    <title>Chat App</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');

        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Rubik", sans-serif;
        }

        #chat-heading {
            font-size: 2rem; /* Adjust the size as needed */
            color: #3B82F6; /* Change to your preferred color */
            text-align: center; /* Center the text */
            margin: 20px 0; /* Add some margin */
            font-weight: bold; /* Make the font bold */
        }

        #bot {
            height: 520px;
            width: 450px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 3px 3px 3px rgba(0, 0, 0, 0);
            border-radius: 10px;
        }

        #container {
            height: 90%;
            border-radius: 10px;
            width: 90%;
            background: #F3F4F6;
        }

        #body {
            width: 100%;
            height: 70%;
            background-color: #F3F4F6;
            overflow-y: auto;
            padding: 10px;
        }

        .userSection {
            width: 100%;
        }

        .seperator {
            width: 100%;
            height: 20px;
        }

        .messages {
            max-width: 80%;
            margin: .5rem;
            font-size: 1.2rem;
            padding: .5rem;
            border-radius: 7px;
        }

        .user-message {
            margin-top: 1rem;
            text-align: left;
            background: #3B82F6;
            color: white;
            float: left;
        }

        .bot-reply {
            text-align: left;
            background: #E5E7EB;
            margin-top: 1rem;
            float: right;
            color: black;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        }

        #inputArea {
            display:flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            background: transparent;
        }

        #userInput {
            height: 40px;
            width: 70%;
            background-color: white;
            border-radius: 6px;
            padding: 10px;
            font-size: 1rem;
            border: none;
            outline: none;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        }

        #send {
            height: 40px;
            padding: .5rem;
            font-size: 1rem;
            text-align: center;
            width: 20%;
            color: white;
            background: #3B82F6;
            cursor: pointer;
            border: none;
            border-radius: 6px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        }

        .hint-icon {
            cursor: pointer;
            width: 24px;
            height: 24px;
            margin-left: 10px;
        }

        .hint-icon:hover {
            opacity: 0.7;
        }

        .hint-popup {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #fefefe;
            border: 1px solid #888;
            border-radius: 10px;
            padding: 20px;
            max-width: 200px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        #chat-popup {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border: 1px solid #888;
            border-radius: 0px;
            padding: 20px;
            max-width: 300px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .hint-popup h3 {
            margin-top: 0;
            width: 250px;
        }

        .hint-popup ul {
            list-style-type: disc;
            padding-left: 20px;
            max-height: 320px; 
            overflow-y: auto;  
            text-align: left;
        }

        .hint-popup ul li {
            margin-bottom: 10px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
            color: #aaa;
        }

        .close:hover {
            color: #000;
        }

    </style>
</head>

<body>
    <div id="bot">
        <div id="container">
            <div id="body">
            </div>
            <div class="popup-header">
                <div style="flex: 1 ;"></div> 
                <div style="display: flex; flex-direction: column; align-items: flex-end;">
                    <div class="hint-icon" onclick="openHintPopup()">
                        <img src="<?= base_url('assets\img\hint.png') ?>" alt="Hint Icon" style="width: 50px; height: 50px;">
                    </div>
                </div>
            </div>
            <div id="inputArea">
                <input type="text" name="messages" id="userInput" placeholder="Please enter your message here" required>
                <input type="submit" id="send" value="Send">
            </div>
        </div>
    </div>

    <div id="hint-popup" class="hint-popup">
        <span class="close" onclick="closeHintPopup()">×</span>
        <h3>List of Questions</h3>
        <ul>
            <li>suhu ruang hopper</li>
            <li>suhu ruang susun</li>
            <li>Apa yang perlu diperiksa saat proses retort?</li>
            <li>Apa standar waktu karantina untuk produk setelah packing karton?</li>
            <li>Apa yang harus diperhatikan saat memeriksa kekuatan seal di Ruang Filler?</li>
            <li>Berapa jumlah maksimum tray yang dapat ditumpuk di satu trolley di Ruang Susun? / jumlah tray susun / berapa jumlah tray susun</li>
            <li>Apa yang harus diperhatikan saat melakukan pemeriksaan organoleptik pada produk di Ruang Retort?</li>
            <li>Apa yang dimaksud dengan parameter "Reject Food Safety" di Ruang Sortasi 2? / reject food safety</li>
            <li>Bagaimana standar warna untuk ES?</li>
            <li>Apa rentang suhu yang dijaga untuk ruang MP?</li>
            <li>Mengapa suhu ruangan perlu dijaga di Ruang Hopper?</li>
            <li>Apa rentang suhu yang diperlukan untuk ruang chillroom?</li>
            <li>Apa batasan suhu untuk Gel? / suhu gel / suhu gel mp / berapa suhu gel?</li>
            <li>Berapa suhu yang dijaga untuk ruang CS? / suhu ruang cs / berapa suhu ruang cs?</li>
            <li>Apa rentang suhu yang diperlukan untuk ruang chillroom? / suhu ruang chillroom / berapa suhu ruang chillroom? berapa suhu ruang chillroom</li>
            <li>Setelah grinding, berapa suhu yang diharapkan untuk Raw Meat? suhu ruang raw meat / berapa suhu ruang raw meat?</li>
            <li>Apa rentang suhu yang diperlukan untuk proses Thawing? / suhu ruang thawing / proses thawing / berapa suhu ruang thawing? / berapa suhu ruang proses thawing?</li>
            <li>Apa rentang suhu yang dijaga untuk ruang MP? / berapa suhu ruang mp? / berapa suhu ruang mp</li>
            <li>Mengapa suhu ruangan perlu dijaga di Ruang Hopper?</li>
            <li>Apa yang dimaksud dengan "Scrapping" yang dilakukan setiap 5 batch atau 8 jam di Ruang Retort? scrapping</li>
            <li>Apa arti dari label hijau pada mesin di area Stuffing? / label hijau</li>
            <li>Bagaimana standar warna untuk ES?</li>
            <li>Apa suhu yang diharapkan untuk AIR PC KLEER? / berapa suhu air pc kleer? / berapa suhu air pc kleer / standar suhu air pc kleer</li>
            <li>Bagaimana standar rasa untuk AIR PC KLEER dan AIR PRODUKSI? rasa air produksi</li>
            <li>Berapa rentang pH yang diperbolehkan untuk AIR PRODUKSI? / rentang ph air produksi</li>
            <li>Apa standar warna untuk AIR PC KLEER? / standar air pc kleer</li>
            <li>Berapa suhu ruangan finish good? / berapa suhu fg / berapa suhu ruang fg / berapa suhu ruangan fg</li>
            <li>Apa yang dimaksud dengan "Metal detector" di Ruang MP? / metal detector</li>
            <li>Apa yang perlu diperiksa saat melakukan pengecekan kejernihan pada bahan kimia di Chemical?</li>
            <li>Bagaimana aturan perubahan label mesin dari hijau ke kuning atau merah?</li>
            <li>Apa yang harus diperiksa saat melakukan pengecekan visual pada produk di Finish Good?</li>
            <li>Bagaimana standar kekeringan produk yang harus dipertahankan sebelum proses filling toples atau pouch?</li>
            <li>Bagaimana label mesin diatur berdasarkan hasil pemeriksaan?</li>
            <li>Apa yang harus diperhatikan pada produk yang disortir di Sortasi 3? / sortir di ruang sortasi 3</li>
            <li> Apa standar waktu karantina untuk produk setelah packing karton? /standar waktu karantina produk / standar karantina produk setelah packing karton</li>
            <li>Apa yang menjadi parameter penolakan produk di Ruang Sortasi 2? / reject produk / reject produk ruang sortasi / reject produk di rungan sortasi</li>
            <li>Apa yang perlu diperiksa saat proses retort? / suhu ruangan retort/ berapa suhu ruangan retort / berapa suhu ruang retort? / berapa suhu ruang retort</li>
            <li>Apa standar suhu di Ruang Susun? / berapa suhu ruangan susun / berapa suhu ruang susun</li>
            <li>Apa saja yang harus diperiksa saat pengisian produk di Ruang Filler? / pengisian produk di ruang filler</li>
            <li>Apa standar suhu di Ruang Filler?/ berapa suhu ruangan filler/ suhu filler / suhu ruang filler/ berapa suhu ruang filler</li>
            <li>Apa yang harus diperiksa pada organoleptik adonan di Ruang Hopper?</li>
            <li>Apa saja suhu yang harus dipertahankan di Ruang Hopper? / berapa suhu ruangan hopper / suhu hopper / berapa suhu ruang hopper</li>
            <li>Apa yang perlu diperiksa pada penerimaan MDM, SBB, SBL, Beef, dan Surimi?</li>
            <li>Apa yang harus diperiksa pada penerimaan produk RTE pouch?</li>
            <li>Apa persyaratan suhu untuk produk beku dan segar?</li>
            <li>Apa yang harus diperhatikan pada penerimaan aluminium wire?</li>
            <li>Apa standar penerimaan lakban CP</li>
            <li>Apa yang harus dilakukan jika terjadi reject pada proses sortasi 2?</li>
            <li>Apa yang harus dilakukan jika terjadi penyimpangan dalam pengecekan produk di ruang Filler?</li>
            <li>Apa saja parameter suhu ruangan dan suhu untuk proses pada ruang Hopper?</li>
            <li>Bagaimana standar penerimaan untuk minyak?</li>
            <li>Apa saja parameter penerimaan untuk PVDC?</li>
            <li>Apa yang harus dilakukan jika terjadi penyimpangan dalam penerimaan etiket label Champ?</li>
            <li>Apa saja standar penerimaan untuk toples PET dan PP? / standar penerimaan toples pet dan pp</li>
            <li>Apa saja dimensi yang diharapkan untuk penerimaan barang karton Champ, Okey, dan Fiesta? / dimensi penerimaan karton</li>
            <li>tugas qc/ apa yang dilakukan qc </li>
        </ul>
    </div>

    <script type="text/javascript">

        document.querySelector("#send").addEventListener("click", async () => {
            sendMessage();
        });

        document.querySelector("#userInput").addEventListener("keypress", (e) => {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        function sendMessage() {
            var userMessage = document.querySelector("#userInput").value;

            let userHtml = '<div class="userSection">' + '<div class="messages user-message">' + userMessage + '</div>' +
            '<div class="seperator"></div>' + '</div>';

            document.querySelector('#body').innerHTML += userHtml;

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo base_url('chat/get_reply');?>", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    let botHtml = '<div class="botSection">' + '<div class="messages bot-reply">' + xhr.responseText + '</div>' +
                    '<div class="seperator"></div>' + '</div>';

                    document.querySelector('#body').innerHTML += botHtml;

                    document.querySelector("#userInput").value = '';
                }
            };
            xhr.send("messageValue=" + userMessage);
        }

        function openHintPopup() {
            var hintPopup = document.getElementById("hint-popup");
            hintPopup.style.display = "block";
        }

        function closeHintPopup() {
            var hintPopup = document.getElementById("hint-popup");
            hintPopup.style.display = "none";
        }


    </script>
</body>

</html>
