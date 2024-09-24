<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="background-image"></div>
    <div class="invitation-container">
        <h1>Undangan Pernikahan</h1>
        <img src="wedding.jpg" alt="Couple" class="couple-image">
        <p>Dengan memohon rahmat dan ridho Allah SWT, kami mengundang Anda untuk menghadiri pernikahan kami:</p>

        <div class="couple-name">
            <h2>cowok</h2>
            <p>&</p>
            <h2>cewek</h2>
        </div>

        <div class="event-details">
            <p>Tanggal: 20 Agustus 2024</p>
            <p>Waktu: 10:00 WIB</p>
            <p>Tempat: Aula Gedung Pernikahan, Samarinda</p>
        </div>

        <div class="rsvp">
            <h3>RSVP</h3>
            <p>Mohon konfirmasi kehadiran Anda:</p>
            <button onclick="openRSVPForm()">
                <img src="wedding.jpg" alt="RSVP Icon" class="rsvp-icon"> Konfirmasi Kehadiran
            </button>
        </div>
    </div>

    <div id="rsvp-form" class="rsvp-form" style="display:none;">
        <h3>Konfirmasi Kehadiran</h3>
        <form action="insert.php" method="post">
            <input type="text" name="nama" placeholder="Nama Anda" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="ucapan" cols="20" rows="5" placeholder="Ucapan" required></textarea>
            <select name="keterangan">
                <option value="1">Ya</option>
                <option value="2">Tidak Hadir</option>
                <option value="3">Tidak Tahu</option>
            </select>
            <button type="submit">Kirim</button>
            <button type="button" onclick="closeRSVPForm()">Tutup</button>
        </form>
    </div>

    <iframe width="425" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=117.14096724987031%2C-0.5018000228631119%2C117.14347779750824%2C-0.49998960096304806&amp;layer=mapnik" style="border: 1px solid black"></iframe><br />
    <small><a href="https://www.openstreetmap.org/#map=19/-0.50089/117.14222">Lihat peta lebih besar</a></small>

    <script src="script.js"></script>

    <div style="height:200px; width:300px; overflow:scroll;">
        <?php
        include 'koneksi.php';
        $SQL2 = "SELECT * FROM bukutamu ORDER BY id DESC";
        $hasil = $connection->query($SQL2);
        while ($baris = $hasil->fetch_row()) {
        ?>
            <div style="border-style:solid; border-color:crimson; margin:10px;">
                <p style="font-weight:bold;"><?= htmlspecialchars($baris[1]) ?></p>
                <p><?= htmlspecialchars($baris[2]) ?></p>
            </div>
        <?php
        }
        $hasil->free_result();
        ?>
    </div>

    <script>
        function openRSVPForm() {
            document.getElementById('rsvp-form').style.display = 'block';
        }

        function closeRSVPForm() {
            document.getElementById('rsvp-form').style.display = 'none';
        }
    </script>
</body>

</html>
