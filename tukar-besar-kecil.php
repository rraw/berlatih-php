<?php
function tukar_besar_kecil($string)
// buatlah sebuah file dengan nama tukar-besar-kecil.php.
// Di dalam file tersebut buatlah function dengan nama tukar_besar_kecil yang menerima parameter berupa string.
// function akan mengembalikan sebuah string yang sudah ditukar ukuran besar dan kecil per karakter yang ada di parameter.
// Contohnya jika parameter “pHp” maka akan mengembalikan “PhP”.
{
    $abjad = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ  !!--..,,??//++==(())__00112233445566778899";
    $output = "";
    for ($i =0; $i < strlen($string); $i++){
        $posisi = strpos($abjad, $string[$i]);
        if ($posisi%2 == 0){
            $output = $output . substr($abjad, $posisi + 1, 1);
        }
        elseif ($posisi%2 == 1){
            $output = $output . substr($abjad, $posisi - 1, 1);
        }
    }
    return $output . "<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>