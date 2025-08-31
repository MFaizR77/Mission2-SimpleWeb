<?php

$a =10;
$b =5;
for($i=1; $i<9; $i++) {
    $a = $a + $b;
    echo "\n";
    echo "$a";
}

$bil = 10;
while ($bil <= 50) {
    echo "$bil";
    echo "\n";
    $bil += 5;
}


$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

foreach ($buah as $b) {
    echo $b . "<br>";
}

$NilaiMHS = [
    "Ali" => 95,
    "Budi" => 82,
    "Cici" => 74,
    "Dian" => 63,
    "Eka" => 50
];

$NilaiMHSs = [
    "Ali" => "A",
    "Budi" => "B",
    "Cici" => "C",
    "Dian" => "D",
    "Eka" => "E"
];

foreach ($NilaiMHSs as $nama => $nilai) {
    echo "Nama: $nama";

    switch ($nilai) {
        case "A":
            echo " Sangat Baik";
            break;
        case "B":
            echo " Baik";
            break;
        case "C":
            echo " Cukup";  
            break;
        case "D":
            echo " Kurang";
            break;
        default:    
            echo " Sangat Kurang"; 
            break;
    } 
    echo "<br>";                    
}

foreach ($NilaiMHS as $nama => $nilai) {
    echo "Nama: $nama,";

    switch (true) {
        case ($nilai >= 90):
            echo " Nilai: A";
            break;
        case ($nilai >= 80):
            echo " Nilai: B";
            break;
        case ($nilai >= 70):
            echo " Nilai: C";
            break;
        case ($nilai >= 60):
            echo " Nilai: D";
            break;
        default:
            echo " Nilai: E";
    }
    echo "<br>";
}

?>