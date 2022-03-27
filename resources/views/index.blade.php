<body>

<!-- Navbar -->
<nav class="container" align="center">
        <a href="{{url('index/tambah')}}">Pendaftaran</a>
        ||
        <a href="{{ route('index') }}">Hasil</a>
</nav>
<!-- End navbar -->
<h1 align="center">PENDAFTARAN PPDB SMK SEMANGAT 45</h1>
 
	<table border="1" align="center">
		<tr>
			<th>No Daftar</th>
			<th>nama</th>
			<th>jk</th>
			<th>Alamat</th>
            <th>Agama</th>
            <th>Asal SMP</th>
            <th>Jurusan</th>
			<th>Opsi</th>
		</tr>
		@foreach($data as $datas)
		<tr>
			<td>{{ $datas->no_daftar }}</td>
			<td>{{ $datas->nama }}</td>
			<td>{{ $datas->jk }}</td>
			<td>{{ $datas->alamat }}</td>
            <td>{{ $datas->agama }}</td>
			<td>{{ $datas->asal_smp }}</td>
			<td>{{ $datas->jurusan }}</td>
            <td>
			<a href="/index/edit/{{ $datas->id }}">Edit</a>
			|
			<a href="/index/hapus/{{ $datas->id }}">Hapus</a>
		</tr>
			</td>
</tr>
@endforeach

</table>
<a href="/pdf" class="btn btn-danger">Export PDF</a>

</body>