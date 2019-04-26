<!DOCTYPE html>
<html>
<head>
	<title>Laravel Reza</title>
</head>
<body>
<h3><b>Data Produk</b></h3>
<table border="1">
	<thead>
		<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Kategori</th>
		<th>Qty</th>
		<th>Harga Beli</th>
		<th>Harga Jual</th>
	</tr>
	</thead>
	<tbody>	
		@foreach ($produk as $i => $v)
				<tr>
				<td>{{ $i+1 }}</td> 
				<td>{{ $v->nama }}</td> 
				<td>{{ $v->kategori }}</td> 
				<td>{{ $v->qty }}</td> 
				<td>{{ $v->harga_beli }}</td> 
				<td>{{ $v->harga_jual }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>