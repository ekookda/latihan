<?php
function jumlah($a, $b)
{
    $hasil = $a + $b;
    return $hasil;
}

function pangkat($m, $n)
{
    // $m->bilangan, $n->pangkat
    $hasil = 1;
    for ($i = 1; $i <= $n; $i++) { 
        $hasil *= $m;
    }
    return $hasil;
}

function faktorial($m)
{
    $hasil = 1;
    if ($m <= 1) {
        return $hasil;
    } else {
        $hasil = 1;
        for ($i = $m; $i >= 1; $i--) { 
            $hasil *= $i;
        }
        return $hasil;
    }
}

function ganjil($start, $end)
{
    if ($start > $end) {

    } else {
        $hasil = 0;
        for ($x = $start; $x <= $end; $x++) {
            if ($x % 2 != 0) {
                $countHasil[] = $hasil;
                echo "$x adalah bilangan ganjil <br>";
                $hasil += $x;
            }
        }
    }
    return "Jumlah bilangan Ganjil antara $start sampai dengan $end adalah ".count($countHasil)." dan total jumlahnya adalah $hasil";
}

function intervalTime($time_start, $time_end)
{
    $waktu1 = explode(':', $time_start);
    $jam1   = $waktu1[0];
    $menit1 = $waktu1[1];
    $detik1 = $waktu1[2];
    $awal   = mktime($jam1, $menit1, $detik1);

    $waktu2 = explode(':', $time_end);
    $jam2   = $waktu2[0];
    $menit2 = $waktu2[1];
    $detik2 = $waktu2[2];
    $akhir  = mktime($jam2, $menit2, $detik2);

    $selisih= $akhir-$awal;

    // $selisih = $time_start->diff($time_end)->format('%s');

    return "Selisih kedua waktu adalah ".$selisih." detik";
}

function rata_nilai($nilai1, $nilai2)
{
    return $rata = ($nilai1 + $nilai2)/2;
}
