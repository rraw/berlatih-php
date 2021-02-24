<?php
function tentukan_nilai($number)
// buatlah sebuah file dengan nama tentukan-nilai.php. Di dalam file tersebut buatlah function dengan nama
// tentukan_nilai yang menerima parameter berupa integer. dengan ketentuan jika paramater
// integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik”
// Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik”
// selain itu jika parameter number lebih besar sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup”
// selain itu maka akan mereturn string “Kurang”
{
    if ($number < 60){
        echo "Kurang <br>";
    }
    elseif ($number < 70){
        echo "Cukup <br>";
    }
    elseif ($number < 85){
        echo "Baik <br>";
    }
    elseif ($number <= 100){
        echo "Sangat Baik <br>";
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>