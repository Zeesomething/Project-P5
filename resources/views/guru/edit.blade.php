@extends('layouts.admin')
@section('content')
    {{-- CONTENT --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Guru /</span> Edit</h4>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label class="form-label">Nama guru</label>
                                            <input type="text" class="form-control" name="nama_guru"
                                                value="{{ $guru->nama_guru }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Telepon</label>
                                            <input type="text" class="form-control" name="telepon"
                                                value="{{ $guru->telepon }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">E-mail</label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ $guru->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Guru Mapel</label>
                                            <select name="id_mapel" class="form-control">
                                                @foreach ($mapel as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ $data->id == $guru->id_mapel ? 'selected' : '' }}>
                                                        {{ $data->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                                <label class="form-label">Sampul</label><br>
                                                <img src="{{ asset('images/guru/' . $guru->sampul) }}" width="100" class="mb-3">
                                                <input type="file" class="form-control" name="sampul">
                                            </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                            <a href="{{ url('admin/guru') }}" class="btn btn-danger">Kembali</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
