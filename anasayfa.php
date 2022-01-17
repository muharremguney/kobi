
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
<table border="0" width='800px' height='50px' align="center"> 
<td align=center colspan="4"> <font size=4 color=red face='Cursive'> <b> <u> Bilgilendirme</u> </b></td>
	<tr>
		<th bgcolor="#FFFDE7"><i>Toplam Ciro</th>
	
<?php 
$baglanti=mysqli_connect("localhost","root","","muharrem");
$baglanti->set_charset("utf8");

$sql="SELECT SUM((cikan_urun.cikis_miktar *(cikan_urun.cikis_fiyat-urun.alis_fiyat))) AS ciro
FROM cikan_urun,urun,satilan_urun,mevcut_stok,mevcut_urun 
WHERE urun.urun_id=satilan_urun.urun_id AND satilan_urun.cikis_id=cikan_urun.cikis_id AND urun.urun_id = mevcut_urun.urun_id AND mevcut_urun.mevcut_id = mevcut_stok.mevcut_id";
$sorgu=mysqli_query($baglanti,$sql);
$b=" TL";
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){

	echo "<td align='center' bgcolor=#FFF9C4>"."<font face='Cursive'>"."<font color=red>".$sonuc["ciro"]."</font>"."$b"."</td>";	
	echo '</tr>';
	
	
	
	

 }

?></div>

	   
	   
	   
	   </div>


</body>




	<tr>
		<th bgcolor="#FFFDE7"><i>Toplam Ürün Sayısı</th>
	

<?php 
$baglanti=mysqli_connect("localhost","root","","muharrem");
$baglanti->set_charset("utf8");
$sql="SELECT COUNT(urun.urun_id) AS sayi
FROM urun";
$sorgu=mysqli_query($baglanti,$sql);
$a=" Gün Kaldı";
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){

	echo "<td align='center' bgcolor=#FFF9C4>"."<font face='Cursive' color=red>".$sonuc["sayi"]."</font>"."<font face='Cursive'>"." Kalem"."</td>";
	echo '</tr>';
	
 }

?>


	<tr>
		<th bgcolor="#FFFDE7"><i>Toplam Ürün Sayısı</th>
	

<?php 
$baglanti=mysqli_connect("localhost","root","","muharrem");
$baglanti->set_charset("utf8");
$sql="SELECT SUM(mevcut_stok.mevcut_miktar) AS tmiktar
FROM mevcut_stok";
$sorgu=mysqli_query($baglanti,$sql);
$a=" Gün Kaldı";
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){

	echo "<td align='center' bgcolor=#FFF9C4>"."<font face='Cursive' color=red>".$sonuc["tmiktar"]."</font>"."<font face='Cursive'>"." Adet"."</td>";
	echo '</tr>';
	
 }

?>
	<tr>
		<th bgcolor="#FFFDE7"><i>Tarihi Geçen Ürün Sayısı</th>
	

<?php 
$baglanti=mysqli_connect("localhost","root","","muharrem");
$baglanti->set_charset("utf8");
$sql="SELECT COUNT(urun.urun_id) as gun
FROM urun
WHERE TIMESTAMPDIFF(DAY,CURDATE(),urun.skt)<0";
$sorgu=mysqli_query($baglanti,$sql);
$a=" Gün Kaldı";
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){

	echo "<td align='center' bgcolor=#FFF9C4>"."<font face='Cursive' color=red>".$sonuc["gun"]."</font>"."<font face='Cursive'>"." Ürün"."</td>";
	echo '</tr>';
	
 }

?>

<tr>
		<th bgcolor="#FFFDE7"><i>Sipariş Verilen Ürün Sayısı</th>
	

<?php 
$baglanti=mysqli_connect("localhost","root","","muharrem");
$baglanti->set_charset("utf8");
$sql="SELECT COUNT(cikan_urun.cikis_id) AS cik
FROM cikan_urun";
$sorgu=mysqli_query($baglanti,$sql);
$a=" Gün Kaldı";
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){

	echo "<td align='center'bgcolor=#FFF9C4 >"."<font face='Cursive' color=red>".$sonuc["cik"]."</font>"."<font face='Cursive'>"." Ürün"."</td>";
	echo '</tr>';
	
 }

?>

<th bgcolor="#FFFDE7"><i>Stokta Olmayan Ürün Sayısı</th>
	

<?php 
$baglanti=mysqli_connect("localhost","root","","muharrem");
$baglanti->set_charset("utf8");
$sql="SELECT COUNT(urun.urun_id) AS bitik
FROM urun, mevcut_urun, mevcut_stok
WHERE urun.urun_id = mevcut_urun.urun_id AND mevcut_urun.mevcut_id = mevcut_stok.mevcut_id AND mevcut_stok.mevcut_miktar <= 0";
$sorgu=mysqli_query($baglanti,$sql);
$a=" Gün Kaldı";
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){

	echo "<td align='center' bgcolor=#FFF9C4>"."<font face='Cursive' color=red>".$sonuc["bitik"]."</font>"."<font face='Cursive'>"." Ürün"."</td>";
	echo '</tr>';
	
 }

?>
</table>

<br><br>
<table border="0" width='800px' height='50px' align="center"> 
<td align=center colspan="4"> <font size=4 color=blue face='Cursive'> <b> Satılan Ürünlerin Kar Marjları</td>
	<tr>
		<th bgcolor="#ffffff"><i>Ürün Adı</th>
		<th bgcolor="#ffffff"><i>Kar Marjı</th>
	</tr>
<?php 
$baglanti=mysqli_connect("localhost","root","","muharrem");
$baglanti->set_charset("utf8");
$sql="SELECT urun.urun_ad, ROUND(((cikan_urun.cikis_fiyat-urun.alis_fiyat)/cikan_urun.cikis_fiyat)*100) As yuzde
FROM cikan_urun,urun,satilan_urun,mevcut_stok,mevcut_urun
WHERE urun.urun_id=satilan_urun.urun_id AND satilan_urun.cikis_id=cikan_urun.cikis_id AND urun.urun_id = mevcut_urun.urun_id AND mevcut_urun.mevcut_id = mevcut_stok.mevcut_id";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	echo '<tr>';
	echo "<td align='center'>"."<font face='Cursive'>".$sonuc["urun_ad"]."</td>";
	echo "<td align='center'>"."<font face='Cursive'>"."% ".$sonuc["yuzde"]."</td>";
	echo '</tr>';
	
	
	
	

 }

?></div>





	   
	   
	   
	   </div>


</body>
</table>



</html>


