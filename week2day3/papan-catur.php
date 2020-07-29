<?php
echo "<pre>";
function papan_catur($angka) {
    for ($i=1; $i <= $angka; $i++) {
        if (($i % 2) == 1) {
            echo "#";
        }
        for ($j=1; $j < $angka ; $j++) {
            echo " #";
        }
        echo "<br>";
    }
    echo "<br><br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
 */

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

echo "</pre>";