<?php

use function PHPSTORM_META\type;

function reverseString($kalimat) {
    $balik = "";
    $panjang = strlen($kalimat);
    for ($i = $panjang-1; $i >= 0; $i--) {
        $balik .= $kalimat[$i];
    }
    return $balik;
}

function palindrome_check($input) {
    $var_cek = reverseString(strval($input));
    if ($input == (int)$var_cek) {
        return true;
    } else {
        return false;
    }
    
}
        
function palindrome_angka($angka) {
    if (palindrome_check($angka)) {
        echo "$angka adalah palindrome, palindrome berikutnya : ";
    } else {
        echo "$angka bukan palindrome, palindrome berikutnya : ";
    }
    $i = 0;
    while ($i < 1) {
        $angka++;
        if (palindrome_check($angka)) {
            return $angka."<br>";
            $i++;
        }
    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>