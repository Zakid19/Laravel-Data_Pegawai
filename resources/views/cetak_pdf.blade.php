<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <div class="container mt-5">
        <center>
            <h5>Laporan Data Pegawai</h4>
        </center>
        <div class="d-flex justify-content-end mb-4">
            {{-- <a class="btn btn-primary" href="{{ route('createPdf') }}">Export to PDF</a> --}}
        </div>

        <table class='table table-bordered'>
            <thead class="bg-primary">
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $data)
                    <tr>
                        <th scope="row">{{ $data->nama_lengkap }}</th>
                        <td>{{ $data->ttl }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->tgll }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
