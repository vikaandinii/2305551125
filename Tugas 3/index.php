<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "sistem_kontrol_ac";

try {
    //  PDO untuk koneksi ke database
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo '<div style="color: red; padding: 10px; border: 1px solid red; background-color: #f9d6d5;">
            <strong>Koneksi Gagal:</strong> Terjadi kesalahan saat menghubungkan ke database.
          </div>';
    exit();
}

// Fungsi untuk melihat status AC
function kontrol_ac($suhu, $kelembapan) {
    if ($suhu < 18 && $kelembapan < 40) {
        return "AC Mati";
    } elseif ($suhu >= 18 && $suhu <= 24 && $kelembapan >= 40 && $kelembapan <= 60) {
        return "AC Menyala Rendah";
    } elseif ($suhu > 24 && $suhu <= 30 && $kelembapan > 60 && $kelembapan <= 70) {
        return "AC Menyala Sedang";
    } elseif ($suhu > 30 || $kelembapan > 70) {
        return "AC Menyala Tinggi";
    } else {
        return "Kondisi tidak terdefinisi";
    }
}

$status_ac = "";
$tampilkan_histori = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cek_status"])) {
        $suhu = $_POST["suhu"];
        $kelembapan = $_POST["kelembapan"];
        
        if (!empty($suhu) && !empty($kelembapan)) {
            $status_ac = kontrol_ac($suhu, $kelembapan);
            
            $stmt = $pdo->prepare("INSERT INTO histori_ac (suhu, kelembapan, status_ac) VALUES (?, ?, ?)");
            $stmt->execute([$suhu, $kelembapan, $status_ac]);
        } else {
            $status_ac = "Harap masukkan suhu dan kelembapan yang valid.";
        }
    }

    if (isset($_POST["lihat_histori"])) {
        $tampilkan_histori = true;
    }

    if (isset($_POST["tutup_histori"])) {
        $tampilkan_histori = false;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistem untuk Melihat Status AC</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Sistem untuk Melihat Status AC</h2>

            <form id="form-input" method="POST">
                <div class="form-group">
                    <label for="suhu">Suhu (°C):</label>
                    <input type="number" id="suhu" name="suhu" required>
                </div>
                <div class="form-group">
                    <label for="kelembapan">Kelembapan (%):</label>
                    <input type="number" id="kelembapan" name="kelembapan" required>
                </div>
                <button type="submit" name="cek_status" class="btn">Cek Status AC</button>
            </form>

            <div class="result">
                <?php
                if (!empty($status_ac)) {
                    echo '<div class="result-message">Status AC: <strong>' . htmlspecialchars($status_ac) . '</strong></div>';
                }
                ?>
            </div>
        </div>

        <div class="card">
            <h3>Histori Status AC</h3>
            <form method="POST">
                <button type="submit" name="lihat_histori" class="btn">Lihat Histori</button>
                <button type="submit" name="tutup_histori" class="btn">Tutup Histori</button>
            </form>

            <?php if ($tampilkan_histori): ?>
            <table class="history-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Suhu (°C)</th>
                        <th>Kelembapan (%)</th>
                        <th>Status AC</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $pdo->query("SELECT * FROM histori_ac ORDER BY waktu DESC");
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['suhu']}</td>
                                <td>{$row['kelembapan']}</td>
                                <td>{$row['status_ac']}</td>
                                <td>{$row['waktu']}</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
