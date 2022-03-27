<body>
<!-- Navbar -->
<nav class="container" align="center">
        <a href="{{url('index/tambah')}}">Pendaftaran</a>
        ||
        <a href="{{ route('index') }}">Hasil</a>
</nav>
<!-- End navbar -->
<h1 align="center">FORM PENDAFTARAN PPDB SMK SEMANGAT 45</h1>

	<form action="{{url('index/tambah')}}" method="post">
    <table align="center">
            <div class="d-flex justify-content-center">
		{{ csrf_field() }}
        <tr>
            <td>No daftar</td>
            <td>:</td>
            <td><input type="text" name="no_daftar" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" required="required"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select class="form-select" name="jk" class="jk" aria-label="Default select example">
                    <option disabled selected>Jenis Kelamin</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki-laki">Laki-laki</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" required="required"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><input type="text" name="agama" required="required"></td>
        </tr>
        <tr>
            <td>Asal smp</td>
            <td>:</td>
            <td><input type="text" name="asal_smp" required="required"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><select class="form-select" name="jurusan" class="jurusan" aria-label="Default select example" required>
                    <option disabled selected>Jurusan</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Tata Boga">Tata Boga</option>
                    <option value="Tata Busana">Tata Busana</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </td>
        </tr>
        <tr>
		    <td><input type="submit" value="simpan"></td>
        </tr>
	</form>

</body>
