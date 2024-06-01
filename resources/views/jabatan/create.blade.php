    @extends('layouts.admin')
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Jabatan /</span> Add</h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('jabatan.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Nama jabatan</label>
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <a href="{{ url('admin/jabatan') }}" class="btn btn-danger">Kembali</a>
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
