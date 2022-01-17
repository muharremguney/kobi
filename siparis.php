
<!DOCTYPE html>
<html>
<head>
<title>STOK DURUMU VE TAKİP SİSTEMİ</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
body{
	margin:0px;
	padding:0px;
	position:absolute;
	
	
}
.üst{
	background:#424242;
	width:1515px;
	height:80px;
	

	
	
}
.sidebar{
    background:#757575;
    width: 250px;
    height: 900px;
    float: left;
	z-index: 2;
	position:absolute;
	
	
	
}
.anasayf{
	border-radius: 25px;
	padding-top:10px;
	margin-left:5px;
	



}
.mahalleler{
	padding-top:20px;
	margin-left:5px;
	
}
.harita{
	padding-top:20px;
	margin-left:5px;
}
.bune{
	padding-top:20px;
}
.bas{
	background:#000;
	width:1500px;
	height:40px;
    float:left;
    position:absolute;
}
.bas #genc{
	margin-left:1300px;
	position:absolute;

}
.bas span{
	color:white;
    padding-top:10px;
	padding-left:600px;
	font-family:georgia;
	font-size:20px;
}
.content{
	width:1515px;
	height:900px;
	background:#CFD8DC;

}
.content .bune{
	margin-left:500px;
	padding-top:100px;
}
.mah{
	margin-left:900px;
	padding-top:80px;	

}
.mah label{
	border-style:inset;
	border-color:grey;
}
.parksay{
	margin-left:900px;
	padding-top:200px;
	position:absolute;
	height:0px;

}
.parksay label{
		border-style:inset;
		border-color:purple;
}
#result{
	margin-top:500px;
	margin-left:150px;
	background:#fff;
	width:400px;
	height:250px;
    text-align: center;
    border-style:ridge;
	position:absolute;


}
.eksik {
	margin-left:150px;
	display:flex;
	margin-top:800px;
	position:absolute;
}
#d4a{
	margin-left:600px;
	margin-top:750px;
	position:absolute;
}
.yıl{
	margin-top:500px;
	margin-left:900px;
	background:#912cee;
	color:white;
	width:400px;
	height:250px;
    text-align: center;
	border-style: ridge;
	position:absolute;
}
.deneme{
	margin-left:900px;
	margin-top:80px;
}
#buton{
	margin-top:300px;
	margin-left:50px;
	solid:black;
	background:white;
}

.deneme span{
	margin-top:300px;
	border-style:inset;
	border-color:white;
	
}
#get{
	solid:#4CAF50;
	background:white;

}


</style>
<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function ana()
{
    pencereAc("anasayfa.php");
}
</script>
<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function ekle()
{
    pencereAc("yeni.php");
}
</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function pencereAcTest()
{
    pencereAc("ürün.php");
}
</script>
<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function sp()
{
    pencereAc("siparisekle.php");
}

</script>

<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function st()
{
    pencereAc("stok.php");
}

</script>

<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function siparis()
{
    pencereAc("siparis.php");
}

</script>
<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function tarih()
{
    pencereAc("tarih.php");
}

</script>

<script>
$("#d4a").click(function(){
   $("#db4b").animate({
      height:'toggle'
   });
 });
</script>








</head>

<body>
    <div id="piechart" style="position:absolute; width:700px; height:400px; margin-left:800px; margin-top:200px; chartArea.backgroundColor:red;"></div>
<div class="üst">

</div>
<div class="sidebar"> 
        <div class="anasayf">
	    <button id="an" onClick="ekle()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px; "> ÜRÜN EKLEME</button>
	    </div>
		<div class="mahalleler"> 
		
		<input type="button"  value="ÜRÜNLER" onClick="pencereAcTest()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px; "/>
		</div>
		<div class="harita">
		<input type="submit" value="SİPARİŞLER" onClick="siparis()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px;  "/></div>
		<div class="harita">
		<input type="submit" value="STOK DURUMU" onClick="st()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px;"/></div>
		<div class="harita">
		<input type="submit" value="SİPARİŞ EKLEME" onClick="sp()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px; "/></div>
		<div class="harita">
		<input type="submit" value="TARİH ANALİZİ" onClick="tarih()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px;"/></div>
		<div class="harita">
		<input type="submit" value="ANASAYFA" onClick="ana()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px;"/></div>
		
		<div class=""></div>
		
		
		
