<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelulusan Siswa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>🎓 Daftar Kelulusan Siswa 🎓</h1>

        <div class="students">
            <?php
            // Data siswa
            $siswa = [
                ["nama" => "Andi", "matematika" => 85, "bahasa_inggris" => 70, "ipa" => 80],
                ["nama" => "Budi", "matematika" => 60, "bahasa_inggris" => 50, "ipa" => 65],
                ["nama" => "Cici", "matematika" => 75, "bahasa_inggris" => 80, "ipa" => 70],
                ["nama" => "Dodi", "matematika" => 95, "bahasa_inggris" => 85, "ipa" => 90],
                ["nama" => "Eka", "matematika" => 50, "bahasa_inggris" => 60, "ipa" => 55]
            ];

            // Loop untuk menampilkan siswa
            foreach ($siswa as $data) {
                $nama = $data['nama'];
                $rata_rata = ($data['matematika'] + $data['bahasa_inggris'] + $data['ipa']) / 3;
                $status = $rata_rata >= 75 ? "Lulus 🎉" : "Tidak Lulus 😢";
                $kelas_status = $rata_rata >= 75 ? 'status lulus' : 'status tidak-lulus';

                // Menentukan rekomendasi perbaikan apabila tidak lulus
                if ($rata_rata < 75) {
                    $nilai_terendah = min($data['matematika'], $data['bahasa_inggris'], $data['ipa']);
                    $rekomendasi = ($nilai_terendah == $data['matematika']) ? "Matematika" : (($nilai_terendah == $data['bahasa_inggris']) ? "Bahasa Inggris" : "IPA");
                } else {
                    $rekomendasi = "-";
                }

                echo "<div class='student'>
                        <div class='student-info'>
                            <h2>{$nama}</h2>
                            <p><strong>Rata-rata:</strong> " . number_format($rata_rata, 2) . "</p>
                        </div>
                        <p><span class='{$kelas_status}'>{$status}</span></p>";
                
                if ($rata_rata < 75) {
                    echo "<p class='rekomendasi'>Perbaikan: {$rekomendasi}</p>";
                }

                echo "</div>";
            }
            ?>
        </div>

        <div class="result">
            <?php
            // Hitung total kelulusan
            $lulus = 0;
            $tidak_lulus = 0;
            foreach ($siswa as $data) {
                $rata_rata = ($data['matematika'] + $data['bahasa_inggris'] + $data['ipa']) / 3;
                if ($rata_rata >= 75) {
                    $lulus++;
                } else {
                    $tidak_lulus++;
                }
            }
            echo "<p>Total Lulus: {$lulus} 🎉</p>";
            echo "<p>Total Tidak Lulus: {$tidak_lulus} 😢</p>";
            ?>
        </div>
    </div>
</body>
</html>
