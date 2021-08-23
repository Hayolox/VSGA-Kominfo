
<?php

function input($a, $b)
{
    if ($a == 0 || $b==0){
        
        return 'Hasil = tidak valid';
        
    } else {

        $hasil = $a / $b;        
        return 'Hasil = '.$hasil;

    }
}

echo input(1,1);

//EOF

