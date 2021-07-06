<?php 
$jarak = 360;
$kecepatan = 90;
function hitungWaktuTempuh($jarak, $kecepatan, $satuan){
    if($satuan == "jam"){
        return $jarak / $kecepatan;
    } elseif($satuan == "menit"){
        return $jarak / $kecepatan * 60;
    } elseif($satuan == "detik"){
        return $jarak / $kecepatan * 3600;
    }
}

echo "Jarak kota A - Z = ". $jarak ." Km<br/>";
echo "Kecepatan = ". $kecepatan ." Km/jam<br/>";
echo "Waktu tempuh = ...? <br/>";
echo "Jawaban : ". hitungWaktuTempuh($jarak, $kecepatan, "menit") . " Menit";

?>