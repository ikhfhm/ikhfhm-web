@extends('template_backend.home')
@section('sub-judul','Kategori')
@section('content')

@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
      {{Session('success')}}
    </div>
@endif
<br>
	
	<a href="{{route('category.create')}}" class="btn btn-primary btn-sm">Tambah Kategori</a>
	<br><br>

	<table class="table table-hover table-sm table-bordered">
		<thead>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			@foreach($category as $result => $hasil)
			<tr>
				<td>{{$result + $category->firstitem()}}</td>
				<td>{{$hasil->name}}</td>
				<td><a href="" class="btn btn-warning btn-sm">Edit</a>
					<a href="" class="btn btn-danger btn-sm">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $category->links() }}

@endsection