@extends('adminlte.master')

@section('content')
<div class="mt-3 ml-3">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pertanyaan Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a class="btn btn-primary mb-2" href="/pertanyaan/create">Create New Pertanyaan</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Created At</th>
                        <th>Last Updated At</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pertanyaan as $key => $p)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $p->judul }}</td>
                            <td>{{ $p->isi }}</td>
                            <td>{{ $p->tanggal_dibuat }}</td>
                            <td>{{ $p->tanggal_diperbaharui }}</td>
                            <td style="display: flex">
                                <a href="/pertanyaan/{{ $p->id }}" class="btn btn-info btn-sm">Show</a>
                                <a href="/pertanyaan/{{ $p->id }}/edit" class="btn btn-default btn-sm">Edit</a>
                                <form action="/pertanyaan/{{ $p->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="!!DELETE!!"  class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan="5" align="center"> No Posts</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div> --}}
    </div>
</div>
@endsection
