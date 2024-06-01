        @extends('layouts.admin')
        @section('content')
            {{-- CONTENT --}}
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Struktural /</span> List</h4>
                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h5 class="card-header">Struktural
                        <a href="{{ route('struktural.create') }}" class="btn btn-md btn-info" style="float: right">Tambah</a>
                    </h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Guru</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Sampul</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($struktural as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->guru->nama_guru }}</td>
                                        <td>{{ $data->jabatan->nama }}</td>
                                        <td>
                                            <img src="{{ asset('/images/struktural/' . $data->sampul) }}" width="100">
                                        </td>
                                        <form action="{{ route('struktural.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('struktural.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('struktural.show', $data->id) }}"
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
