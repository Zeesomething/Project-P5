@extends('layouts.admin')
@section('content')
    {{-- CONTENT --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Guru /</span> Show</h4>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('guru.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Nama guru</label>
                                            <input type="text" class="form-control" name="nama_guru"
                                                value="{{ $guru->nama_guru }}" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Telepon</label>
                                            <input type="text" class="form-control" name="telepon"
                                                value="{{ $guru->telepon }}" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">E-mail</label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ $guru->email }}" disabled>
                                        </div>
                                        <div class="div">
                                            <label class="form-label">ID Mapel</label>
                                            <input type="text" class="form-control" name="id_mapel"
                                                value="{{ $guru->id_mapel }}" disabled>
                                        </div>
                                        <div class="mb-3">
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
