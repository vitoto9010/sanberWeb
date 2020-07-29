<?php
function pasangan_terbesar($angka)
{
    $besar = $angka % 100;
    while ($angka >= 10) {
        $angka /= 10;
        $next = $angka % 100;
        if ($next > $besar) {
            $besar = $next;
        }
    }
    echo $besar."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
