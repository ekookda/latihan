<?php

class Library
{

    public function kabisat($tahun)
    {
        if ($tahun % 4 == 0)
        {
            return "Tahun $tahun adalah tahun kabisat";
        } else {
            return "Tahun $tahun bukan tahun kabisat";
        }
    }

    public function honor($jmlJamKerja)
    {
        $upahPerJam     = 2000;
        $maxJamKerja    = 48;
        $jamLembur      = 0;
        $upahLembur     = 0;

        if ($jmlJamKerja > $maxJamKerja) {
            $jamLembur  = $jmlJamKerja - $maxJamKerja;
            $upahLembur = 3000;
            $upahLembur *= $jamLembur;
            $totalUpahKerja = ($maxJamKerja * $upahPerJam) + $upahLembur;
        } else {
            $totalUpahKerja = $jmlJamKerja * $upahPerJam;
        }

        return "Total gaji anda adalah Rp ".number_format($totalUpahKerja, 0, '', '.');
    }

    public function beratbadan($tinggi, $berat, $gender)
    {
        if ($gender == 'Pria') {
            // Rumus Hitung Berat Badan Ideal Pria
            $beratIdeal = ($tinggi - 100)-(10/100*($tinggi-100));
        } else {
            // Rumus Hitung Berat Badan Ideal Wanita
            $beratIdeal = ($tinggi - 100)-(15/100*($tinggi-100));
        }
        return $beratIdeal;
    }

    public function usia($usia)
    {
        $status = '';

        if ($usia >=0 && $usia <=5) {
            $status = 'Balita';
        } elseif ($usia >= 6 && $usia <= 16) {
            $status = 'Anak-anak';
        } elseif ($usia >=17 && $usia <= 50) {
            $status = 'Dewasa';
        } else {
            $status = 'Tua';
        }
        return $status;
    }

    public function gaji_golongan($golongan = NULL, $jamKerja)
    {
        $maxJamKerja= 48;
        $jamLembur  = 0;
        $upahLembur = 0;

        # mencari jam dan upah lembur
        if ($jamKerja > $maxJamKerja) {
            $jamLembur = $jamKerja - $maxJamKerja;
            $upahLembur= 3000*$jamLembur;
        }

        # mencari upah lembur berdasarkan golongan
        switch ($golongan) {
            case 'A':
                $upahPerJam = 4000;
                $totalUpah  = ($upahPerJam * ($jamKerja-$jamLembur) + $upahLembur);
                break;
            case 'B':
                $upahPerJam = 5000;
                $totalUpah  = ($upahPerJam * ($jamKerja-$jamLembur) + $upahLembur);
                break;
            case 'C':
                $upahPerJam = 6000;
                $totalUpah  = ($upahPerJam * ($jamKerja-$jamLembur) + $upahLembur);
                break;
            case 'D':
                $upahPerJam = 7500;
                $totalUpah  = ($upahPerJam * ($jamKerja-$jamLembur) + $upahLembur);
                break;
            default:
        }
        return $totalUpah;
    }

    public function honorGaji($jamKerja)
    {
        $maxJamKerja= 48;
        $jamLembur  = 0;
        $upahLembur = 0;

        switch ($jamKerja) {
            case ($jamKerja > $maxJamKerja):
                $jamLembur = $jamKerja - $maxJamKerja;
                $upahLembur= 3000*$jamLembur;
                $totalUpah = (2000*$maxJamKerja) + $upahLembur;
                break;
            default:
                $totalUpah = ($jamKerja*2000) + $upahLembur;
        }
        return $totalUpah;
    }

}