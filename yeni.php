
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
	    <button id="an" onClick="window.location.reload(false)" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF;border-radius: 15px; "> ÜRÜN EKLEME</button>
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
	
	   	<div class="bune">
		<form action="ürüngetir.php" method="POST">
		<b>
		<table align="left">
		<tr>
		<td></td>
		<td> <center>
		<font face="Cursive" size="4" color=red> <i> ÜRÜN EKLE </i></font>
		</center>
		</td>
		</tr>
		<tr>
        <td> <font face="Cursive" size="4">ÜRÜN İD: </font> </td>
        <td><input type="text" name ="urun_id" style="width:200px; height:30px; border-style:none;"/></td>
		</tr>
		<tr>
        <td> <font face="Cursive" size="4">ÜRÜN ADI:</font></td>
        <td><input type="text" name ="urun_ad" style="width:200px; height:30px; border-style:none;"/></td>
		</tr>
		<tr>
        <td><font face="Cursive" size="4">ÜRETİM TARİHİ:</font><br></td>
        <td><input placeholder="GG.AA.YYYY" type="text" name ="uretim_tarih" style="width:200px; height:30px; border-style:none; "/></td>
		</tr>
		<tr>
        <td><font face="Cursive" size="4">SON KULLANMA TARİHİ:</font></td>
        <td><input placeholder="GG.AA.YYYY" type="text" name ="skt" style="width:200px; height:30px; border-style:none;"/></td>
		</tr>
		<tr>
        <td><font face="Cursive" size="4">ALIŞ FİYATI:</font></td>
        <td><input type="text" name ="alis_fiyat" style="width:200px; height:30px; border-style:none;"/></td>
		</tr>
		<tr>
		<td></td>
		<td> <input type="submit" value="Kaydet" style="width:204px; height:30px; border-style:none; background:#151635; color:white; "/> 
		</td>
		
		</table>
		
	
		
		</b>
		</div>
	   
	   
	   
	   </div>


</body>



























</html>