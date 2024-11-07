
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="kalyca" content="width=device-width, initial-scale=1">
	<title>Biodata Saya - www.kalyca.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="kotak">
 
		<div class="judul">
			<h1>BIODATA DIRI</h1>
		</div>
 
		<div class="blok">
 
			<h2>Informasi</h2>			
			
			<div class="kiri">
				<img src="{{ url('assets/img/'.$informasi->foto) }}">				
			</div>
 
			<div class="kanan">
				<table>
					<tr>
						<th>Nama</th>
						<th>:</th>
						<td>{{ $informasi->nama }}</td>
					</tr>
					<tr>
						<th>Tempat</th>
						<th>:</th>
						<td>{{ $informasi->tempat_lahir }}</td>
					</tr>
					<tr>
						<th>Tgl.Lahir</th>
						<th>:</th>
						<td>{{ date_format(date_create($informasi->tanggal_lahir), "d M Y") }}</td>
					</tr>
					<tr>
						<th>Agama</th>
						<th>:</th>
						<td>{{ $informasi->agama }}</td>
					</tr>
					<tr>
						<th>Alamat</th>
						<th>:</th>
						<td>{{ $informasi->alamat }}</td>
					</tr>
					<tr>
						<th>Email</th>
						<th>:</th>
						<td>{{ $informasi->email }}</td>
					</tr>
					<tr>
						<th>No.HP</th>
						<th>:</th>
						<td>{{ $informasi->hp }}</td>
					</tr>
					
				</table>
				
			</div>
 
		</div>		
 
		<div class="blok">
 
			<h2>Pendidikan</h2>			
			@php			
				$pendidikans = \Illuminate\Support\Facades\DB::table('pendidikans')->where('informasi_id', $informasi->id)->get();
			@endphp
			<div>
				<ul>
					@foreach($pendidikans as $pendidikan)
					<li><b>{{ $pendidikan->tahun_masuk }} - {{ $pendidikan->tahun_keluar }}</b> {{ $pendidikan->asal_sekolah }}</li>
					@endforeach
					
				</ul>
			</div>
 
		</div>
 
		<div class="blok">
 
			<h2>Warna Favorit</h2>
			
			<div>
				<ul>
					<li>
						<b>pink</b> 
					</li>
					<li>
						<b>white</b> 
					</li>
				</ul>
			</div>
 
		</div>
 
		<div class="blok">
 
			<h2>Lagu Favorite</h2>			
			
			<div>
				<ul>
					<li>die with a smile</li>
					<li>am i bothering you</li>
					<li>love is an open door</li>
					<li>walking back home</li>
					<li>cupid</li>
					<li>L</li>
					<li>serana</li>					
				</ul>
			</div>
 
		</div>
	</div>
</body>
</html>