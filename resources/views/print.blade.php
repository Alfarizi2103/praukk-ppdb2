<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download</title>
</head>
<body>
 
 <center>

     <h2>DATA SELURUH PPDB SMK SEMANGAT 45</h2>

 </center>

 <table border="1" style="text-align:center" align="center">
     <tr>
         <th>No</th>
         <th>No Daftar</th>
         <th>Nama Lengkap</th> 
         <th>Jenis Kelamin</th> 
         <th>Alamat Lengkap</th> 
         <th>Agama</th>
         <th>Asal SMP</th>
         <th>Jurusan</th>
         </tr>
         <?php 
         $no = 1;
        ?>
        @foreach($data as $datas)
     <tr>
            <th>{{ $no++ }}</th> 
            <td>{{ $datas->no_daftar }}</td>
			<td>{{ $datas->nama }}</td>
			<td>{{ $datas->jk }}</td>
			<td>{{ $datas->alamat }}</td>
            <td>{{ $datas->agama }}</td>
			<td>{{ $datas->asal_smp }}</td>
			<td>{{ $datas->jurusan }}</td>
     </tr>
     @endforeach
 </table>

 <script>
     window.print();
 </script>

</body>
</html> 
