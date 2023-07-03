<?php
// Validasi Data
// Escape Karakter Khusus


// Data mahasiswa
$mahasiswa = [
    [
        "nama" => "Ibnu Rusdianto",
        "nim" => "203040012",
        "jurusan" => "Informatika"
    ],
    [
        "nama" => "Fakih",
        "nim" => "203040014",
        "jurusan" => "Sistem Informasi"
    ]
];

// Mengirimkan data dalam format JSON
$jsonData = json_encode($mahasiswa);

// Mengatur tipe konten dan header
header('Content-Type: application/json');
header('Content-Disposition: attachment; filename="data_mahasiswa.json"');

// Mengirimkan data JSON ke browser
echo $jsonData;
?>
