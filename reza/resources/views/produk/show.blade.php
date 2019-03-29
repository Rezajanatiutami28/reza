<html>
<head>
	<title>CONTROL STRUKTUR DATA PADA BLADE TEMPLATE</title>
</head>
<body>
	@if (count($produk)==1)
	<p>Jumlah Produk adalah satu</p>
	@elseif(count($produk)>1)
	<p><b>Perulangan dengan FOR</b></p>
	@for ($i = 0; $i <count($produk); $i++)
		<p>{{'No :'.$i.' Nama Produk :' .$produk[$i] }}</p>
	@endfor
	<hr>

	<p><b>Perulangan dengan FOREACH</b></p>
	@foreach ($produk as $x => $v)
	<p>{{'No :'.$x.'Nama produk :'.$v }}</p>
	@endforeach

	<hr>
	<p><b>Perulangan dengan WHILE</b></p>
	@php 
	$no=1;
	@endphp
	@while ($no<=5)
		<p>ini adalah perulangan while gais {{$no }}</p>
	@php
		$no++;
		@endphp
		@endwhile
	@else
		<p>Tidak ada data produk</p>
	@endif

</body>
</html>