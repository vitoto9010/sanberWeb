<?php

function skor_terbesar($arr)
{
    echo "<pre>";
    foreach ($arr as $siswa) {
        $list_kelas[] = $siswa["kelas"];
    }
    $list_kelas = array_unique($list_kelas);
    foreach ($list_kelas as $kelas) {
        $besar = 0;
        foreach ($arr as $siswa) {
            if ($siswa["kelas"] == $kelas) {
                if ($siswa["nilai"] > $besar) {
                    $besar = $siswa["nilai"];
                    $best_score[$kelas] = $siswa;
                }
            }
        }
    }
    print_r($best_score);
    echo "</pre>";
}


// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
