<?php
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array
// for(insisialisasi, kondisi terminasi, inkremen)
// inisialisasi = menentukan variabel awal
// kondisi terminasi = memberhentikan perulangan
// inkremen = supaya perulangan dapat maju atau mundur

for($i = 0; $i < 5; $i++) {
    echo "Hello World";
}

// mengecek kondisi terlebih dulu lalu dijalankan
$i = 0;
while($i <5){
    echo "Hello World <br>";
$i++;
}

// jalankan dulu, lalu cek kondisinya
// ketika kondisi bernilai false, setidaknya dijalankan satu kali
do {
    echo "Hello World <br>";
$i++;
} while ($i < 5);

?>