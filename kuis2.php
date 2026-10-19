<?php
function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

    return $nilaiAkhir;
}

$tugas = 80;
$uts = 80;
$uas = 87.5;

$nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);

if ($nilaiAkhir >= 70) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

echo "Nilai Akhir: " . rtrim(rtrim(number_format($nilaiAkhir, 2, '.', ''), '0'), '.') . "<br>";
echo "Status: " . $status;
?>