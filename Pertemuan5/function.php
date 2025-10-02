<?php
// membuat fungsi dengan parameter default
function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Hamdana", "Hallo");

echo "<br>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

// memanggil tanpa mengisi parameter salam (menggunakan default)
perkenalan($saya);
?>