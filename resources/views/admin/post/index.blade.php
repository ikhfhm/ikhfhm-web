@extends('template_backend.home')
@section('sub-judul','Post')
@section('content')

@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
      {{Session('success')}}
    </div>
@endif
<br>
	
	<a href="{{route('post.create')}}" class="btn btn-primary btn-sm">Tambah Post</a>
	<br><br>

	<table class="table table-hover table-sm table-bordered">
		<thead>
			<th>No</th>
			<th>Nama Post</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			@foreach($post as $result => $hasil)
			<tr>
				<td>{{$result + $post->firstitem()}}</td>
				<td>{{$hasil->judul}}</td>
				<td>
					<form action="{{route('post.destroy', $hasil->id)}}" method="post">
						@csrf
						@method('delete')
					<a href="{{route('post.edit', $hasil->id)}}" class="btn btn-warning btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $post->links() }}

@endsection