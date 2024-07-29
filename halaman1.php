<?php
require_once("function/helper.php");
require_once("function/koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENSI</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="halaman1.css">
</head>
<body>
    <nav class="navbar">
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <h1>AGENSI</h1>
    </nav>

    <div class="main-container">
        <div class="photo-container">
            <img src="assets/bbpmp.png" alt="Main Photo">
        </div>
        
        <div class="clickable-container" onclick="location.href='link1.html';">
            <img src="assets/kirimsurat.png" alt="Photo 1">
            <div>
                <h2>KIRIM SURAT</h2>
                <p>Silahkan upload surat disni</p>
            </div>
        </div>
        
        <div class="clickable-container" onclick="location.href='link2.html';">
            <img src="assets/tracking.png" alt="Photo 2">
            <div>
                <h2>TRACKING </h2>
                <p>silahkan cek tarcking surat disni</p>
            </div>
        </div>
    </div>

    <footer class="footer">        
        <img src="assets/bbpmpout.png">
        <p>Jl. Raya Batujajar No.KM.2 No.90, <br>Padalarang, Bandung Barat<br> Jawa Barat 40553</p>
    </footer>
</body>
</html>
