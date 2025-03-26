<?php

$mahasiswa = [
    [
        "nama" => "Rifki Nurohmat",
        "nrp" => "243040054",
        "email" => "Rifki88@gmail.com",
        "jurusan" => "Tenik Informatika",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Gandul",
        "nrp" => "243040053",
        "email" => "Gandul1976@gmail.com",
        "jurusan" => "Tenik Informatika", 
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "Deni Firmasnyah",
        "nrp" => "243040052",
        "email" => "Deni12@gmail.com",
        "jurusan" => "Tenik Informatika", 
        "gambar" => "3.jpg"
    ],
    [
        "nama" => "Ripan Nurcahyo",
        "nrp" => "243040055",
        "email" => "Ripan76@gmail.com",
        "jurusan" => "Tenik Informatika", 
        "gambar" => "4.jpg"
    ],
    [
        "nama" => "Ilhamn Manaf",
        "nrp" => "243040056",
        "email" => "Ilham98@gmail.com",
        "jurusan" => "Tenik Informatika", 
        "gambar" => "5.jpg"
    ],
    [
        "nama" => "Bastian",
        "nrp" => "243040057",
        "email" => "Bastian336@gmail.com",
        "jurusan" => "Tenik Informatika", 
        "gambar" => "6.jpg"
    ],
    [
        "nama" => "Brayn",
        "nrp" => "243040058",
        "email" => "Brayn90@gmail.com",
        "jurusan" => "Tenik Informatika",
        "gambar" => "7.jpg"
    ],
    [
        "nama" => "Andhika Pranaja",
        "nrp" => "243040059",
        "email" => "Andhika234@gmail.com",
        "jurusan" => "Tenik Informatika",
        "gambar" => "8.jpg"
    ],
    [
        "nama" => "Aceng",
        "nrp" => "243040043",
        "email" => "Aceng77@gmail.com",
        "jurusan" => "Tenik Informatika",
        "gambar" => "9.jpg"
    ],
    [
        "nama" => "Ridho Maulana",
        "nrp" => "243040046",
        "email" => "Ridho84@gmail.com",
        "jurusan" => "Tenik Informatika",
        "gambar" => "10.jpg"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>