<?php

$baglanti=mysqli_connect("localhost","root","","muharrem");
$baglanti->set_charset("utf8");
if($baglanti){
    if ($_POST) {
        if(strip_tags(trim(isset($_POST["urun_id"])))){
            $urun_id=$_POST["urun_id"];
        }
		   if(strip_tags(trim(isset($_POST["urun_ad"])))){
            $urun_ad=$_POST["urun_ad"];
			
        }
        		   if(strip_tags(trim(isset($_POST["uretim_tarih"])))){
            $uretim_tarih=$_POST["uretim_tarih"];
        }
        		   if(strip_tags(trim(isset($_POST["skt"])))){
            $skt=$_POST["skt"];
        }
		 if(strip_tags(trim(isset($_POST["alis_fiyat"])))){
            $alis_fiyat=$_POST["alis_fiyat"];
        }
        		   


        $sorgu=mysqli_query($baglanti,"INSERT INTO urun(urun_id,urun_ad,uretim_tarih,skt,alis_fiyat) VALUES
            ('".$urun_id."','".$urun_ad."','".$uretim_tarih."','".$skt."','".$alis_fiyat."')");
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