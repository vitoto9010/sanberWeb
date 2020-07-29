<?php
function ubah_huruf($string){
    $berubah = "";
    for ($i=0; $i < strlen($string); $i++) { 
        $huruf = $string[$i];
        $berubah .= ++$huruf;
    }
    echo "$berubah <br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>