<?php
$namalengkap = $_POST['nama_lengkap'];

$nim = $_POST['nim'];

$nilai_keaktifan = $_POST['nilai_keaktifan'];

$nilai_tugas = $_POST['nilai_tugas'];

$nilai_quis = $_POST['nilai_quis'];

$nilai_uts = $_POST['nilai_uts'];

$nilai_uas = $_POST['nilai_uas'];

$nilai_akhir=($nilai_keaktifan*0.1)+($nilai_tugas*0.2)+($nilai_quis*0.3)+($nilai_
uts*0.4)+($nilai_uas*0.5);

echo("<b>Nama:</b> ");
echo($namalengkap) ;
echo("<br/>");
echo("<b>NIM:</b> ");
echo($nim );
echo("<br/>");
echo("<b>Nilai Akhir: </b>");
echo($nilai_akhir );
echo("<br/>");
if ($nilai_akhir>=80)
echo("<b>Huruf :</b> A");
elseif ($nilai_akhir>=70)
 echo("<b>Huruf :</B> B");
elseif ($nilai_akhir>=50)
echo("<b>Huruf :</b> C");
elseif ($nilai_akhir>=40)
echo("<b>Huruf :</b> D");
else
echo("<b>Huruf :</b> E");
?>