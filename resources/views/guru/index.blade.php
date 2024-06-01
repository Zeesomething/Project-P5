        @extends('layouts.admin')
        @section('content')
            {{-- CONTENT --}}
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Guru /</span> List</h4>
                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h5 class="card-header">Guru
                        <a href="{{ route('guru.create') }}" class="btn btn-md btn-info" style="float: right">Tambah</a>
                    </h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Guru</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Guru Mapel</th>
                                    <th scope="col">Sampul</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($guru as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->nama_guru }}</td>
                                        <td>{{ $data->telepon }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->mapel->nama }}</td>
                                        <td>
                                            <img src="{{ asset('/images/guru/' . $data->sampul) }}" width="100">
                                        </td>
                                        <form action="{{ route('guru.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('guru.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('guru.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                                    Delete
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endsection
