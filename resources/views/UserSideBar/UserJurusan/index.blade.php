@extends('layouts.user')
@section('content')
    <div class="bg-image">
        <img src="{{asset('admin/img/IMG_6091.png')}}" width="100%" alt="">
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Awal Home -->

    {{-- /ROW 1 --}}
    {{-- ROW 2 --}}
    <div class="section">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row mt-n4">
                    <div class="col-lg-12">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="app-academy">
                                <div class="card p-0 mb-4">
                                    <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                                        <div
                                            class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                                            <h3 class="card-title mb-4 lh-sm px-md-5 text-center">
                                                JURUSAN SMK ASSALAM BANDUNG
                                            </h3>
                                            <p class="mb-4">
                                                SMK ASSALAAM Memiliki 3 Jurusan yaitu 
                                                <li>RPL(Rekayasa Perankat Lunak)</li>
                                                <li>TBSM(Teknik Bisnis Sepeda Motor)</li>
                                                <li>TKRO(Teknik Kendaraan Ringan Otomatif)</li>
                                            </p>
                                        </div>
                                        <div class="app-academy-md-25 d-flex align-items-end justify-content-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row justify-content-center">
                @foreach ($jurusan as $data)
                    <div class="col md-2">
                        <div class="card" id="eskul"  >
                            <img src="{{ asset('images/jurusan/' .$data->sampul) }}"
                                class="card-img-top" alt="..." width="80%">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->nama_jurusan }}</h5>
                                <p class="card-text">Kaprog : {{ $data->kaprog }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- /ROW 2 --}}
            </div>
        </div>
    </div>
    <br>
    <!-- Akhir Home -->

    <!-- awal footer -->
    @endsection