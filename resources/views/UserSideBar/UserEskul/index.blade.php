@extends('layouts.user')
@section('content')
    <!-- Awal Jumbotron -->
    <div class="section">

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="app-academy">
                                <div class="card p-0 mb-4">
                                    <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                                        <div
                                            class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                                            <h3 class="card-title mb-4 lh-sm px-md-5 text-center">
                                                EKSTRAKULIKULER SMK ASSALAM BANDUNG
                                            </h3>
                                            <p class="mb-4">
                                                Kegiatan ekstrakurikuler menjembatani kebutuhan perkembangan peserta didik
                                                yang berbeda seperti
                                                perbedaan sense akan nilai moral dan sikap, kemampuan dan kreativitas.
                                                Melalui partipasinya dalam kegiatan ekstrakurikuler peserta didik dapat
                                                belajar dan mengembangkan kemampuan berkomunikasi, bekerja sama dengan orang
                                                lain, serta menemukan dan mengembangkan potensinya.
                                                Kegiatan ekstrakurikuler juga memberikan manfaat sosial yang besar.
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
        <!-- Akhir Jumbotron -->

        <!-- Awal Home -->
        {{-- ROW 1 --}}
        {{-- /ROW 1 --}}
        {{-- ROW 2 --}}
        <div class="row justify-content-center">
            @foreach ($eskul as $data)
                <div class="col-4 mt-n4 ">
                    <div class="card" id="eskul">
                        <img src="{{ asset('images/eskul/' . $data->sampul) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->nama_eskul }}</h5>
                            <p class="card-text">{{ $data->isi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- /ROW 2 --}}
        </div>

    </div>
    <br>
    <!-- Akhir Home -->
@endsection
