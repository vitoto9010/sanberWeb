<?php
echo "<pre>";
/*
Buatlah sebuah function perolehan_medali() yang menerima satu parameter berupa array multidimensi yang berisi nama negara dan perolehan medali.
function akan menghitung jumlah medali emas, perak dan perunggu per negara.
function akan me-return sebuah array berisi array asosiatif per-negara disertai jumlah masing-masing perolehan medal.
jika tidak ada data pada array yang diinputkan di parameter, maka function me-return "no data"
*/


/*
    alur program
    masuk function
    cek jika masukkan kosong
        jika kosong kembalikan "no data", function  terhenti
    jika tidak
        lakukan foreach untuk input, untuk mendapatkan nama2 negara
            simpan di list negara
        melakukan foreach kembali untuk array list_negara,
        deklarasi variabel untuk menyiompan nilai emas, perak, dan perunggu
        lakukan foreach keembali untuk array input,
            jika nilai negara  pada array input sama dengan negara dengan array list_negara,
                dilakukan if kembali untuk mendapatkan nilai medai emas, perak, atau perunggu. jika nilai sama maka lakukkan increment ke nilai emas, perak, atau perunggu.
        membuat array dengan data nama negara dan jumlah medali
        memasukkan array negara ke array kumpulan negara yang disimpan pada variabel perolehan
    keluar dari foreach
    return nilai dari variabel perolehan

    pseudo code
    function(array masukkan)
        foreach (array masukkan)
            masukkan nama negara ke array penampung nama negara
        membuat nilai negara unik
        foreach (list_negara)
            deklarasi variabel emas
            deklarasi variabel perak
            deklarasi variabel perunggu
            foreach (array masukkan)
                if (nilai negara di array masukkan == nilai negara di list negara)
                    if (emas)
                        emas+1
                    if (perak)
                        perak+1
                    if (perunggu)
                        perunggu+1
            array_penampung = array (nama negara, emas, perak, perunggu)
            array_perolehan_sebuah negara[] = array_penampung
        return array_perolehan_sebuah negara[]
*/

$masukkan = array(
    array("indonesia", "emas"),
    array("india", "perak"),
    array("korea selatan", "emas"),
    array("india", "perak"),
    array("india", "emas"),
    array("indonesia", "perak"),
    array("indonesia", "emas")
);

//echo $masukkan[1][1];
function perolehan_medali($input)
{
    if (empty($input)) {
        return "no data";
   }
    foreach ($input as $value) {
        $list_negara[] = $value[0];
        //echo $value[0]."----------------<br>";
    }
    $list_negara = array_unique($list_negara);
    foreach ($list_negara as $negara) {
        $emas = 0;
        $perak = 0;
        $perunggu = 0;
        foreach ($input as $value) {
            if ($value[0] == $negara) {
                if ($value[1] == "emas") {
                    $emas++;
                }
                if ($value[1] == "perak") {
                    $perak++;
                }
                if ($value[1] == "perunggu") {
                    $perunggu++;
                }
            }
        }
        $arr_negara = array(
            "negara"=> $negara,
            "emas"=>$emas,
            "perak"=>$perak,
            "perunggu"=>$perunggu
        );
        $perolehan[] = $arr_negara;

    }
    return $perolehan;
}

print_r(perolehan_medali($masukkan));
print_r(perolehan_medali([]));

echo "</pre>";
?>