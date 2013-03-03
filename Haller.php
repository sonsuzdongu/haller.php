<?php
/**
 * @skatersercan'in Haller.js'inin PHP portu
 */

namespace Sonsuzdongu;

class Haller
{
    public static function get($isim, $hal)
    {
        $_isim = $isim = mb_strtolower($isim, "UTF-8");
        $isimEx = explode(" ", $isim);
        $isim = end($isimEx);
        $iyelik = "iyelik";
        $iHali = "i";
        $eHali = "e";
        $deHali = "de";
        $denHali = "den";
        $iEkleri = "ııiiuuüü";
        $sonHarf = substr($isim, -1);
        $istisna = ((int) preg_match("/[ei][^ıüoö]*[au]l$|alp$/", $isim)) * 2;

        preg_match_all("/[aıeiouöü]/", $isim, $sonSesliMatches);
        $sonSesli = end($sonSesliMatches[0]);

        $ek = "";
        if ($hal == $iyelik || $hal == $iHali) {
            $ek = mb_substr($iEkleri, mb_strpos('aıeiouöü', $sonSesli, 0, "UTF-8") + $istisna, 1, "UTF-8");
        } else {
            $ek = preg_match("/[aıou]/", $sonSesli) ? ($istisna ? "e" : "a") : "e";
        }

        if ($sonHarf == $sonSesli) {
            if ($hal == $iyelik) {
                $ek = 'n' . $ek;
            } elseif ($hal == $iHali || $hal == $eHali) {
                $ek = 'y' . $ek;
            }
        }

        if ($hal == $deHali || $hal == $denHali) {
            $ek = (preg_match("/[fstkçşhp]/", $sonHarf) ? "t" : "d") . $ek;
        }

        // Iyelik veya den hali icin ek in sonuna n harfi ekler
        if ($hal == $iyelik || $hal == $denHali) {
            $ek .= 'n';
        }

        return mb_convert_case($_isim, MB_CASE_TITLE, "UTF-8") . "'" . $ek;
    }
}
