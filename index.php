<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LibLoader</title>

	<link rel="stylesheet" type="text/css" href="lib/libloader.css">
	<script type="text/javascript" src="lib/libloader.js"></script>
</head>
<body>
		
	<div class="container">
		
		<div class="row">
	
			<div class="span12 LibLoader-Main img-polaroid">
				
				<h3>LibLoader v0.1</h3>
				<hr>

				<h5 class="muted">1. Perkenalan / Introduction</h5>
				<hr>
<pre>Pernah ga sih ngerasa capek, setiap bikin file css atau javascript, harus nge-load file nya manual?
mungkin kalo cuma 1 file sih masih enak, gimana kalo file css atau javascript nya udah puluhan? ratusan? ribuan?
nah dari kemalasan itu gw terinspirasi buat bikin library yg otomatis load file css atau javascript
</pre>
<br>
				<h5 class="muted">2. Bagaimana ini Bekerja?  / How does it Work?</h5>
				<hr>
	
<pre>Library ini bekerja dengan cara mengambil semau file dengan ekstensi tertentu (.css / .js) dari folder yang sudah di tentukan
oleh user secara dinamis, dan di gabung menjadi 1 file, lalu di load ke dalam head web

</pre>
<br>

				<h5 class="muted">3. Cara Menggunakan / How to Use</h5>
				<hr>
<pre>library ini cukup mudah untuk di gunakan,
1. include file <code>libloader.class.php</code> ke dalam web kamu, mungkin akan lebih baik di dalem tag head
<pre>
	include "lib\libloader.class.php";
</pre>

2. setelah itu kita pakai class yang sudah kita include
<pre>
	$lib = new libloader;
</pre>
$lib bisa di ganti dengan text apapun, (seperti $Slave atau $Babu)

3. lalu tentukan dari letak folder mana saja file .css atau .js akan di load
<pre>
	$lib->Folder = [
			'css/',
			'js/',
			'belajar/sekolah/matpel/ipa/biologi/',
			];
</pre>

4. lalu jalan kan fungsi $lib->load(); di dalam tag head web kamu :)
<pre>

	echo $lib->load();

</pre>

5. setelah semua berhasil di lalukan (kalo ga ada bug, kalo ada yg maklum namanya juga baru v0.1)
   web kamu akan me-load 1 file .js dan 1 file .css
   2 file itu merupakan gabungan dari file file yg ada di dalam folder yang telah kamu tentukan
<img src="img/FinalStep.png" alt="" class="img-polaroid">
</pre>
<br>
				<h5 class="muted">4. Konfigurasi Mistik / Misc Configuration</h5>
				<hr>
<pre>
saat ini hanya ada beberapa settingan yang bisa di ubah,
mungkin di versi mendatang gw bakal tambahin ( kalo gw inget sama kalo gw niat )

<pre>
1. $lib->auto_create_folder( [boolean(true/false) , default : false ] );
   kegunaan :
   kalo folder yang kita setting ga ada, nanti dia bikin folder sendiri, kalo ga salah
</pre>

</pre>


<br>
<h5 class="muted">4. Penutup / Closing</h5>
				<hr>
<pre>
yak, itulah library simple yang iseng iseng gw buat dalam waktu senggang, h3h3,
kalo ada bug kasih tau ya :)

</pre>
<div class="pull-right">Ahmad Zuhdi ~ </div>
			</div>

		</div>

	</div>

</body>
</html>