</div>


	   
	   
<div class="content">
<div class="getir">	
<br><br>
<table border="0" width='950px' height='30px' align="center"> 
	<tr>
		
		<th bgcolor="#ffffff"><i>Ürün Adı</th>
		<th bgcolor="#ffffff"><i>Mevcut Ürün Miktarı</th>
		<th bgcolor="#ffffff"><i>Çıkan Ürün Miktarı</th>
		<th bgcolor="#ffffff"><i>Çıkış Tarihi</th>
		<th bgcolor="#ffffff"><i>Ürün Alış Fiyatı</th>
		<th bgcolor="#ffffff"><i>Ürün Çıkış Fiyatı</th>
		<th bgcolor="#ffffff"><i>Ürün Adet Karı</th>
		<th bgcolor="#ffffff"><i>Ürün Toplam Kar</th>
		
		</tr>
<?php 
$baglanti=mysqli_connect("localhost","root","","muharrem");
$baglanti->set_charset("utf8");
//echo "<table border='0' width='500px' height='600px' align='center'>";
$sql="SELECT cikan_urun.cikis_id, urun.urun_ad, mevcut_stok.mevcut_miktar,cikan_urun.cikis_miktar, cikan_urun.cikis_tarih, urun.alis_fiyat, cikan_urun.cikis_fiyat,(cikan_urun.cikis_fiyat-urun.alis_fiyat) AS edilen_kar, (cikan_urun.cikis_miktar *(cikan_urun.cikis_fiyat-urun.alis_fiyat)) AS toplam_kar
FROM cikan_urun,urun,satilan_urun,mevcut_stok,mevcut_urun
WHERE urun.urun_id=satilan_urun.urun_id AND satilan_urun.cikis_id=cikan_urun.cikis_id AND urun.urun_id = mevcut_urun.urun_id AND mevcut_urun.mevcut_id = mevcut_stok.mevcut_id";
$sorgu=mysqli_query($baglanti,$sql);
$a="TL";
$i=10;
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
    echo "<tr>";
	echo "<td align='center'>"."<font face='Cursive'>".$sonuc["urun_ad"]."</td>";
	echo"<td align='center'>"."<font face='Cursive'>".$sonuc["mevcut_miktar"]."</td>";
	echo "<td align='center'>"."<font face='Cursive'>".$sonuc["cikis_miktar"]."</td>";
	echo "<td align='center'>"."<font face='Cursive'>".$sonuc["cikis_tarih"]."</td>";
	echo "<td align='center'>"."<font face='Cursive'>".$sonuc["alis_fiyat"]."</b>"."$a"."</td>";
	echo "<td align='center'>"."<font face='Cursive'>".$sonuc["cikis_fiyat"]."</b>"."$a"."</td>";
	echo "<td align='center'>"."<b>"."<font face='Cursive'>".$sonuc["edilen_kar"]."</b>"."$a"."</td>";
	echo "<td align='center'>"."<b>"."<font face='Cursive'>".$sonuc["toplam_kar"]."</b>"."$a"."</td>";
	echo "</tr>";
 }

?></div>


<div class="top" >

<?php 
$baglanti=mysqli_connect("localhost","root","","muharrem");
$baglanti->set_charset("utf8");
$sql="SELECT SUM((cikan_urun.cikis_miktar *(cikan_urun.cikis_fiyat-urun.alis_fiyat))) AS ciro
FROM cikan_urun,urun,satilan_urun,mevcut_stok,mevcut_urun 
WHERE urun.urun_id=satilan_urun.urun_id AND satilan_urun.cikis_id=cikan_urun.cikis_id AND urun.urun_id = mevcut_urun.urun_id AND mevcut_urun.mevcut_id = mevcut_stok.mevcut_id";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	
	echo"<tr>";
	//echo "<td colspan=6> TOPLAM CİRO </td>";
	echo"<td colspan=7>".""."<td>";
	echo"<b>"."<font face='Cursive'>"."Ciro:"."<font color=red>".$sonuc["ciro"]."</b>"."$a"."</font>"."</font>";
	echo"</tr>";

 }

?>
</div>

















	   
	   
	   
	   </div>


</body>



























</html>








