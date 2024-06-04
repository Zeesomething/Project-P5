@extends('layouts.user')
@section('content')
    <!-- Awal Jumbotron -->
    <!-- Akhir Jumbotron -->

    <!-- Awal Home -->

    {{-- /ROW 1 --}}
    {{-- ROW 2 --}}
    <div class="section">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row mb-n5 mt-2">
                    <div class="col-lg-12">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="app-academy">
                                <div class="card p-0 mb-4">
                                    <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                                        <div
                                            class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                                            <h3 class="card-title mb-4 lh-sm px-md-5 text-center">
                                                DAFTAR GURU SMK ASSALAM BANDUNG
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
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row justify-content-center">
            @foreach ($guru as $data)
                    <div class="col-4 mt-5 ">
                        <div class="card" id="eskul"  >
                            <img src="{{ asset('images/guru/' .$data->sampul) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data ->nama_guru }}</h5>
                                <p class="card-text">{{ $data->telepon }}</p>
                                <p class="card-text">{{ $data->email }}</p>
                                <p class="card-text">{{ $data->mapel->nama }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
        </div>
    </div>
    <!-- Akhir Home -->

    <!-- awal footer -->
    @endsection