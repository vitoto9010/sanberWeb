<?php
echo "<pre>";
/*
Buatlah sebuah function hitung() yang menerima satu parameter berupa string.
Function akan menghitung hasil sesuai string tersebut dan mengembalikan nilai hasil perhitungannya.
String tersebut hanya menerima 1 operasi perhitungan saja yaitu operasi sebagai berikut: (*) perkalian, (:) pembagian, (+) penjumlahan, (-) pengurangan, dan (%) modulus.
*/


/*
    alur  program
    fungsi  menerima string masukkan
    dideklarasikan variabel pendukung untuk menyimpan nilai angka pertama, keduda, dan operator
    dilakukan  looping untuk melihat semua isi string
    jika ditemukan operator, makan nilai operator dimasukkan ke variabel operand
    jika tidak ditemukkan salah satu dari operator, makan fungsi melakukan pengecekan kembali apakah  nilai operand kosong untuk menentukan angka yang ditemukkan adalah angka sebelum operand atau seesudah
    kemudian dilakukan pemberian nilai ke angka 1 dan 2
    for terhenti

    berikutnya dilakukan pengubahan nilai string angka ke integer

    lalu dilakukan switch case untuk menentukan operasi matematikanya berdasarkan nilai dari operand, hasil disimpan pada variabel hasil_itung
    return hasil itung


    function hitung($input)
    {
        for (panjang dari str masukkan){
            if ($input[$i] == operator){
                $operand = $input[$i]
            } else {
                if (empty($operand)){
                    $angka1 = $input[$i]
                } else {
                    $angka2 = $input[$i]
                }
            }    
        }
        $angka1 = (int)$angka1;
        $angka2 = (int)$angka2;
        switch ($operand) {
        case '*':
            $hasil_hitung = $angka1*$angka2;
            break;

        case ':':
            $hasil_hitung = $angka1/$angka2;
            break;

        dst
        }

        return $hasil_hitung
    }
*/
function hitung($input)
{
    $angka1 = "";
    $angka2 = "";
    $operand = "";
    for ($i=0; $i < strlen($input); $i++) { 
        //echo $input[$i]."awal<br>";
        if ($input[$i] == "*" || $input[$i] == ":" || $input[$i] == "+" || $input[$i] == "-" || $input[$i] == "%") {
            $operand = $input[$i];
            //echo $operand."masuk3<br>";
        } else {
            if (empty($operand)) {
                $angka1 .= $input[$i];
                //echo $angka1."masuk1<br>";
            } else {
                $angka2 .= $input[$i];
               // echo $angka2."masuk2<br>";
            }
        }
    }
    $angka1 = (int)$angka1;
    $angka2 = (int)$angka2;
    //$operand = ;
    $hasil_hitung = 0;
    switch ($operand) {
        case '*':
            $hasil_hitung = $angka1*$angka2;
            break;

        case ':':
            $hasil_hitung = $angka1/$angka2;
            break;

        case '+':
            $hasil_hitung = $angka1+$angka2;
            break;

        case '-':
            $hasil_hitung = $angka1-$angka2;
            break;
        
        case '%':
            $hasil_hitung = $angka1%$angka2;
            break;

        default:
            echo "false operand";
            break;
    }
    return $hasil_hitung;
}

echo hitung("102*2");
echo "<br>";
echo hitung("2+3");
echo "<br>";
echo hitung("100:25");
echo "<br>";
echo hitung("10%2");
echo "<br>";
echo hitung("99-2");
echo "<br>";


echo "</pre>";
?>