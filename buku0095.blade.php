<!DOCTYPE html>
<html>
<head>
	<title>Export Laporan Excel Pada Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
	<div class="container">
		<a href="/buku/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
		
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>id</th>
					<th>Judul</th>
					<th>Tahun Terbit</th>
                    <th>Jenis</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
				@foreach($buku as $b)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$b->judul}}</td>
					<td>{{$b->tahun_terbit}}</td>
                    <td>{{$b->jenis}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
 
</body>
</html>