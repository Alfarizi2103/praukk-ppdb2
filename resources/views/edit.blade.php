<body>
    <h3>Edit </h3>

	<a href="{{ route('index') }}"> Kembali</a>

    @foreach($data as $datas)
    <form action="" method="post">
    @csrf
        @method('PUT')
    <table align="center">
            <div class="d-flex justify-content-center">
		
        
        <tr>
            <td>No daftar</td>
            <td>:</td>
            <td><input type="text" name="no_daftar" required="required" value="{{ $datas->no_daftar }}"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" required="required" value="{{ $datas->nama }}"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select class="form-select" name="jk" class="jk" required="required" value="{{ $datas->jk }}">
                    <option disabled selected>Jenis Kelamin</option>
                    <option value="Perempuan" <?php if($datas->jk == 'Perempuan'){ echo 'selected';}?>>Perempuan</option>
                    <option value="Laki-laki" <?php if($datas->jk == 'Laki-laki'){ echo 'selected';}?>>Laki-laki</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" required="required" value="{{ $datas->alamat }}"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><input type="text" name="agama" required="required" value="{{ $datas->agama }}"></td>
        </tr>
        <tr>
            <td>Asal smp</td>
            <td>:</td>
            <td><input type="text" name="asal_smp" required="required" value="{{ $datas->asal_smp }}"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><select class="form-select" name="jurusan" class="jurusan" required value="{{ $datas->jurusan }}">
                        <option disabled selected>Jurusan</option>
                        <option value="Rekayasa Perangkat Lunak" <?php if($datas->jurusan == 'Rekayasa Perangkat Lunak'){ echo 'selected';}?>>Rekayasa Perangkat Lunak</option>
                        <option value="Tata Boga" <?php if($datas->jurusan == 'Tata Boga'){ echo 'selected';}?>>Tata Boga</option>
                        <option value="Tata Busana" <?php if($datas->jurusan == 'Tata Busana'){ echo 'selected';}?>>Tata Busana</option>
                        <option value="Multimedia" <?php if($datas->jurusan == 'Multimedia'){ echo 'selected';}?>>Multimedia</option>
                </select>
            </td>
        </tr>
        <tr>
		    <td><input type="submit" value="update"></td>
        </tr>
	</form>
    @endforeach

</body>
</html>