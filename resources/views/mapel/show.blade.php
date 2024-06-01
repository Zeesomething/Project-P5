@extends('layouts.admin')
@section('content')
    {{-- CONTENT --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Mapel /</span> Show</h4>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('mapel.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Nama mapel</label>
                                            <input type="text" class="form-control" name="nama_mapel"
                                                value="{{ $mapel->nama_mapel }}" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <a href="{{ url('admin/mapel') }}" class="btn btn-danger">Kembali</a>
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
