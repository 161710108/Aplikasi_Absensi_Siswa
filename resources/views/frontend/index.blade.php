@extends('layouts.user')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
			<div class="panel panel-danger">
			  <div class="panel-heading">Data Absensi
			  	<div class="panel-title pull-right">
			  			<link rel="stylesheet" type="text/css" href="/assets/data/css/datatables.min.css"/>
                            <script type="text/javascript" src="/assets/data/js/datatables.min.js"></script>
</div>
			  	</div>
			  </div>
			  <div class="panel-body">
			  <div class="table-responsive">
			  	<label>Cari Berdasarkan Nama</label>
			  	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
			  	
				  <table id="myTable" class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Tgl_absen</th>
					  <th>Kelas</th>
					  <th>Nis</th>
					  <th>Nama_Siswa</th>
					  <th>Keterangan</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($b as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->tgl_absen }}</td>
				    	<td>{{ $data->Siswa->Kelas->kelas }}</td>
				    	<td>{{ $data->Siswa->nis }}</td>
				    	<td>{{ $data->Siswa->nama }}</td>
				    	<td>{{ $data->keterangan }}</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				  <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection