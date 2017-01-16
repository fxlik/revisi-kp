@extends('admin.layout2')

@section('content')
<div class="row breadcrumbs">
	<div class="col-md-12">
    	<ol class="breadcrumb">
        	<li><a href="{{ url('admin') }}">Home</a></li>
        	<li class="active">Responden</li>
      	</ol>
      	<!-- <h3 class="page-header">Responden</h3><br> -->
    </div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
	        	<h3 class="panel-title">Responden</h3>
	        </div>
			<table class="table table-hover">
				<thead>
					<tr>
						<th width="45px" style="text-align: center; vertical-align: middle;">#</th>
						<th>Nama</th>
						<th style="text-align: left; vertical-align: middle;">Email</th>
						<th style="text-align: left; vertical-align: middle;">Daerah</th>
						<th style="text-align: left; vertical-align: middle;">Jabatan</th>
						<th style="text-align: left; vertical-align: middle;">Status</th>
					</tr>
				</thead>
				<tbody>
				@foreach($respondens as $key => $responden)
					<tr>
						<td style="text-align: center; vertical-align: middle;">{{ ++$i }}</td>
						<td style="text-align: left; vertical-align: middle;"> {{$responden->name}} </td>
						<td style="text-align: left; vertical-align: middle;"> {{$responden->email}} </td>
						<td style="text-align: left; vertical-align: middle;"> {{$responden->daerah}} </td>
						<td style="text-align: left; vertical-align: middle;"> {{$responden->jabatan}} </td>
						<td style="text-align: left; vertical-align: middle;"> {{$responden->activated}} </td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection