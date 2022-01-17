<?php

$baglanti=mysqli_connect("localhost","root","","muharrem");
$baglanti->set_charset("utf8");
if($baglanti){
    if ($_POST) {
        if(strip_tags(trim(isset($_POST["cikis_id"])))){
            $cikis_id=$_POST["cikis_id"];
        }
		   if(strip_tags(trim(isset($_POST["urun_adi"])))){
            $urun_adi=$_POST["urun_adi"];
        }
        	if(strip_tags(trim(isset($_POST["cikis_miktar"])))){
            $cikis_miktar=$_POST["cikis_miktar"];
        }
        	if(strip_tags(trim(isset($_POST["cikis_tarih"])))){
            $cikis_tarih=$_POST["cikis_tarih"];
        }
        	if(strip_tags(trim(isset($_POST["cikis_fiyat"])))){
            $cikis_fiyat=$_POST["cikis_fiyat"];
        }



        $sorgu=mysqli_query($baglanti,"INSERT INTO cikan_urun (cikis_id,urun_adi,cikis_miktar,cikis_tarih,cikis_fiyat) VALUES
            ('".$cikis_id."','".$urun_adi."','".$cikis_miktar."','".$cikis_tarih."','".$cikis_fiyat."')");
        if ($sorgu==true) {
            echo "Kayıt veritabanına eklendi.";
			header( "refresh:2;url=yeni.php" ); 
        } else {
            echo "Hata:".$sorgu.$baglanti->error;
        }
		mysqli_close($baglanti);
    } else {
        echo "Veriler gelmedi";
    }
}



else { 
    die("bağlantı sağlanamadı");
}

?>