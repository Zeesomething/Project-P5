@extends('layouts.admin')
@section('content')
    {{-- CONTENT --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Jurusan /</span> Show</h4>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('jurusan.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Kaprog</label>
                                            <input type="text" class="form-control" name="kaprog"
                                                value="{{ $jurusan->kaprog }}" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Jurusan</label>
                                            <input type="text" class="form-control" name="nama_jurusan"
                                                value="{{ $jurusan->nama_jurusan }}" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Sampul</label><br>
                                            <img src="{{ asset('images/jurusan/' . $jurusan->sampul) }}" width="100" class="mb-3">
                                        </div>
                                        <div class="mb-3">
                                            <a href="{{ url('admin/jurusan') }}" class="btn btn-danger">Kembali</a>
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
