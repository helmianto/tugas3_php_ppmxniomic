<?php
$jumlah_tabungan = 150000;
$bunga = 12.5;
function hitungTabunganAkhir($jumlah_tabungan, $bunga){
    return (100 + $bunga) * $jumlah_tabungan / 100;
}

echo "Tabungan Awal = Rp. ". $jumlah_tabungan ."<br/>";
echo "Bunga Setahun = ". $bunga ." %<br/>";
echo "Total Tabungan Setahun = ...? <br/>";
echo "Jawaban : Rp. ". hitungTabunganAkhir($jumlah_tabungan, $bunga);


?>