@extends('layouts.user')
@section('content')
    <!-- Awal Jumbotron -->
    <!-- Akhir Jumbotron -->
    <style>
        .tombol {
            text-decoration: none;
             color: #566A7F;
        }
    </style>
    <!-- Awal Home -->
    <div class="section">
        <div class="container">
            {{-- ROW 1 --}}
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row mb-n5 mt-2">
                        <div class="col-lg-12">
                            <div class="container-xxl flex-grow-1 container-p-y">
                                <div class="app-academy">
                                    <div class="card p-0 mb-4">
                                        <div
                                            class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                                            <div
                                                class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                                                <h3 class="card-title mb-4 lh-sm px-md-5 text-center">
                                                    Detail Artikel
                                                </h3>
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
            {{-- /ROW 1 --}}
            {{-- ROW 2 --}}
            <div class="container-xxl flex-grow-1 container-p-y mt-n5">
                <div class="container justify-content-between">
                    <div class="row text-black mt-5">
                        <div class="col">
                            <img src="{{ asset('images/artikel/' . $artikel->sampul) }}" class="card-img-top"
                                alt="...">
                        </div>
                        <div class="col">
                            <h5 class="card-title">{{ $artikel->judul }}</h5>
                            <p class="text-light mt-2">{{ $artikel->isi }}</p>
                        </div>
                    </div>
                </div>
                <div class="container justify-content-center">
                    
                </div>
            </div>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row mb-n5 mt-2">
                        <div class="col-lg-12">
                            <div class="container-xxl flex-grow-1 container-p-y">
                                <div class="app-academy">
                                    <div class="card p-0 mb-4">
                                        <div
                                            class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                                            <div
                                                class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                                                <h3>
                                                <a href="{{ route('beranda') }}" class="mb-4 lh-sm px-md-5 tombol">Kembali</a>
                                                </h3>
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
            {{-- /ROW 2 --}}
        </div>
    </div>
    <br>
    <!-- Akhir Home -->
@endsection
