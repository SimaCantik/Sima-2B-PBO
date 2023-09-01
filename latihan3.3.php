<?php
echo "<p> TOKO PEGADAIAN SYARIAH <p>";
echo "<p> Jl Keadilan No 16 <p>";
echo "<p> Telp. 72353459 <p>";

//Program Penghitung Besaran Angsuran Hutang
echo "<p> Program Penghitung Besaran Angsuran Hutang <p>";

// Besaran Pinjaman
$besarPinjaman = 1000000; // Rp. 1.000.000

// Besar Bunga dalam persentase
$besarBungaPersen = 10;

// Lama angsuran dalam bulan
$lamaAngsuran = 5;

// Menghitung besar bunga dalam rupiah
$besarBunga = ($besarPinjaman * $besarBungaPersen) / 100;

// Menghitung total pinjaman
$totalPinjaman = $besarPinjaman + $besarBunga;

// Menghitung besaran angsuran per bulan
$besaranAngsuran = $totalPinjaman / $lamaAngsuran;

// Mencetak hasil
echo "Besaran Pinjaman : Rp. " . number_format($besarPinjaman, 0, ',', '.') . "<br>";
echo "Besar Bunga (%): " . $besarBungaPersen . "%<br>";
echo "Total Pinjaman : Rp. " . number_format($totalPinjaman, 0, ',', '.') . "<br>";
echo "Lama angsuran (bulan): " . $lamaAngsuran . "<br>";
echo "Besaran angsuran: Rp. " . number_format($besaranAngsuran, 0, ',', '.') . "<br>";
?>